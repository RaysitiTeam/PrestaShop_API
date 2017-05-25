{*
* 2015 Skrill
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
*
*  @author Skrill <contact@skrill.com>
*  @copyright  2015 Skrill
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{literal}
	<style>
		.line {
			text-decoration : underline;
		}
	</style>
{/literal}

{if $status == 'ok'}
	<p> 
		{if {l s='FRONTEND_MESSAGE_YOUR_ORDER' mod='skrill'} == "FRONTEND_MESSAGE_YOUR_ORDER"}Your order on{else}{l s='FRONTEND_MESSAGE_YOUR_ORDER' mod='skrill'}{/if} {$shop_name|escape:'htmlall':'UTF-8'} {if {l s='FRONTEND_MESSAGE_COMPLETE' mod='skrill'} == "FRONTEND_MESSAGE_COMPLETE"}is complete.{else}{l s='FRONTEND_MESSAGE_COMPLETE' mod='skrill'}{/if}
		{if {l s='FRONTEND_MESSAGE_ORDER_RECEIVED' mod='skrill'} == "FRONTEND_MESSAGE_ORDER_RECEIVED"}Your order has been received.{else}{l s='FRONTEND_MESSAGE_ORDER_RECEIVED' mod='skrill'}{/if}<br />
		{if {l s='FRONTEND_MESSAGE_THANK_YOU' mod='skrill'} == "FRONTEND_MESSAGE_THANK_YOU"}Thank you for your purchase!{else}{l s='FRONTEND_MESSAGE_THANK_YOU' mod='skrill'}{/if}<br />
		{if {l s='FRONTEND_MESSAGE_ORDER_REFERENCE' mod='skrill'} == "FRONTEND_MESSAGE_ORDER_REFERENCE"}Your order reference is : {else}{l s='FRONTEND_MESSAGE_ORDER_REFERENCE' mod='skrill'}{/if}{$reference|escape:'htmlall':'UTF-8'}.<br />
		{if {l s='FRONTEND_MESSAGE_ORDER_CONFIRMATION' mod='skrill'} == "FRONTEND_MESSAGE_ORDER_CONFIRMATION"}You will receive an order confirmation email with details of your order and a link to track its progress.{else}{l s='FRONTEND_MESSAGE_ORDER_CONFIRMATION' mod='skrill'}{/if}<br />
		{if {l s='FRONTEND_MESSAGE_CLICK' mod='skrill'} == "FRONTEND_MESSAGE_CLICK"}Click{else}{l s='FRONTEND_MESSAGE_CLICK' mod='skrill'}{/if} <a class="line" href="{$link->getPageLink('pdf-invoice',true)|escape:'htmlall':'UTF-8'}&id_order={$id_order|escape:'htmlall':'UTF-8'}">{if {l s='FRONTEND_MESSAGE_HERE' mod='skrill'} == "FRONTEND_MESSAGE_HERE"}here{else}{l s='FRONTEND_MESSAGE_HERE' mod='skrill'}{/if}</a> {if {l s='FRONTEND_MESSAGE_PRINT' mod='skrill'} == "FRONTEND_MESSAGE_PRINT"}to print a copy of your order confirmation.{else}{l s='FRONTEND_MESSAGE_PRINT' mod='skrill'}{/if}
	</p>
{/if}
