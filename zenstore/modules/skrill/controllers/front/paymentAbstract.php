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
 
class SkrillPaymentAbstractModuleFrontController extends ModuleFrontController
{
    protected $payment_method = '';
    protected $template_name = 'skrill_form.tpl';
    public $ssl = true;

    protected function getPaymentMethod()
    {
        return $this->payment_method;
    }

    protected function getTemplateName()
    {
        return $this->template_name;
    }

    public function initContent()
    {
        $this->display_column_left = false;
        $this->process();
        if (!isset($this->context->cart)) {
            $this->context->cart = new Cart();
        }
        if (!$this->useMobileTheme()) {
            $this->context->smarty->assign(array(
                'HOOK_HEADER' => Hook::exec('displayHeader'),
                'HOOK_LEFT_COLUMN' => ($this->display_column_left ? Hook::exec('displayLeftColumn') : ''),
                'HOOK_RIGHT_COLUMN' => ($this->display_column_right ? Hook::exec('displayRightColumn', array(
                    'cart' => $this->context->cart)) : ''),
            ));
        } else {
            $this->context->smarty->assign('HOOK_MOBILE_HEADER', Hook::exec('displayMobileHeader'));
        }

        $contextLink = $this->context->link;
        $postParameters = $this->getPostParameters();

        try {
            $sid = SkrillPaymentCore::getSid($postParameters);
        } catch (Exception $e) {
            Tools::redirect($contextLink->getPageLink('order', true, null, array(
                'step' => '3', 'skrillerror' => 'ERROR_GENERAL_REDIRECT')));
        }
        if (!$sid) {
            Tools::redirect($contextLink->getPageLink('order', true, null, array(
                'step' => '3', 'skrillerror' => 'ERROR_GENERAL_REDIRECT')));
        }
        $redirectUrl = SkrillPaymentCore::getSkrillRedirectUrl($sid);
        if (Configuration::get('SKRILL_GENERAL_DISPLAY') != "IFRAME") {
            Tools::redirect($redirectUrl);
        }
        $this->context->smarty->assign(array(
            'fullname' => $this->context->customer->firstname ." ". $this->context->customer->lastname,
            'lang'	  => $this->getLang(),
            'redirectUrl' => $redirectUrl,
            'total' => $this->context->cart->getOrderTotal(true, Cart::BOTH),
            'this_path' => $this->module->getPathUri(),
            'this_path_ssl' => Tools::getShopDomainSsl(true, true).__PS_BASE_URI__.'modules/'.$this->module->name.'/'
        ));
        $this->setTemplate($this->getTemplateName());
    }

    private function getPostParameters()
    {
        $paymentMethod = $this->getPaymentMethod();
        $cart = $this->context->cart;
        $address = new Address((int)$cart->id_address_delivery);
        $country = new Country($address->id_country);
        $currencyobj = new Currency((int)$cart->id_currency);
        $getDateTime = SkrillPaymentCore::getDateTime();
        $randomNumber = SkrillPaymentCore::randomNumber(4);
        $contextLink = $this->context->link;
        $skrillSettings = $this->getSkrillSettings();
        $customer = new Customer($cart->id_customer);
        $secureKey = $customer->secure_key;
        $statusUrl = $this->getStatusUrl($cart->id, $paymentMethod);

        if (empty($skrillSettings['merchant_id'])
            || empty($skrillSettings['merchant_account'])
            || empty($skrillSettings['recipient_desc'])
            || empty($skrillSettings['logo_url'])
            || empty($skrillSettings['api_passwd'])
            || empty($skrillSettings['secret_word'])) {
            Tools::redirect($contextLink->getPageLink('order', true, null, array(
                'step' => '3', 'skrillerror' => 'ERROR_GENERAL_REDIRECT')));
        }

        $postParameters = array();
        $postParameters['pay_to_email'] = $skrillSettings['merchant_account'];
        $postParameters['recipient_description'] = $skrillSettings['recipient_desc'];
        $postParameters['transaction_id'] = date('ymd').$cart->id.$getDateTime.$randomNumber;
        $postParameters['return_url'] = $contextLink->getModuleLink(
            'skrill',
            'validation',
            array('cart_id' => $cart->id, 'payment_method' => $paymentMethod, 'secure_key' => $secureKey),
            true
        );
        if ($statusUrl) {
            $postParameters['status_url'] = $statusUrl;
        }
        $postParameters['status_url2'] = 'mailto:'.$skrillSettings['merchant_email'];
        $postParameters['cancel_url'] = $contextLink->getPageLink('order', true, null, array('step' => '3'));
        $postParameters['language'] = $this->getLang();
        $postParameters['logo_url'] = $skrillSettings['logo_url'];
        $postParameters['prepare_only'] = 1;
        $postParameters['pay_from_email'] = $this->context->customer->email;
        $postParameters['firstname'] = $this->context->customer->firstname;
        $postParameters['lastname'] = $this->context->customer->lastname;
        $postParameters['address'] = $address->address1;
        $postParameters['postal_code'] = $address->postcode;
        $postParameters['city'] = $address->city;
        $postParameters['country'] = SkrillPaymentCore::getCountryIso3($country->iso_code);
        $postParameters['amount'] = $cart->getOrderTotal(true, Cart::BOTH);
        $postParameters['currency'] = $currencyobj->iso_code;
        $postParameters['detail1_description'] = "Order pay from ".$this->context->customer->email;
        $postParameters['merchant_fields'] = 'Platform,Developer';
        $postParameters['Platform'] = '21445510';
        $postParameters['Developer'] = 'Payreto';
        if ($paymentMethod != 'FLEXIBLE') {
            $postParameters['payment_methods'] = $paymentMethod;
        }

        return $postParameters;
    }

    private function getStatusUrl($cartId, $paymentMethod)
    {
        $statusUrl = $this->context->link->getModuleLink(
            'skrill',
            'paymentStatus',
            array('cart_id' => $cartId, 'payment_method' => $paymentMethod),
            true
        );
        if ($this->module->isUrlSecured($statusUrl)) {
            return $statusUrl;
        }
        return false;
    }
    
    private function getLang()
    {
        $langobj = new Language((int)$this->context->cart->id_lang);
        $langs = $langobj->iso_code;
 
        switch ($langs) {
            case 'de':
            case 'pl':
            case 'it':
            case 'fr':
            case 'es':
                return $langs;
        }
        return 'en';
    }

    private function getSkrillSettings()
    {
        $skrillSettings = array();
        $skrillSettings['merchant_id']      = Configuration::get('SKRILL_GENERAL_MERCHANTID');
        $skrillSettings['merchant_account'] = Configuration::get('SKRILL_GENERAL_MERCHANTACCOUNT');
        $skrillSettings['recipient_desc']   = Configuration::get('SKRILL_GENERAL_RECIPENT');
        $skrillSettings['logo_url']         = Configuration::get('SKRILL_GENERAL_LOGOURL');
        $skrillSettings['api_passwd']       = Configuration::get('SKRILL_GENERAL_APIPASS');
        $skrillSettings['secret_word']      = Configuration::get('SKRILL_GENERAL_SECRETWORD');
        $skrillSettings['merchant_email']   = Configuration::get('SKRILL_GENERAL_MERCHANTEMAIL');

        return $skrillSettings;
    }
}
