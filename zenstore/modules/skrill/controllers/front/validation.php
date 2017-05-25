<?php
/**
* 2015 Skrill
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
*  @author    Skrill <contact@skrill.com>
*  @copyright 2015 Skrill
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of Skrill
*/

require_once(dirname(__FILE__).'/../../core/core.php');
require_once(dirname(__FILE__).'/../../core/versiontracker.php');

class SkrillValidationModuleFrontController extends ModuleFrontController
{
    protected $checkoutUrl = 'index.php?controller=order&step=1';
    protected $orderConfirmationUrl = 'index.php?controller=order-confirmation&id_cart=';
    protected $statusUrl = false;
    protected $refundType = 'fraud';

    public function postProcess()
    {
        $transactionId = Tools::getValue('transaction_id');
        $order = $this->module->getOrderByTransactionId($transactionId);

        if ($order) {
            $response = $this->module->serializeArray($order['payment_response']);
            $this->statusUrl = true;
        } else {
            $fieldParams = $this->module->getSkrillCredentials();
            $fieldParams['type'] = 'trn_id';
            $fieldParams['id'] = $transactionId;
            $paymentResponse = '';
            $isPaymentAccepted = SkrillPaymentCore::isPaymentAccepted($fieldParams, $paymentResponse);
            if (!$isPaymentAccepted) {
                $this->redirectError('ERROR_GENERAL_NORESPONSE');
            }
            $response = SkrillPaymentCore::getResponseArray($paymentResponse);
        }

        $versionData = $this->module->getVersionData();
        VersionTracker::sendVersionTracker($versionData);
        $this->validatePayment($response);
    }

    protected function validatePayment($response)
    {
        $cart = $this->context->cart;
        $customer = new Customer($cart->id_customer);
        if ($cart->id_customer == 0 || $cart->id_address_delivery == 0
            || $cart->id_address_invoice == 0 || !$this->module->active
            || !Validate::isLoadedObject($customer)) {
            Tools::redirect($this->checkoutUrl);
        }
        
        $orderTotal = (float)$cart->getOrderTotal(true, Cart::BOTH);
        $transactionLog = $this->setTransactionLog($orderTotal, $response);

        if ($this->statusUrl) {
            $this->updateTransactionLog($transactionLog);
        } else {
            $serializedResponse = $this->module->convertArrayToSerialize($response);
            $this->saveTransactionLog($transactionLog, $serializedResponse);
        }
        
        $isFraud = $this->module->isFraud($orderTotal, $response);
        $isAuthorized = $this->module->isAuthorized();
        if ($isFraud or !$isAuthorized) {
            $this->processFraudPayment($response);
        }
        $this->processSuccessPayment($customer, $orderTotal, $response, $transactionLog);
    }

    protected function processSuccessPayment($customer, $orderTotal, $response, $transactionLog)
    {
        if ($response['status'] == $this->module->processedStatus
            || $response['status'] == $this->module->pendingStatus) {
            $cart = $this->context->cart;
            $currency = $this->context->currency;

            $cartId = (int)$cart->id;
            $secureKey = $customer->secure_key;
            $paymentName = $transactionLog['payment_name'];
            $currencyId = (int) $currency->id;
            if ($response['status'] == $this->module->processedStatus) {
                $paymentStatus = Configuration::get('PS_OS_PAYMENT');
            } else {
                $paymentStatus = Configuration::get('SKRILL_PAYMENT_STATUS_PENDING');
            }
            $this->module->validateOrder(
                $cartId,
                $paymentStatus,
                $orderTotal,
                $paymentName,
                null,
                array(),
                $currencyId,
                false,
                $secureKey
            );
            $this->updateTransactionInformation($response);
            $this->context->cookie->skrill_paymentName = $transactionLog['payment_name'];
            $this->redirectSuccess($cartId, $secureKey);
        } else {
            $this->module->updateTransactionLogStatus($response['mb_transaction_id'], $response['status']);
            if ($response['status'] == $this->module->failedStatus) {
                $errorStatus = SkrillPaymentCore::getSkrillErrorMapping($response['failed_reason_code']);
                $this->redirectError($errorStatus);
            }
            $this->redirectError('SKRILL_ERROR_99_GENERAL');
        }

    }

    protected function saveTransactionLog($transactionLog, $serializedResponse)
    {
        $sql = "INSERT INTO skrill_order_ref
            (transaction_id, payment_method, order_status, ref_id, payment_code, currency, amount, payment_response)
            VALUES "."('".
                pSQL($transactionLog['transaction_id'])."','".
                pSQL($transactionLog['payment_method'])."','".
                pSQL($transactionLog['status'])."','".
                pSQL($transactionLog['mb_transaction_id'])."','".
                pSQL($transactionLog['payment_type'])."','".
                pSQL($transactionLog['currency'])."','".
                (float)$transactionLog['amount']."','".
                pSQL($serializedResponse).
            "')";
        if (!Db::getInstance()->execute($sql)) {
            die('Erreur etc.');
        }
    }

    protected function updateTransactionLog($transactionLog)
    {
        $sql = "UPDATE skrill_order_ref SET 
            payment_method = '".pSQL($transactionLog['payment_method'])."',
            order_status = '".pSQL($transactionLog['status'])."',
            ref_id = '".pSQL($transactionLog['mb_transaction_id'])."',
            payment_code = '".pSQL($transactionLog['payment_type'])."',
            currency = '".pSQL($transactionLog['currency'])."',
            amount = '".pSQL($transactionLog['amount'])."'
            where transaction_id = '".pSQL($transactionLog['transaction_id'])."'";

        if (!Db::getInstance()->execute($sql)) {
            die('Erreur etc.');
        }
    }

    protected function setTransactionLog($orderTotal, $response)
    {
        $transactionLog = array();
        $transactionLog['transaction_id'] = $response['transaction_id'];
        $transactionLog['mb_transaction_id'] = $response['mb_transaction_id'];
        $transactionLog['payment_type'] = $this->getPaymentType($response);
        $transactionLog['payment_method'] = 'SKRILL_FRONTEND_PM_'.Tools::getValue('payment_method');
        $transactionLog['payment_name'] = $this->getPaymentName($transactionLog['payment_type']);
        $transactionLog['status'] = $response['status'];
        $transactionLog['currency'] = $this->getPaymentCurrency($response);
        $transactionLog['amount'] = $this->getPaymentAmount($orderTotal, $response);
        return $transactionLog;
    }

    protected function updateTransactionInformation($response)
    {
        $orderId = $this->module->currentOrder;
        $updateInfo = '';
        $additionalInfo = array();
        if ($response["ip_country"] && $response['payment_instrument_country']) {
            $additionalInfo[0] = 'SKRILL_BACKEND_ORDER_ORIGIN=>'.$response["ip_country"];
            $additionalInfo[1] = 'SKRILL_BACKEND_ORDER_COUNTRY=>'.$response['payment_instrument_country'];
            $updateInfo = ", add_information = '".serialize($additionalInfo)."'";
        }

        $sql = "UPDATE skrill_order_ref SET id_order = '".(int)$orderId."'
            ".$updateInfo." where ref_id = '".pSQL($response['mb_transaction_id'])."'";
        if (!Db::getInstance()->execute($sql)) {
            die('Erreur etc.');
        }
    }

    protected function getPaymentType($response)
    {
        if (!empty($response['payment_type'])) {
            if ($response['payment_type'] == 'NGP') {
                return 'OBT';
            } else {
                return $response['payment_type'];
            }
        }
        return Tools::getValue('payment_method');
    }

    protected function getPaymentName($paymentType)
    {
        $paymentMethod = SkrillPaymentCore::getPaymentMethods($paymentType);
        if ($this->module->l('SKRILL_FRONTEND_PM_'.$paymentType) == 'SKRILL_FRONTEND_PM_'.$paymentType) {
            $paymentName = $paymentMethod['name'];
        } else {
            $paymentName = $this->module->l('SKRILL_FRONTEND_PM_'.$paymentType);
        }
        
        $isSkrill = strpos($paymentName, 'Skrill');
        if ($isSkrill === false) {
            $paymentName = 'Skrill '.$paymentName;
        }

        return $paymentName;
    }

    protected function getPaymentCurrency($response)
    {
        if (!empty($response['currency'])) {
            return $response['currency'];
        }
        return $this->context->currency->iso_code;
    }

    protected function getPaymentAmount($orderTotal, $response)
    {
        if (!empty($response['amount'])) {
            return $response['amount'];
        }
        return $orderTotal;
    }

    protected function processFraudPayment($response)
    {
        $refundedStatus =  $this->module->refundedStatus;
        $refundFailedStatus =  $this->module->refundFailedStatus;
        $refId = '';
        $refundResult = $this->module->refundOrder($response, $refId, $this->refundType);
        $refundStatus = (string) $refundResult->status;
        if ($refundStatus == $this->module->processedStatus) {
            $this->module->updateTransactionLogStatus($response['mb_transaction_id'], $refundedStatus);
        } else {
            $this->module->updateTransactionLogStatus($response['mb_transaction_id'], $refundFailedStatus);
        }
        $this->redirectError('ERROR_GENERAL_FRAUD_DETECTION');
    }

    private function redirectError($returnMessage)
    {
        Tools::redirect($this->context->link->getPageLink('order', true, null, array(
            'step' => '3', 'skrillerror' => $returnMessage)));
    }

    protected function redirectSuccess($cartId, $secureKey)
    {
        Tools::redirect(
            $this->orderConfirmationUrl.
            $cartId.
            '&id_module='.(int)$this->module->id.
            '&key='.$secureKey
        );
    }
}
