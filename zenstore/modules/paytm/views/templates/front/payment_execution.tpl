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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2016-2020 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*}
{include file="$tpl_dir./breadcrumb.tpl"}

<h2>{l s='Order summary' mod='paytm'}</h2>

{assign var='current_step' value='payment'}

{if isset($nbProducts) && $nbProducts <= 0}
    <p class="warning">{l s='Your shopping cart is empty.' mod='paytm'}</p>
{else}

<h3>{l s='You have chosen to pay with Paytm' mod='paytm'}</h3>
<form name="checkout_confirmation" action="{$paytmurl|escape:'htmlall':'UTF-8'}" method="post" />
	<input type="hidden" name="MID" value="{$merchant_id|escape:'htmlall':'UTF-8'}" />
	<input type="hidden" name="ORDER_ID" value="{$order_id|escape:'htmlall':'UTF-8'}" />
	
	<input name="WEBSITE" type="hidden" value="{$website|escape:'htmlall':'UTF-8'}" />
	<input name="INDUSTRY_TYPE_ID" type="hidden" value="{$industry_type|escape:'htmlall':'UTF-8'}" />
	<input name="CHANNEL_ID" type="hidden" value="{$channel_id|escape:'htmlall':'UTF-8'}" />
	<input name="TXN_AMOUNT" type="hidden" value="{$amount|escape:'htmlall':'UTF-8'}" />
	<input name="EMAIL" type="hidden" value="{$email|escape:'htmlall':'UTF-8'}" />
	<input name="CUST_ID" type="hidden" value="{$cust_id|escape:'htmlall':'UTF-8'}" />
	<input name="MOBILE_NO" type="hidden" value="{$mobile_no|escape:'htmlall':'UTF-8'}" />
	<input name="txnDate" type="hidden" value="{$date|escape:'htmlall':'UTF-8'}" />
	<input name="CHECKSUMHASH" type="hidden" value="{$checksum|escape:'htmlall':'UTF-8'}" />
	<input type="hidden" name="CALLBACK_URL" value="{$callbackhtml|escape:'htmlall':'UTF-8'}" />
	
    <p>
		{l s='Here is a short summary of your order:' mod='paytm'}
	</p>
	<p style="margin-top:20px;">
		- {l s='The total amount of your order is' mod='paytm'}
			<span id="amount_{$currency->id|escape:'htmlall':'UTF-8'}" class="price">{convertPriceWithCurrency price=$total currency=$currency}</span>
			{if $use_taxes == 1}
			{l s='(tax incl.)' mod='paytm'}
			{/if}
	</p>
	<p>
        {l s='You will be redirected to Paytm to complete your payment.' mod='paytm'}
        <br /><br />
        <b>{l s='Please confirm your order by clicking \'I confirm my order\'' mod='paytm'}.</b>
    </p>
	<p class="cart_navigation">
        <input type="submit" name="submit" value="{l s='I confirm my order' mod='paytm'}" class="exclusive_large" />
        <a href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'htmlall':'UTF-8'}" class="button_large">{l s='Other payment methods' mod='paytm'}</a>
 	</p>
 </form>
{/if}