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

class VersionTracker
{
    private static $versionTrackerUrl = 'http://api.dbserver.payreto.eu/v1/tracker';

    private static function getVersionTrackerUrl()
    {
        return self::$versionTrackerUrl;
    }

    private static function getResponseData($data, $url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return false;
        }
        curl_close($ch);
        return Tools::jsonDecode($response, true);
    }

    private static function getVersionTrackerParameter($versionData)
    {
        $data = 'transaction_mode=' .$versionData['transaction_mode'].
                '&ip_address=' .$versionData['ip_address'].
                '&shop_version=' .$versionData['shop_version'].
                '&plugin_version=' .$versionData['plugin_version'].
                '&client=' .$versionData['client'].
                '&hash=' .md5($versionData['shop_version'].$versionData['plugin_version'].$versionData['client']);

        if ($versionData['shop_system']) {
            $data .= '&shop_system=' .$versionData['shop_system'];
        }
        if ($versionData['email']) {
            $data .= '&email=' .$versionData['email'];
        }
        if ($versionData['merchant_id']) {
            $data .= '&merchant_id=' .$versionData['merchant_id'];
        }
        if ($versionData['shop_url']) {
            $data .= '&shop_url=' .$versionData['shop_url'];
        }
        return $data;
    }

    public static function sendVersionTracker($versionData)
    {
        $postData = self::getVersionTrackerParameter($versionData);
        $url = self::getVersionTrackerUrl();
        return self::getResponseData($postData, $url);
    }
}
