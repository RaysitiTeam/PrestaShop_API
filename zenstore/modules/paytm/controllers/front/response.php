<?php
/**
* 2016-2020 PrestaShop
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
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2016-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

class PaytmResponseModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        require_once(dirname(__FILE__).'/../../lib/encdec_paytm.php');
        $res_code      = Tools::getValue('RESPCODE');
        $res_desc      = Tools::getValue('RESPMSG');
        $res_desc = $res_desc;
        $checksum_recv = Tools::getValue('CHECKSUMHASH');
        $paramList     = $_POST;
        
        $secret_key       = Configuration::get('PayTM_SECRET_KEY');
        $order_amount  = Tools::getValue('TXNAMOUNT');
                
        $bool = "FALSE";

        $bool = verifychecksum_e($paramList, $secret_key, $checksum_recv);
        
        $extras = array();
        $extras['transaction_id'] = Tools::getValue('TXNID');
        $cart = $this->context->cart;
        $amount = $cart->getOrderTotal(true, Cart::BOTH);
        $amount = $amount;
        $responseMsg = Tools::getValue('RESPMSG');
        if ($bool == "TRUE") {
            if ($res_code == "01") {
                $status_code = "Ok";
                $message= "Transaction Successful";
                $status = Configuration::get('PS_OS_PAYMENT');
            } elseif ($res_code == "141") {
                $responseMsg = "Transaction Cancelled. ";
                $message = "Transaction Cancelled";
                $status = Configuration::get('PS_OS_ERROR');
            } else {
                $responseMsg = "Transaction Failed. ";
                $message = "Transaction Failed";
                $status = Configuration::get('PS_OS_ERROR');
            }

            $history_message = $responseMsg.'. Paytm Payment ID: '.Tools::getValue('TXNID');
            $this->module->validateOrder(
                (int)$cart->id,
                $status,
                $order_amount,
                $this->module->displayName,
                $history_message,
                $extras,
                (int)Context::getContext()->currency->id,
                false,
                Context::getContext()->customer->secure_key
            );
            
            $this->context->smarty->assign(array(
            'status' => $status_code,
            'responseMsg' => $message,
            'this_path' => $this->module->getPathUri(),
            'this_path_ssl' => Tools::getShopDomainSsl(true, true).__PS_BASE_URI__.'modules/'.$this->module->name.'/'
            ));
            
            $this->setTemplate('payment_response.tpl');
        } else {
            Tools::redirect('index.php?controller=order&step=1');
        }
    }
}
