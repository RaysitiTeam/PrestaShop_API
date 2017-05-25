{*
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
*  @copyright  2016-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="panel">
	<div class="row paytm-header">
		<img src="{$module_dir|escape:'html':'UTF-8'}views/img/logo.png" class="col-xs-6 col-md-4 text-center" id="payment-logo" />
		<div class="col-xs-6 col-md-4 text-center">
			<h4>{l s='Online payment processing' mod='paytm'}</h4>
			<h4>{l s='Fast - Secure - Reliable' mod='paytm'}</h4>
		</div>
	</div>

	<hr />
	
	<div class="paytm-content">
		<div class="row">
			<div class="col-md-6">
				<h5>{l s='This module allows you to accept payments by Paytm.' mod='paytm'}</h5>
				<dl>					
					<dd>{l s='If the client chooses this payment mode, your Paytm account will 
        be automatically credited.' mod='paytm'}</dd>
					<dd>{l s='You need to configure your Paytm account first before using this module.' mod='paytm'}</dd>
				</dl>
			</div>
		</div>		
		
	</div>
</div>
