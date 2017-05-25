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

class SkrillPaymentCore
{
      protected static $skrillPrepareUrl = 'https://pay.skrill.com';
      protected static $skrillQueryUrl = 'https://www.moneybookers.com/app/query.pl';
      protected static $skrillRefundUrl = 'https://www.moneybookers.com/app/refund.pl';

    public static $paymentMethods = array (
            'FLEXIBLE' => array(
                 'name' => 'Pay By Skrill',
                 'countries'  => 'ALL'
            ),
            'WLT' => array(
                 'name' => 'Skrill Wallet',
                 'countries'  => 'ALL'
            ),
            'PSC' => array(
                 'name' => 'Paysafecard',
                 'countries'  => 'ASM,AUT,BEL,CAN,HRV,CYP,CZE,DNK,FIN,FRA,DEU,
                 GUM,HUN,IRL,ITA,LVA,LUX,MLT,MEX,NLD,MNP,NOR,POL,PRT,PRI,ROU,
                 SVK,SVN,ESP,SWE,CHE,TUR,GBR,USA,VIR'
            ),
            'ACC' => array(
                 'name' => 'Credit Cards',
                 'countries'  => 'ALL'
            ),
            'VSA' => array(
                 'name' => 'Visa',
                 'countries'  => 'ALL'
            ),
            'MSC' => array(
                 'name' => 'MasterCard',
                 'countries'  => 'ALL'
            ),
            'VSE' => array(
                 'name' => 'Visa Electron',
                 'countries'  => 'AFG,ALB,DZA,ASM,AND,AGO,AIA,ATA,ATG,ARG,ARM,ABW,AUS,AUT,
                 AZE,BHS,BHR,BGD,BRB,BLR,BEL,BLZ,BEN,BMU,BTN,BOL,BIH,BWA,BVT,BRA,IOT,VGB,
                 BRN,BGR,BFA,BDI,KHM,CMR,CAN,CPV,CYM,CAF,TCD,CHL,CHN,CXR,CCK,COL,COM,COG,
                 COD,COK,CRI,HRV,CUB,CYP,CZE,CIV,DNK,DJI,DMA,DOM,ECU,EGY,SLV,GNQ,ERI,EST,
                 ETH,FLK,FRO,FJI,FIN,FRA,GUF,PYF,ATF,GAB,GMB,GEO,DEU,GHA,GIB,GRC,GRL,GRD,
                 GLD,GUM,GTM,GGY,HTI,HMD,VAT,GIN,GNB,HND,HKG,HUN,ISL,IND,IDN,IRN,IRQ,IRL,
                 IMN,ISR,ITA,JAM,JPN,JEY,JOR,KAZ,KEN,KIR,KWT,KGZ,LAO,LVA,LBN,LSO,LBR,LBY,
                 LIE,LTU,LUX,MAC,MKD,MDG,MWI,MYS,MDV,MLI,MLT,MHL,MTQ,MRT,MUS,MYT,MEX,FSM,
                 MDA,MCO,MNG,MNE,MSR,MAR,MOZ,MMR,NAM,NRU,NPL,NLD,ANT,NCL,NZL,NIC,NER,NGA,
                 NIU,NFK,PRK,MNP,NOR,OMN,PAK,PLW,PSE,PAN,PNG,PRY,PER,PHL,PCN,POL,PRT,PRI,
                 QAT,ROU,RUS,RWA,REU,BLM,SHN,KNA,LCA,MAF,SPM,WSM,SMR,SAU,SEN,SRB,SYC,SLE,
                 SGP,SVK,SVN,SLB,SOM,ZAF,SGS,KOR,ESP,LKA,VCT,SDN,SUR,SJM,SWZ,SWE,CHE,SYR,
                 STP,TWN,TJK,TZA,THA,TLS,TGO,TKL,TON,TTO,TUN,TUR,TKM,TCA,TUV,UMI,VIR,UGA,
                 UKR,ARE,GBR,USA,URY,UZB,VUT,GUY,VEN,VNM,WLF,ESH,YEM,ZMB,ZWE,ALA,SSD'
            ),
            'MAE' => array(
                 'name' => 'Maestro',
                 'countries'  => 'GBR,ESP,IRL,AUT'
            ),
            'AMX' => array(
                 'name' => 'American Express',
                 'countries'  => 'ALL'
            ),
            'DIN' => array(
                 'name' => 'Diners',
                 'countries'  => 'ALL'
            ),
            'JCB' => array(
                 'name' => 'JCB',
                 'countries'  => 'ALL'
            ),
            'GCB' => array(
                 'name' => 'Carte Bleue by Visa',
                 'countries'  => 'FRA'
            ),
            'DNK' => array(
                 'name' => 'Dankort by Visa',
                 'countries'  => 'DNK'
            ),
            'PSP' => array(
                 'name' => 'PostePay by Visa',
                 'countries'  => 'ITA'
            ),
            'CSI' => array(
                 'name' => 'CartaSi by Visa',
                 'countries'  => 'ITA'
            ),
            'OBT' => array(
                 'name' => 'Skrill Direct (Online Bank Transfer)',
                 'countries'  => 'DEU,GBR,FRA,ITA,ESP,HUN,AUT'
            ),
            'GIR' => array(
                 'name' => 'Giropay',
                 'countries'  => 'DEU'
            ),
            'DID' => array(
                 'name' => 'Direct Debit / SEPA',
                 'countries'  => 'DEU'
            ),
            'SFT' => array(
                 'name' => 'Sofortueberweisung',
                 'countries'  => 'DEU,AUT,BEL,NLD,ITA,FRA,POL,GBR'
            ),
            'EBT' => array(
                 'name' => 'Nordea Solo',
                 'countries'  => 'SWE'
            ),
            'IDL' => array(
                 'name' => 'iDEAL',
                 'countries'  => 'NLD'
            ),
            'NPY' => array(
                 'name' => 'EPS (Netpay)',
                 'countries'  => 'AUT'
            ),
            'PLI' => array(
                 'name' => 'POLi',
                 'countries'  => 'AUS'
            ),
            'PWY' => array(
                 'name' => 'Przelewy24',
                 'countries'  => 'POL'
            ),
            'EPY' => array(
                 'name' => 'ePay.bg',
                 'countries'  => 'BGR'
            ),
            'GLU' => array(
                 'name' => 'Trustly',
                 'countries'  => 'SWE,FIN,EST,DNK,ESP,POL,ITA,FRA,DEU,PRT,AUT,LVA,LTU,NLD'
            ),
            'ALI' => array(
                 'name' => 'Alipay',
                 'countries'  => 'CHN'
            ),
            'NTL' => array(
                 'name' => 'Neteller',
                 'countries'  => 'ALA,ALB,DZA,ASM,AND,AGO,AIA,ATA,ATG,ARG,ABW,AUS,AUT,AZE,
                 BHS,BHR,BGD,BRB,BLR,BEL,BLZ,BEN,BMU,BOL,BIH,BWA,BRA,BRN,BGR,BFA,BDI,KHM,
                 CMR,CAN,CPV,CYM,CAF,TCD,CHL,CXR,CRI,COL,COM,COG,HRV,CYP,CZE,DNK,DJI,DMA,
                 DOM,ECU,EGY,SLV,GNQ,EST,ETH,FLK,FRO,FJI,FIN,GGY,FRA,GUF,PYF,ATF,GAB,GMB,
                 GEO,DEU,GHA,GIB,GRC,GRL,GRD,GLP,GTM,HMD,VAT,GIN,GUY,HND,HKG,HUN,ISL,IND,
                 IDN,IRL,IMN,ISR,ITA,JAM,JPN,JEY,JOR,KEN,KIR,KOR,KWT,LAO,LVA,LBN,LSO,LIE,
                 LTU,LUX,MAC,MKD,MDG,MWI,MYS,MDV,MLI,MLT,MTQ,MRT,MUS,MYT,MEX,MDA,MCO,MNE,
                 MSR,MAR,MOZ,NAM,NPL,NLD,ANT,NCL,NZL,NIC,NER,NGA,NIU,NFK,NOR,OMN,PSE,PAN,
                 PNG,PRY,PER,PHL,PCN,POL,PRT,QAT,REU,ROU,RUS,RWA,SHN,KNA,LCA,SPM,VCT,WSM,
                 SMR,STP,SAU,SEN,SRB,SYC,SGP,SVK,SVN,SLB,ZAF,ESP,LKA,SUR,SJM,SWZ,SWE,CHE,
                 TWN,TZA,THA,TGO,TKL,TON,TTO,TUN,TUR,TCA,TUV,UKR,ARE,GBR,URY,VUT,VEN,VNM,
                 VGB,WLF,ESH,ZMB'
            )/*,
            'ADB' => array(
                 'name' => 'Astropay',
                 'countries'  => 'ALL'
            )*/
    );

    /**
     * Skrill Payment Methods
     *
     * param : $paymentType
     * return : array $paymentMethods / string $paymentMethods (if get parameter $paymentType) 
     */
    public static function getPaymentMethods($paymentType = false)
    {
        if ($paymentType) {
            return self::$paymentMethods[$paymentType];
        } else {
            return self::$paymentMethods;
        }
    }

    /**
     * Skrill Redirect Url
     *
     * param : $sid
     * return : string 
     */
    public static function getSkrillRedirectUrl($sid)
    {
        $skrillRedirectUrl = self::$skrillPrepareUrl.'?sid='.$sid;
        return $skrillRedirectUrl;
    }

    /**
     * Skrill Get Sid
     *
     * param : $fields
     * return : string $sid
     */
    public static function getSid($fields)
    {
        $fields_string = http_build_query($fields);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::$skrillPrepareUrl);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded;charset=UTF-8'));
        curl_setopt($curl, CURLOPT_FAILONERROR, 1);
        curl_setopt($curl, CURLOPT_POST, count($fields));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

            $result = curl_exec($curl);
        if (curl_errno($curl)) {
            throw new Exception("Curl error: ". curl_error($curl));
        }
        curl_close($curl);

        return $result;

    }

    /**
     * Skrill Query Check
     *
     * param : $fieldParams
     * return : boolean, $result (query result)
     */
    public static function isPaymentAccepted($fieldParams, &$result)
    {
            // check status_trn 3 times if no response.
        for ($i=0; $i < 3; $i++) {
            $response = true;
            try {
                $result = self::doQuery('status_trn', $fieldParams);
            } catch (Exception $e) {
                $response = false;
            }

            if ($response && $result) {
                return true;
            }
        }
            return false;
    }

    /**
     * Skrill Query
     *
     * param : $action, $fieldParams
     * return : array
     */
    public static function doQuery($action, $fieldParams)
    {
        $fieldType = $fieldParams['type'];
        $fields = array();
        $fields[$fieldType] = $fieldParams['id'];
        $fields['action'] = $action;
        $fields['email'] = $fieldParams['email'];
        $fields['password'] = $fieldParams['password'];

        $fields_string = http_build_query($fields);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::$skrillQueryUrl);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded;charset=UTF-8'));
        curl_setopt($curl, CURLOPT_FAILONERROR, 1);
        curl_setopt($curl, CURLOPT_POST, count($fields));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            throw new Exception("Curl error: ". curl_error($curl));
        }
        curl_close($curl);

        return $result;
    }

    /**
     * Skrill Refund
     *
     * param : $action(prepare/refund), $fieldParams
     * return : array
     */
    public static function doRefund($action, $fieldParams)
    {

        if ($action == "prepare") {
            $fields = $fieldParams;
            $fields['action'] = $action;
        } elseif ($action == "refund") {
            $fields['action'] = $action;
            $fields['sid'] = $fieldParams;
        }

        $fields_string = http_build_query($fields);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::$skrillRefundUrl);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded;charset=UTF-8'));
        curl_setopt($curl, CURLOPT_FAILONERROR, 1);
        curl_setopt($curl, CURLOPT_POST, count($fields));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

        $result = curl_exec($curl);
        if (curl_errno($curl)) {
              return "failed";
        }
        curl_close($curl);

            return simplexml_load_string($result);

    }

    /**
     * Skrill Response in Array
     *
     * param : string $strings skrill response in string
     * return : array
     */
    public static function getResponseArray($strings)
    {
        $response_array = array();
        $string = explode("\n", $strings);
        $response_array['response_header'] = $string[0];
        $string_arr = explode("&", $string[1]);
        foreach ($string_arr as $value) {
              $value_arr = explode("=", $value);
              $response_array[urldecode($value_arr[0])] = urldecode($value_arr[1]);
        }
        return $response_array;
    }

      //---//

    /**
     * Supported Payments by Country
     *
     * return : array
     */
    public static function getSupportedPayments($countryCode)
    {
        $supportedPayments = array();
        foreach (self::$paymentMethods as $key => $value) {
            if ($value['countries'] == 'ALL') {
                $supportedPayments[] =  $key;
            } else {
                $countryList = explode(',', $value['countries']);
                if (in_array($countryCode, $countryList)) {
                    $supportedPayments[] =  $key;
                }
            }
        }

        return $supportedPayments;
            
    }

    /**
     * Not Supported Country
     */
    public static function isCountryNotSupport($countryCode)
    {
        $notSupportCountries = array('AFG','CUB','ERI','IRN','IRQ','KGZ','LBY','PRK','SDN','SSD','SYR');
        if (in_array($countryCode, $notSupportCountries)) {
              return true;
        } else {
              return false;
        }
    }

    /**
     * Date Time (ymdhiu)
     */
    public static function getDateTime()
    {
            $t = microtime(true);
            $micro = sprintf("%06d", ($t - floor($t)) * 1000000);
            $d = new DateTime(date('Y-m-d H:i:s.'.$micro, $t));

            return $d->format("ymdhiu");
    }

    /**
     * Random Number
     */
    public static function randomNumber($length)
    {
        $result = '';

        for ($i = 0; $i < $length; $i++) {
              $result .= mt_rand(0, 9);
        }

        return $result;
    }

    /**
     * Locale Trn Status
     */
    public static function getTrnStatus($code)
    {
        switch ($code) {
            case '2':
                $status = 'BACKEND_TT_PROCESSED';
                break;
            case '0':
                $status = 'BACKEND_TT_PENDING';
                break;
            case '-1':
                $status = 'BACKEND_TT_CANCELLED';
                break;
            case '-2':
                $status = 'BACKEND_TT_FAILED';
                break;
            case '-3':
                $status = 'BACKEND_TT_CHARGEBACK';
                break;
            case '-4':
                $status = 'BACKEND_TT_REFUNDED';
                break;
            case '-5':
                $status = 'BACKEND_TT_REFUNDED_FAILED';
                break;
            default:
                $status = 'ERROR_GENERAL_ABANDONED_BYUSER';
                break;
        }
        return $status;
    }

    /**
     * Locale Skrill Error
     */
    public static function getSkrillErrorMapping($code)
    {
            $error_messages = array(
                  '01' => 'SKRILL_ERROR_01',
                  '02' => 'SKRILL_ERROR_02',
                  '03' => 'SKRILL_ERROR_03',
                  '04' => 'SKRILL_ERROR_04',
                  '05' => 'SKRILL_ERROR_05',
                  '08' => 'SKRILL_ERROR_08',
                  '09' => 'SKRILL_ERROR_09',
                  '10' => 'SKRILL_ERROR_10',
                  '12' => 'SKRILL_ERROR_12',
                  '15' => 'SKRILL_ERROR_15',
                  '19' => 'SKRILL_ERROR_19',
                  '24' => 'SKRILL_ERROR_24',
                  '28' => 'SKRILL_ERROR_28',
                  '32' => 'SKRILL_ERROR_32',
                  '37' => 'SKRILL_ERROR_37',
                  '38' => 'SKRILL_ERROR_38',
                  '42' => 'SKRILL_ERROR_42',
                  '44' => 'SKRILL_ERROR_44',
                  '51' => 'SKRILL_ERROR_51',
                  '63' => 'SKRILL_ERROR_63',
                  '70' => 'SKRILL_ERROR_70',
                  '71' => 'SKRILL_ERROR_71',
                  '80' => 'SKRILL_ERROR_80',
                  '98' => 'SKRILL_ERROR_98',
                  '99' => 'SKRILL_ERROR_99_GENERAL'
            );

        if ($code) {
            return array_key_exists($code, $error_messages) ? $error_messages[$code] : 'SKRILL_ERROR_99_GENERAL';
        } else {
            return 'SKRILL_ERROR_99_GENERAL';
        }
    }

    /**
     * Country ISO-3 Digits
     *
     * param : country iso-2 digits
     */
    public static function getCountryIso3($iso2)
    {
            $iso3 = array(
                  'AF' => 'AFG',
                  'AL' => 'ALB',
                  'DZ' => 'DZA',
                  'AS' => 'ASM',
                  'AD' => 'AND',
                  'AO' => 'AGO',
                  'AI' => 'AIA',
                  'AQ' => 'ATA',
                  'AG' => 'ATG',
                  'AR' => 'ARG',
                  'AM' => 'ARM',
                  'AW' => 'ABW',
                  'AU' => 'AUS',
                  'AT' => 'AUT',
                  'AZ' => 'AZE',
                  'BS' => 'BHS',
                  'BH' => 'BHR',
                  'BD' => 'BGD',
                  'BB' => 'BRB',
                  'BY' => 'BLR',
                  'BE' => 'BEL',
                  'BZ' => 'BLZ',
                  'BJ' => 'BEN',
                  'BM' => 'BMU',
                  'BT' => 'BTN',
                  'BO' => 'BOL',
                  'BA' => 'BIH',
                  'BW' => 'BWA',
                  'BV' => 'BVT',
                  'BR' => 'BRA',
                  'IO' => 'IOT',
                  'VG' => 'VGB',
                  'BN' => 'BRN',
                  'BG' => 'BGR',
                  'BF' => 'BFA',
                  'BI' => 'BDI',
                  'KH' => 'KHM',
                  'CM' => 'CMR',
                  'CA' => 'CAN',
                  'CV' => 'CPV',
                  'KY' => 'CYM',
                  'CF' => 'CAF',
                  'TD' => 'TCD',
                  'CL' => 'CHL',
                  'CN' => 'CHN',
                  'CX' => 'CXR',
                  'CC' => 'CCK',
                  'CO' => 'COL',
                  'KM' => 'COM',
                  'CG' => 'COG',
                  'CD' => 'COD',
                  'CK' => 'COK',
                  'CR' => 'CRI',
                  'HR' => 'HRV',
                  'CU' => 'CUB',
                  'CY' => 'CYP',
                  'CZ' => 'CZE',
                  'CI' => 'CIV',
                  'DK' => 'DNK',
                  'DJ' => 'DJI',
                  'DM' => 'DMA',
                  'DO' => 'DOM',
                  'EC' => 'ECU',
                  'EG' => 'EGY',
                  'SV' => 'SLV',
                  'GQ' => 'GNQ',
                  'ER' => 'ERI',
                  'EE' => 'EST',
                  'ET' => 'ETH',
                  'FK' => 'FLK',
                  'FO' => 'FRO',
                  'FJ' => 'FJI',
                  'FI' => 'FIN',
                  'FR' => 'FRA',
                  'GF' => 'GUF',
                  'PF' => 'PYF',
                  'TF' => 'ATF',
                  'GA' => 'GAB',
                  'GM' => 'GMB',
                  'GE' => 'GEO',
                  'DE' => 'DEU',
                  'GH' => 'GHA',
                  'GI' => 'GIB',
                  'GR' => 'GRC',
                  'GL' => 'GRL',
                  'GD' => 'GRD',
                  'GP' => 'GLD',
                  'GU' => 'GUM',
                  'GT' => 'GTM',
                  'GG' => 'GGY',
                  'GN' => 'HTI',
                  'GW' => 'HMD',
                  'GY' => 'VAT',
                  'HT' => 'GIN',
                  'HM' => 'GNB',
                  'HN' => 'HND',
                  'HK' => 'HKG',
                  'HU' => 'HUN',
                  'IS' => 'ISL',
                  'IN' => 'IND',
                  'ID' => 'IDN',
                  'IR' => 'IRN',
                  'IQ' => 'IRQ',
                  'IE' => 'IRL',
                  'IM' => 'IMN',
                  'IL' => 'ISR',
                  'IT' => 'ITA',
                  'JM' => 'JAM',
                  'JP' => 'JPN',
                  'JE' => 'JEY',
                  'JO' => 'JOR',
                  'KZ' => 'KAZ',
                  'KE' => 'KEN',
                  'KI' => 'KIR',
                  'KW' => 'KWT',
                  'KG' => 'KGZ',
                  'LA' => 'LAO',
                  'LV' => 'LVA',
                  'LB' => 'LBN',
                  'LS' => 'LSO',
                  'LR' => 'LBR',
                  'LY' => 'LBY',
                  'LI' => 'LIE',
                  'LT' => 'LTU',
                  'LU' => 'LUX',
                  'MO' => 'MAC',
                  'MK' => 'MKD',
                  'MG' => 'MDG',
                  'MW' => 'MWI',
                  'MY' => 'MYS',
                  'MV' => 'MDV',
                  'ML' => 'MLI',
                  'MT' => 'MLT',
                  'MH' => 'MHL',
                  'MQ' => 'MTQ',
                  'MR' => 'MRT',
                  'MU' => 'MUS',
                  'YT' => 'MYT',
                  'MX' => 'MEX',
                  'FM' => 'FSM',
                  'MD' => 'MDA',
                  'MC' => 'MCO',
                  'MN' => 'MNG',
                  'ME' => 'MNE',
                  'MS' => 'MSR',
                  'MA' => 'MAR',
                  'MZ' => 'MOZ',
                  'MM' => 'MMR',
                  'NA' => 'NAM',
                  'NR' => 'NRU',
                  'NP' => 'NPL',
                  'NL' => 'NLD',
                  'AN' => 'ANT',
                  'NC' => 'NCL',
                  'NZ' => 'NZL',
                  'NI' => 'NIC',
                  'NE' => 'NER',
                  'NG' => 'NGA',
                  'NU' => 'NIU',
                  'NF' => 'NFK',
                  'KP' => 'PRK',
                  'MP' => 'MNP',
                  'NO' => 'NOR',
                  'OM' => 'OMN',
                  'PK' => 'PAK',
                  'PW' => 'PLW',
                  'PS' => 'PSE',
                  'PA' => 'PAN',
                  'PG' => 'PNG',
                  'PY' => 'PRY',
                  'PE' => 'PER',
                  'PH' => 'PHL',
                  'PN' => 'PCN',
                  'PL' => 'POL',
                  'PT' => 'PRT',
                  'PR' => 'PRI',
                  'QA' => 'QAT',
                  'RO' => 'ROU',
                  'RU' => 'RUS',
                  'RW' => 'RWA',
                  'RE' => 'REU',
                  'BL' => 'BLM',
                  'SH' => 'SHN',
                  'KN' => 'KNA',
                  'LC' => 'LCA',
                  'MF' => 'MAF',
                  'PM' => 'SPM',
                  'WS' => 'WSM',
                  'SM' => 'SMR',
                  'SA' => 'SAU',
                  'SN' => 'SEN',
                  'RS' => 'SRB',
                  'SC' => 'SYC',
                  'SL' => 'SLE',
                  'SG' => 'SGP',
                  'SK' => 'SVK',
                  'SI' => 'SVN',
                  'SB' => 'SLB',
                  'SO' => 'SOM',
                  'ZA' => 'ZAF',
                  'GS' => 'SGS',
                  'KR' => 'KOR',
                  'ES' => 'ESP',
                  'LK' => 'LKA',
                  'VC' => 'VCT',
                  'SD' => 'SDN',
                  'SR' => 'SUR',
                  'SJ' => 'SJM',
                  'SZ' => 'SWZ',
                  'SE' => 'SWE',
                  'CH' => 'CHE',
                  'SY' => 'SYR',
                  'ST' => 'STP',
                  'TW' => 'TWN',
                  'TJ' => 'TJK',
                  'TZ' => 'TZA',
                  'TH' => 'THA',
                  'TL' => 'TLS',
                  'TG' => 'TGO',
                  'TK' => 'TKL',
                  'TO' => 'TON',
                  'TT' => 'TTO',
                  'TN' => 'TUN',
                  'TR' => 'TUR',
                  'TM' => 'TKM',
                  'TC' => 'TCA',
                  'TV' => 'TUV',
                  'UM' => 'UMI',
                  'VI' => 'VIR',
                  'UG' => 'UGA',
                  'UA' => 'UKR',
                  'AE' => 'ARE',
                  'GB' => 'GBR',
                  'US' => 'USA',
                  'UY' => 'URY',
                  'UZ' => 'UZB',
                  'VU' => 'VUT',
                  'VA' => 'GUY',
                  'VE' => 'VEN',
                  'VN' => 'VNM',
                  'WF' => 'WLF',
                  'EH' => 'ESH',
                  'YE' => 'YEM',
                  'ZM' => 'ZMB',
                  'ZW' => 'ZWE',
                  'AX' => 'ALA'
        );
        if ($iso2) {
            return array_key_exists($iso2, $iso3) ? $iso3[$iso2] : '';
        } else {
            return '';
        }
    }

    /**
     * Country ISO-2 Digits
     *
     * param : country iso-3 digits
     */
    public static function getCountryIso2($iso3)
    {
            $iso2 = array(
                  'AFG' => 'AF',
                  'ALB' => 'AL',
                  'DZA' => 'DZ',
                  'ASM' => 'AS',
                  'AND' => 'AD',
                  'AGO' => 'AO',
                  'AIA' => 'AI',
                  'ATA' => 'AQ',
                  'ATG' => 'AG',
                  'ARG' => 'AR',
                  'ARM' => 'AM',
                  'ABW' => 'AW',
                  'AUS' => 'AU',
                  'AUT' => 'AT',
                  'AZE' => 'AZ',
                  'BHS' => 'BS',
                  'BHR' => 'BH',
                  'BGD' => 'BD',
                  'BRB' => 'BB',
                  'BLR' => 'BY',
                  'BEL' => 'BE',
                  'BLZ' => 'BZ',
                  'BEN' => 'BJ',
                  'BMU' => 'BM',
                  'BTN' => 'BT',
                  'BOL' => 'BO',
                  'BIH' => 'BA',
                  'BWA' => 'BW',
                  'BVT' => 'BV',
                  'BRA' => 'BR',
                  'IOT' => 'IO',
                  'VGB' => 'VG',
                  'BRN' => 'BN',
                  'BGR' => 'BG',
                  'BFA' => 'BF',
                  'BDI' => 'BI',
                  'KHM' => 'KH',
                  'CMR' => 'CM',
                  'CAN' => 'CA',
                  'CPV' => 'CV',
                  'CYM' => 'KY',
                  'CAF' => 'CF',
                  'TCD' => 'TD',
                  'CHL' => 'CL',
                  'CHN' => 'CN',
                  'CXR' => 'CX',
                  'CCK' => 'CC',
                  'COL' => 'CO',
                  'COM' => 'KM',
                  'COG' => 'CG',
                  'COD' => 'CD',
                  'COK' => 'CK',
                  'CRI' => 'CR',
                  'HRV' => 'HR',
                  'CUB' => 'CU',
                  'CYP' => 'CY',
                  'CZE' => 'CZ',
                  'CIV' => 'CI',
                  'DNK' => 'DK',
                  'DJI' => 'DJ',
                  'DMA' => 'DM',
                  'DOM' => 'DO',
                  'ECU' => 'EC',
                  'EGY' => 'EG',
                  'SLV' => 'SV',
                  'GNQ' => 'GQ',
                  'ERI' => 'ER',
                  'EST' => 'EE',
                  'ETH' => 'ET',
                  'FLK' => 'FK',
                  'FRO' => 'FO',
                  'FJI' => 'FJ',
                  'FIN' => 'FI',
                  'FRA' => 'FR',
                  'GUF' => 'GF',
                  'PYF' => 'PF',
                  'ATF' => 'TF',
                  'GAB' => 'GA',
                  'GMB' => 'GM',
                  'GEO' => 'GE',
                  'DEU' => 'DE',
                  'GHA' => 'GH',
                  'GIB' => 'GI',
                  'GRC' => 'GR',
                  'GRL' => 'GL',
                  'GRD' => 'GD',
                  'GLD' => 'GP',
                  'GUM' => 'GU',
                  'GTM' => 'GT',
                  'GGY' => 'GG',
                  'HTI' => 'GN',
                  'HMD' => 'GW',
                  'VAT' => 'GY',
                  'GIN' => 'HT',
                  'GNB' => 'HM',
                  'HND' => 'HN',
                  'HKG' => 'HK',
                  'HUN' => 'HU',
                  'ISL' => 'IS',
                  'IND' => 'IN',
                  'IDN' => 'ID',
                  'IRN' => 'IR',
                  'IRQ' => 'IQ',
                  'IRL' => 'IE',
                  'IMN' => 'IM',
                  'ISR' => 'IL',
                  'ITA' => 'IT',
                  'JAM' => 'JM',
                  'JPN' => 'JP',
                  'JEY' => 'JE',
                  'JOR' => 'JO',
                  'KAZ' => 'KZ',
                  'KEN' => 'KE',
                  'KIR' => 'KI',
                  'KWT' => 'KW',
                  'KGZ' => 'KG',
                  'LAO' => 'LA',
                  'LVA' => 'LV',
                  'LBN' => 'LB',
                  'LSO' => 'LS',
                  'LBR' => 'LR',
                  'LBY' => 'LY',
                  'LIE' => 'LI',
                  'LTU' => 'LT',
                  'LUX' => 'LU',
                  'MAC' => 'MO',
                  'MKD' => 'MK',
                  'MDG' => 'MG',
                  'MWI' => 'MW',
                  'MYS' => 'MY',
                  'MDV' => 'MV',
                  'MLI' => 'ML',
                  'MLT' => 'MT',
                  'MHL' => 'MH',
                  'MTQ' => 'MQ',
                  'MRT' => 'MR',
                  'MUS' => 'MU',
                  'MYT' => 'YT',
                  'MEX' => 'MX',
                  'FSM' => 'FM',
                  'MDA' => 'MD',
                  'MCO' => 'MC',
                  'MNG' => 'MN',
                  'MNE' => 'ME',
                  'MSR' => 'MS',
                  'MAR' => 'MA',
                  'MOZ' => 'MZ',
                  'MMR' => 'MM',
                  'NAM' => 'NA',
                  'NRU' => 'NR',
                  'NPL' => 'NP',
                  'NLD' => 'NL',
                  'ANT' => 'AN',
                  'NCL' => 'NC',
                  'NZL' => 'NZ',
                  'NIC' => 'NI',
                  'NER' => 'NE',
                  'NGA' => 'NG',
                  'NIU' => 'NU',
                  'NFK' => 'NF',
                  'PRK' => 'KP',
                  'MNP' => 'MP',
                  'NOR' => 'NO',
                  'OMN' => 'OM',
                  'PAK' => 'PK',
                  'PLW' => 'PW',
                  'PSE' => 'PS',
                  'PAN' => 'PA',
                  'PNG' => 'PG',
                  'PRY' => 'PY',
                  'PER' => 'PE',
                  'PHL' => 'PH',
                  'PCN' => 'PN',
                  'POL' => 'PL',
                  'PRT' => 'PT',
                  'PRI' => 'PR',
                  'QAT' => 'QA',
                  'ROU' => 'RO',
                  'RUS' => 'RU',
                  'RWA' => 'RW',
                  'REU' => 'RE',
                  'BLM' => 'BL',
                  'SHN' => 'SH',
                  'KNA' => 'KN',
                  'LCA' => 'LC',
                  'MAF' => 'MF',
                  'SPM' => 'PM',
                  'WSM' => 'WS',
                  'SMR' => 'SM',
                  'SAU' => 'SA',
                  'SEN' => 'SN',
                  'SRB' => 'RS',
                  'SYC' => 'SC',
                  'SLE' => 'SL',
                  'SGP' => 'SG',
                  'SVK' => 'SK',
                  'SVN' => 'SI',
                  'SLB' => 'SB',
                  'SOM' => 'SO',
                  'ZAF' => 'ZA',
                  'SGS' => 'GS',
                  'KOR' => 'KR',
                  'ESP' => 'ES',
                  'LKA' => 'LK',
                  'VCT' => 'VC',
                  'SDN' => 'SD',
                  'SUR' => 'SR',
                  'SJM' => 'SJ',
                  'SWZ' => 'SZ',
                  'SWE' => 'SE',
                  'CHE' => 'CH',
                  'SYR' => 'SY',
                  'STP' => 'ST',
                  'TWN' => 'TW',
                  'TJK' => 'TJ',
                  'TZA' => 'TZ',
                  'THA' => 'TH',
                  'TLS' => 'TL',
                  'TGO' => 'TG',
                  'TKL' => 'TK',
                  'TON' => 'TO',
                  'TTO' => 'TT',
                  'TUN' => 'TN',
                  'TUR' => 'TR',
                  'TKM' => 'TM',
                  'TCA' => 'TC',
                  'TUV' => 'TV',
                  'UMI' => 'UM',
                  'VIR' => 'VI',
                  'UGA' => 'UG',
                  'UKR' => 'UA',
                  'ARE' => 'AE',
                  'GBR' => 'GB',
                  'USA' => 'US',
                  'URY' => 'UY',
                  'UZB' => 'UZ',
                  'VUT' => 'VU',
                  'GUY' => 'VA',
                  'VEN' => 'VE',
                  'VNM' => 'VN',
                  'WLF' => 'WF',
                  'ESH' => 'EH',
                  'YEM' => 'YE',
                  'ZMB' => 'ZM',
                  'ZWE' => 'ZW',
                  'ALA' => 'AX'
            );
        if ($iso3) {
            return array_key_exists($iso3, $iso2) ? $iso2[$iso3] : '';
        } else {
            return '';
        }
    }
}
