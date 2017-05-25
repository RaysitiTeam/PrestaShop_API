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

class SkrillPaymentStatusModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        $status = Tools::getValue('status');
        if ($status) {
            $this->validatePayment();
        }
    }

    protected function validatePayment()
    {
        $response = $this->getResponse();
        $transactionId = $response['transaction_id'];
        $order = $this->module->getOrderByTransactionId($transactionId);

        if (isset($response)) {
            $serializedResponse = $this->module->convertArrayToSerialize($response);
            if (!isset($order['order_status'])) {
                $this->saveResponse($transactionId, $serializedResponse);
            } elseif ($order['order_status'] == $this->module->pendingStatus) {
                $this->updateResponse($transactionId, $response, $serializedResponse);
                $this->module->updatePaymentStatus($order['id_order'], $response['status']);
            }
        }
    }

    protected function getResponse()
    {
        $response = array();
        foreach ($_REQUEST as $parameter => $value) {
            $parameter = Tools::strtolower($parameter);
            $response[$parameter] = $value;
        }
        return $response;
    }

    protected function saveResponse($transactionId, $serializedResponse)
    {
        $sql = "INSERT INTO skrill_order_ref
            (transaction_id, payment_response) VALUES "."('".
                pSQL($transactionId)."','".
                pSQL($serializedResponse).
            "')";

        if (!Db::getInstance()->execute($sql)) {
            die('Erreur etc.');
        }
    }

    protected function updateResponse($transactionId, $response, $serializedResponse)
    {
        $sql = "UPDATE skrill_order_ref SET
            order_status = '".pSQL($response['status'])."',
            payment_response = '".pSQL($serializedResponse)."'
            where transaction_id = '".pSQL($transactionId)."'";

        if (!Db::getInstance()->execute($sql)) {
            die('Erreur etc.');
        }
    }
}
