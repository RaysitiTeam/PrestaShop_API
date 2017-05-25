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

class Paytm extends PaymentModule
{
    private $html = '';
    private $postErrors = array();
    private $responseReasonText = null;

    public function __construct()
    {
        require_once(dirname(__FILE__).'/lib/encdec_paytm.php');

        $this->name = 'paytm';
        $this->tab = 'payments_gateways';
        $this->version = '3.0.0';
        $this->author = 'gdast';
        parent::__construct();
        $this->page = basename(__FILE__, '.php');
        $this->displayName = $this->l('Paytm');
        $this->description = $this->l('Module for accepting payments by Paytm');
        $this->module_key = 'c591abbba946053917ae1439293b24be';
        $this->bootstrap = true;
    }
    
    public function getPaytmUrl()
    {
        return Configuration::get('Paytm_GATEWAY_URL');
    }
    
    public function install()
    {
        if (parent::install()) {
            Configuration::updateValue('PayTM_MERCHANT_ID', '');
            Configuration::updateValue('PayTM_SECRET_KEY', '');
            Configuration::updateValue('PayTM_MODE', '');
            Configuration::updateValue('PayTM_GATEWAY_URL', '');
            Configuration::updateValue('PayTM_MERCHANT_INDUSTRY_TYPE', '');
            Configuration::updateValue('PayTM_MERCHANT_CHANNEL_ID', '');
            Configuration::updateValue('PayTM_MERCHANT_WEBSITE', '');
            Configuration::updateValue('PayTM_ENABLE_CALLBACK', '');
                       
            
            $this->registerHook('payment');
            $this->registerHook('PaymentReturn');
            $this->registerHook('ShoppingCartExtra');
            if (!Configuration::get('Paytm_ORDER_STATE')) {
                $this->setPaytmOrderState('Paytm_ID_ORDER_SUCCESS', 'Payment Received', '#b5eaaa');
                $this->setPaytmOrderState('Paytm_ID_ORDER_FAILED', 'Payment Failed', '#E77471');
                $this->setPaytmOrderState('Paytm_ID_ORDER_PENDING', 'Payment Pending', '#F4E6C9');
                Configuration::updateValue('Paytm_ORDER_STATE', '1');
            }
            return true;
        } else {
            return false;
        }
    }
    
    public function uninstall()
    {
        if (!Configuration::deleteByName('PayTM_MERCHANT_ID') or
            !Configuration::deleteByName('PayTM_SECRET_KEY') or
            !Configuration::deleteByName('PayTM_MODE') or
            !Configuration::deleteByName('PayTM_GATEWAY_URL') or
            !Configuration::deleteByName('PayTM_MERCHANT_INDUSTRY_TYPE') or
            !Configuration::deleteByName('PayTM_MERCHANT_CHANNEL_ID') or
            !Configuration::deleteByName('PayTM_MERCHANT_WEBSITE') or
            !Configuration::deleteByName('PayTM_ENABLE_CALLBACK') or
            !parent::uninstall()) {
                return false;
        }
        return true;
    }
    
    public function setPaytmOrderState($var_name, $status, $color)
    {
        $orderState = new OrderState();
        $orderState->name = array();
        foreach (Language::getLanguages() as $language) {
            $orderState->name[$language['id_lang']] = $status;
        }
        $orderState->send_email = false;
        $orderState->color = $color;
        $orderState->hidden = false;
        $orderState->delivery = false;
        $orderState->logable = true;
        $orderState->invoice = true;
        if ($orderState->add()) {
            Configuration::updateValue($var_name, (int)$orderState->id);
        }
        return true;
    }
    
    public function getContent()
    {
        if (Tools::getIsset('submitPayTM')) {
            if (Tools::getValue('merchant_id') == '') {
                $this->postErrors[] = $this->l('Please Enter your Merchant ID.');
            }
            if (Tools::getValue('secret_key') == '') {
                $this->postErrors[] = $this->l('Please Enter your Secret Key.');
            }
            if (Tools::getValue('gateway_url') == '') {
                $this->postErrors[] = $this->l('Please Enter PayTM Gateway Url.');
            }
            if (Tools::getValue('industry_type') == '') {
                $this->postErrors[] = $this->l('Please Enter your Industry Type.');
            }
            if (Tools::getValue('channel_id') == '') {
                $this->postErrors[] = $this->l('Please Enter your Merchant Channel ID.');
            }
            if (Tools::getValue('website') == '') {
                $this->postErrors[] = $this->l('Please Enter your Website.');
            }
            if (Tools::getValue('mode') == '') {
                $this->postErrors[] = $this->l('Please Select the Mode, you want to work on .');
            }

            if (!sizeof($this->postErrors)) {
                Configuration::updateValue('PayTM_MERCHANT_ID', Tools::getValue('merchant_id'));
                Configuration::updateValue('PayTM_SECRET_KEY', Tools::getValue('secret_key'));
                Configuration::updateValue('PayTM_GATEWAY_URL', Tools::getValue('gateway_url'));
                Configuration::updateValue('PayTM_MERCHANT_INDUSTRY_TYPE', Tools::getValue('industry_type'));
                Configuration::updateValue('PayTM_MERCHANT_CHANNEL_ID', Tools::getValue('channel_id'));
                Configuration::updateValue('PayTM_MERCHANT_WEBSITE', Tools::getValue('website'));
                Configuration::updateValue('PayTM_MODE', Tools::getValue('mode'));
                Configuration::updateValue('PayTM_ENABLE_CALLBACK', Tools::getValue('callback'));
                $this->displayConf();
            } else {
                $this->displayErrors();
            }
        }
        $this->displayPaytm();
        $this->html .= $this->displayFormSettings();
        return $this->html;
    }
    
    public function displayConf()
    {
        $this->html .= $this->displayConfirmation($this->l('Settings updated'));
    }
    
    public function displayErrors()
    {
        $this->html .= '';
        foreach ($this->postErrors as $error) {
                $this->html .= $this->displayError($error);
        }
    }

    public function displayPaytm()
    {
        $this->context->smarty->assign('module_dir', $this->_path);
        $this->html .= $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');
    }
    
    public function displayFormSettings()
    {
        $mode = Configuration::get('PayTM_MODE');
        $id = Configuration::get('PayTM_MERCHANT_ID');
        $key = Configuration::get('PayTM_SECRET_KEY');
        $url = Configuration::get('PayTM_GATEWAY_URL');
        $itype = Configuration::get('PayTM_MERCHANT_INDUSTRY_TYPE');
        $cid = Configuration::get('PayTM_MERCHANT_CHANNEL_ID');
        $site = Configuration::get('PayTM_MERCHANT_WEBSITE');
        $z_callback = Configuration::get('PayTM_ENABLE_CALLBACK');

        if (Tools::getValue('merchant_id') != '' &&  $id == '') {
            $id = Tools::getValue('merchant_id');
        }
        if (Tools::getValue('secret_key') != '' &&  $key == '') {
            $key = Tools::getValue('secret_key');
        }
        if (Tools::getValue('gateway_url') != '' &&  $url == '') {
            $url = Tools::getValue('gateway_url');
        }
        if (Tools::getValue('industry_type') != '' &&  $itype == '') {
            $itype = Tools::getValue('industry_type');
        }
        if (Tools::getValue('channel_id') != '' &&  $cid == '') {
            $cid = Tools::getValue('channel_id');
        }
        if (Tools::getValue('website') != '' &&  $site == '') {
            $site = Tools::getValue('website');
        }
        if (Tools::getValue('callback') != '' &&  $z_callback == '') {
            $z_callback = Tools::getValue('callback');
        }
        
        if (!empty($id)) {
            $merchant_id = $id;
        } else {
            $merchant_id = '';
        }

        if (!empty($key)) {
            $secret_key = $key;
        } else {
            $secret_key = '';
        }
        
        if (!empty($url)) {
            $gateway_url = $url;
        } else {
            $gateway_url = '';
        }
        
        if (!empty($itype)) {
            $industry_type = $itype;
        } else {
            $industry_type = '';
        }
        
        if (!empty($cid)) {
            $channel_id = $cid;
        } else {
            $channel_id = '';
        }
        
        if (!empty($site)) {
            $website = $site;
        } else {
            $website = '';
        }
        // Get default language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $fields_form = array();
        $options = array();
        $options[] = array("id"=>'TEST',"name"=>'Sandbox(Test)');
        $options[] = array("id"=>'LIVE',"name"=>'Live');
        
        // Init Fields form array
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('SETTINGS'),
                'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('PayTM Merchant ID'),
                    'name' => 'merchant_id',
                    'size' => 40,
                    'class'     => 't',
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('PayTM Merchant Key'),
                    'name' => 'secret_key',
                    'size' => 40,
                    'class'     => 't',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('PayTM Gateway Url'),
                    'name' => 'gateway_url',
                    'size' => 40,
                    'class'     => 't',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('PayTM Merchant Industry Type'),
                    'name' => 'industry_type',
                    'size' => 40,
                    'class'     => 't',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('PayTM Merchant Channel ID'),
                    'name' => 'channel_id',
                    'size' => 40,
                    'class'     => 't',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('PayTM Merchant Website'),
                    'name' => 'website',
                    'size' => 40,
                    'class'     => 't',
                    'required' => true
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('PayTM Mode'),
                    'name' => 'mode',
                    'class'     => 't',
                    'required' => true,
                    'options' => array(
                        'query' => $options,
                        'id' => 'id',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'radio',
                    'label' => $this->l('Please select PayTM Callback url mode'),
                    'name' => 'callback',
                    'class'     => 't',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 'ON',
                            'label' => $this->l('On')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 'OFF',
                            'label' => $this->l('Off')
                        )
                    ),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Update settings'),
            )
        );
         
        $helper = new HelperForm();
         
        // Module, token and currentIndex
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
         
        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
         
        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitPayTM';
         
        // Load current value
        $helper->fields_value['merchant_id'] = $merchant_id;
        $helper->fields_value['secret_key'] = $secret_key;
        $helper->fields_value['gateway_url'] = $gateway_url;
        $helper->fields_value['industry_type'] = $industry_type;
        $helper->fields_value['channel_id'] = $channel_id;
        $helper->fields_value['website'] = $website;
        $helper->fields_value['mode'] = $mode;
        $helper->fields_value['callback'] = $z_callback;
         
        return $helper->generateForm($fields_form);
    }
    
    public function hookPayment($params)
    {
        $payload="izKqKIvMdSv2dA6qSgp3q0zxyDaPisgoSHEptgUA";
        $payload = $payload;
        $this->context->smarty->assign(array(
            'this_path'         => $this->_path,
            'this_path_ssl'     => Configuration::get('PS_FO_PROTOCOL').
            $_SERVER['HTTP_HOST'].__PS_BASE_URI__."modules/{$this->name}/"));
    
        return $this->display(__FILE__, 'payment.tpl');
    }
    
    

    public function execPayment($cart)
    {
        $payload="izKqKIvMdSv2dA6qSgp3q0zxyC72cvfLSM4LNI+KyChIcSm2BQA=";
        
        $payload = $payload;
        $bill_address = new Address((int)$cart->id_address_invoice);
        $ship_address = new Address((int)$cart->id_address_delivery);
        $bc = new Country($bill_address->id_country);
        $sc = new Country($ship_address->id_country);
        $sc = $sc;
        $customer = new Customer((int)$cart->id_customer);
        
        $account_id= Configuration::get('ACCOUNT_ID');
        $secret_key = Configuration::get('SECRET_KEY');
        $mode = Configuration::get('MODE');
        $id_currency = (int)Configuration::get('PS_CURRENCY_DEFAULT');
        $currency = new Currency((int)$id_currency);
        $currency =  $currency;
        $first_name = $bill_address->firstname;
        $last_name = $bill_address->lastname;
        $name = $first_name." ".$last_name;
        $name = $name;
        $address1 = $bill_address->address1;
        $address2 = $bill_address->address2;
        $address = $address1." ".$address2;
        $address = $address;
        $city = $bill_address->city;
        $city = $city;
        $Code = array("AF" =>  "AFG", "AL" => "ALB",
        "DZ" => "DZA",
        "AS" => "ASM",
        "AD" => "AND",
        "AO" => "AGO",
        "AI" => "AIA",
        "AQ" => "ATA",
        "AG" => "ATG",
        "AR" => "ARG",
        "AM" => "ARM",
        "AW" => "ABW",
        "AU" => "AUS",
        "AT" => "AUT",
        "AZ" => "AZE",
        "BS" => "BHS",
        "BH" => "BHR",
        "BD" => "BGD",
        "BB" => "BRB",
        "BY" => "BLR",
        "BE" => "BEL",
        "BZ" => "BLZ",
        "BJ" => "BEN",
        "BM" => "BMU",
        "BT" => "BTN",
        "BO" => "BOL",
        "BA" => "BIH",
        "BW" => "BWA",
        "BV" => "BVT",
        "BR" => "BRA",
        "IO" => "IOT",
        "VG" => "VGB",
        "BN" => "BRN",
        "BG" => "BGR",
        "BF" => "BFA",
        "BI" => "BDI",
        "KH" => "KHM",
        "CM" => "CMR",
        "CA" => "CAN",
        "CV" => "CPV",
        "KY" => "CYM",
        "CF" => "CAF",
        "TD" => "TCD",
        "CL" => "CHL",
        "CN" => "CHN",
        "CX" => "CXR",
        "CC" => "CCK",
        "CO" => "COL",
        "KM" => "COM",
        "CG" => "COG",
        "CK" => "COK",
        "CR" => "CRI",
        "CI" => "CIV",
        "HR" => "HRV",
        "CU" => "CUB",
        "CY" => "CYP",
        "CZ" => "CZE",
        "DK" => "DNK",
        "DM" => "DMA",
        "DO" => "DOM",
        "TL" => "TLS",
        "EC" => "ECU",
        "EG" => "EGY",
        "SV" => "SLV",
        "GQ" => "GNQ",
        "ER" => "ERI",
        "EE" => "EST",
        "ET" => "ETH",
        "FK" => "FLK",
        "FO" => "FRO",
        "FJ" => "FJI",
        "FI" => "FIN",
        "FR => FRA",
        "FX" => "FXX",
        "GF" => "GUF",
        "PF" => "PYF",
        "TF" => "ATF",
        "GA" => "GAB",
        "GE" => "GEO",
        "GM" => "GMB",
        "PS" => "PSE",
        "DE" => "DEU",
        "GH" => "GHA",
        "GI" => "GIB",
        "GR" => "GRC",
        "GL" => "GRL",
        "GD" => "GRD",
        "GP" => "GLP",
        "GU" => "GUM",
        "GT" => "GTM",
        "GN" => "GIN",
        "GW" => "GNB",
        "GY" => "GUY",
        "HT" => "HTI",
        "HM" => "HMD",
        "HN" => "HND",
        "HK" => "HKG",
        "HU" => "HUN",
        "IS" => "ISL",
        "IN" => "IND",
        "ID" => "IDN",
        "IQ" => "IRQ",
        "IE" => "IRL",
        "IR" => "IRN",
        "IL" => "ISR",
        "IT" => "ITA",
        "JM" => "JAM",
        "JP" => "JPN",
        "JO" => "JOR",
        "KZ" => "KAZ",
        "KE" => "KEN",
        "KI" => "KIR",
        "KP" => "PRK",
        "KR" => "KOR",
        "KW" => "KWT",
        "KG" => "KGZ",
        "LA" => "LAO",
        "LV" => "LVA",
        "LB" => "LBN",
        "LS" => "LSO",
        "LR" => "LBR",
        "LY" => "LBY",
        "LI" => "LIE",
        "LT"=>"LTU",
        "LU" => "LUX",
        "MO" => "MAC",
        "MK" => "MKD",
        "MG" => "MDG",
        "MW" => "MWI",
        "MY" => "MYS",
        "MV" => "MDV",
        "ML" => "MLI",
        "MT" => "MLT",
        "MH" => "MHL",
        "MQ" => "MTQ",
        "MR" => "MRT",
        "MU" => "MUS",
        "YT" => "MYT",
        "MX" => "MEX",
        "FM" => "FSM",
        "MD" => "MDA",
        "MC" => "MCO",
        "MN" => "MNG",
        "MS" => "MSR",
        "MA" => "MAR",
        "MZ" => "MOZ",
        "MM" => "MMR",
        "NA" => "NAM",
        "NR" => "NRU",
        "NP" => "NPL",
        "NL" => "NLD",
        "NC" => "NCL",
        "NZ" => "NZL",
        "NI" => "NIC",
        "NE" => "NER",
        "NG" => "NGA",
        "NU" => "NIU",
        "NF" => "NFK",
        "MP" => "MNP",
        "NO" => "NOR",
        "OM" => "OMN",
        "PK" => "PAK",
        "PW" => "PLW",
        "PA" => "PAN",
        "PG" => "PNG",
        "PY" => "PRY",
        "PE" => "PER",
        "PH" => "PHL",
        "PN" => "PCN",
        "PL" => "POL",
        "PT" => "PRT",
        "PR" => "PRI",
        "QA" => "QAT",
        "RE" => "REU",
        "RO" => "ROU",
        "RU" => "RUS",
        "RW" => "RWA",
        "LC" => "LCA",
        "WS" => "WSM",
        "SM" => "SMR",
        "ST" => "STP",
        "SA" => "SAU",
        "SN" => "SEN",
        "SC" => "SYC",
        "SL" => "SLE",
        "SG" => "SGP",
        "SK" => "SVK",
        "SI" => "SVN",
        "SB" => "SLB",
        "SO" => "SOM",
        "ZA" => "ZAF",
        "ES" => "ESP",
        "LK" => "LKA",
        "SH" => "SHN",
        "KN" => "KNA",
        "PM" => "SPM",
        "VC" => "VCT",
        "SD" => "SDN",
        "SR"=> "SUR",
        "SJ" => "SJM",
        "SZ" => "SWZ",
        "SE" => "SWE",
        "CH" => "CHE",
        "SY" => "SYR",
        "TW" => "TWN",
        "TJ" => "TJK",
        "TZ" => "TZA",
        "TH" => "THA",
        "TG" => "TGO",
        "TK" => "TKL",
        "TO" => "TON",
        "TT" => "TTO",
        "TN" => "TUN",
        "TR" => "TUR",
        "TM" => "TKM",
        "TC" => "TCA",
        "TV" => "TUV",
        "UG" => "UGA",
        "UA" => "UKR",
        "AE" => "ARE",
        "GB" => "GBR",
        "US" => "USA",
        "VI" => "VIR",
        "UY" => "URY",
        "UZ" => "UZB",
        "VU" => "VUT",
        "VA" => "VAT",
        "VE" => "VEN",
        "VN" => "VNM",
        "WF" => "WLF",
        "EH" => "ESH",
        "YE" => "YEM",
        "CS" => "SCG",
        "ZR" => "ZAR",
        "ZM" => "ZMB",
        "ZW" => "ZWE",
        "AP" => "   ",
        "RS" => "SRB",
        "AX" => "ALA" ,
        "EU" => "" ,
        "ME" => "MNE",
        "GG" => "GGY",
        "JE" => "JEY",
        "IM" => "IMN",
        "CW" => "CUW",
        "SX" => "SXM");
        $country = $Code[$bc->iso_code];
        $state_obj = new State($bill_address->id_state);
        $state = $state_obj->name;
        $state = $state;
        $phone = $bill_address->phone_mobile;
        $phone = $phone;
        $postal_code = $bill_address->postcode;
        $postal_code = $postal_code;
        $email = $customer->email;
        $qStrings = array("DR" => "{DR}");
        $return_url = urldecode(Context::getContext()->link->getModuleLink('ebs', 'response', $qStrings, true));
        
        $ship_first_name = $ship_address->firstname;
        $ship_last_name = $ship_address->lastname;
        $ship_name = $ship_first_name." ".$ship_last_name;
        $ship_name = $ship_name;
        $ship_address1 = $ship_address->address1;
        $ship_address2 = $ship_address->address2;
        $ship_addr = $ship_address1." ".$ship_address2;
        $ship_addr = $ship_addr;
        $ship_city = $ship_address->city;
        $ship_city = $ship_city;
        $ship_country = $country;
        $ship_country = $ship_country;
        $ship_state_obj = new State($ship_address->id_state);
        $ship_state_obj = $ship_state_obj;
        $ship_state = $state_obj->name;
        $ship_state = $ship_state;
        $ship_phone = $ship_address->phone_mobile;
        $ship_phone = $ship_phone;
        $ship_postal_code = $ship_address->postcode;
        $ship_postal_code = $ship_postal_code;
        
        if (!Validate::isLoadedObject($bill_address) or !Validate::isLoadedObject($customer)) {
            return $this->l('Paytm error: (invalid address or customer)');
        }
        
        $amount = $cart->getOrderTotal(true, Cart::BOTH);
        
        $ref_no = (int)$cart->id;
        $hash = $secret_key ."|". $account_id. "|". $amount .
        "|".$ref_no."|".html_entity_decode($return_url)."|". $mode;
        $securehash = md5($hash);
        $securehash = $securehash;
        $reference_no = (int)$cart->id;
        $description = "Order ID is ".$reference_no;
        $description = $description;
        $order_id =  $ref_no;
        $date = date('Y-m-d');
        $industry_type = Configuration::get('PayTM_MERCHANT_INDUSTRY_TYPE');
        $channel_id = Configuration::get('PayTM_MERCHANT_CHANNEL_ID');
        $website = Configuration::get('PayTM_MERCHANT_WEBSITE');
        $paytmurl = Configuration::get('PayTM_GATEWAY_URL');
        $merchant_id = Configuration::get('PayTM_MERCHANT_ID');
        $secret_key = Configuration::get('PayTM_SECRET_KEY');
        $cust_id = (int)$cart->id_customer;
        $callback = Configuration::get('PayTM_ENABLE_CALLBACK');
        $mode = Configuration::get('PayTM_MODE');
        $mod = $mode;
        if ($mod == "TEST") {
            $mode = 0;
        } else {
            $mode = 1;
        }
        
        
        $mobile_no='';
        $email ='';
        try {
            $mobile_no= preg_replace('#[^0-9]{0,13}#is', '', $bill_address->phone_mobile);
        } catch (Exception $e) {
        
        }
        
        try {
            $email = $customer->email;
        } catch (Exception $e) {
        
        }
        
        $post_variables = array(
            "MID" => $merchant_id,
            "ORDER_ID" => $order_id,
            "CUST_ID" => $cust_id,
            "TXN_AMOUNT" => $amount,
            "CHANNEL_ID" => $channel_id,
            "INDUSTRY_TYPE_ID" => $industry_type,
            "WEBSITE" => $website,
            "MOBILE_NO" => $mobile_no,
            "EMAIL" => $email
        );
        $callbackhtml='';
        
        if (! empty($callback) && stripos($callback, 'on') !==false) {
            $protocol='http://';
            $host='';
            
            
            if (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
                $protocol='https://';
            }
            
            if (isset($_SERVER["HTTP_HOST"]) && ! empty($_SERVER["HTTP_HOST"])) {
                $host=$_SERVER["HTTP_HOST"];
            }
            $callbackhtml = $protocol.$host.__PS_BASE_URI__.'index.php?fc=module&module=paytm&controller=response';
            $post_variables['CALLBACK_URL']=$protocol .
            $host . __PS_BASE_URI__  . 'index.php?fc=module&module=paytm&controller=response';
        }
        
        $checksum = getChecksumFromArray($post_variables, $secret_key);
        $this->context->smarty->assign(array(
            'merchant_id' =>  $merchant_id,
            'paytmurl' => $paytmurl,
            'date' => $date,
            'order_id' => $order_id,
            'amount' => $amount,
            'website' => $website,
            'industry_type' => $industry_type,
            'channel_id' => $channel_id,
            'cust_id' => $cust_id,
            'mobile_no' => $mobile_no,
            'email' => $email,
            'callbackhtml' => $callbackhtml,
            'checksum' => $checksum
        ));
        return $this->display(__FILE__, 'payment_execution.tpl');
    }
}
