{**
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

<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <i class="icon-credit-card"></i>
                {if {l s='BACKEND_GENERAL_INFORMATION' mod='skrill'} == "BACKEND_GENERAL_INFORMATION"}PAYMENT INFORMATION{else}{l s='BACKEND_GENERAL_INFORMATION' mod='skrill'}{/if}
                <span class="badge">{if {l s='BACKEND_TT_BY_SKRILL' mod='skrill'} == "BACKEND_TT_BY_SKRILL"}by Skrill{else}{l s='BACKEND_TT_BY_SKRILL' mod='skrill'}{/if}</span>
            </div>
            <div id="paymentinfos" class="well col-xs-12">
                <form method='POST' action="{$smarty.server.REQUEST_URI|escape:'htmlall':'UTF-8'}">
                    <div id="paymentinfo">
                        <div class="form-group">
                            <label class="col-lg-12">{$paymentInfo.name|escape:'htmlall':'UTF-8'}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3">{if {l s='SKRILL_BACKEND_ORDER_STATUS' mod='skrill'} == "SKRILL_BACKEND_ORDER_STATUS"}Payment status{else}{l s='SKRILL_BACKEND_ORDER_STATUS' mod='skrill'}{/if}</label>
                            <label class="control-label col-lg-9">{$paymentInfo.status|escape:'htmlall':'UTF-8'}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3">{if {l s='SKRILL_BACKEND_ORDER_PM' mod='skrill'} == "SKRILL_BACKEND_ORDER_PM"}Used payment method{else}{l s='SKRILL_BACKEND_ORDER_PM' mod='skrill'}{/if}</label>
                            <label class="control-label col-lg-9">{$paymentInfo.method|escape:'htmlall':'UTF-8'}</label>
                        </div>
                        {if $paymentInfo.order_origin}
                            <div class="form-group">
                                <label class="col-lg-3">{if {l s='SKRILL_BACKEND_ORDER_ORIGIN' mod='skrill'} == "SKRILL_BACKEND_ORDER_ORIGIN"}Order originated from{else}{l s='SKRILL_BACKEND_ORDER_ORIGIN' mod='skrill'}{/if}</label>
                                <label class="control-label col-lg-9">{$paymentInfo.order_origin|escape:'htmlall':'UTF-8'}</label>
                            </div>
                        {/if}
                        {if $paymentInfo.order_country}
                            <div class="form-group">
                                <label class="col-lg-3">{if {l s='SKRILL_BACKEND_ORDER_COUNTRY' mod='skrill'} == "SKRILL_BACKEND_ORDER_COUNTRY"}Country (of the card-issuer){else}{l s='SKRILL_BACKEND_ORDER_COUNTRY' mod='skrill'}{/if}</label>
                                <label class="control-label col-lg-9">{$paymentInfo.order_country|escape:'htmlall':'UTF-8'}</label>
                            </div>
                        {/if}
                        <div class="form-group">
                            <label class="col-lg-3">{if {l s='SKRILL_BACKEND_ORDER_CURRENCY' mod='skrill'} == "SKRILL_BACKEND_ORDER_CURRENCY"}Currency{else}{l s='SKRILL_BACKEND_ORDER_CURRENCY' mod='skrill'}{/if}</label>
                            <label class="control-label col-lg-9">{$paymentInfo.currency|escape:'htmlall':'UTF-8'}</label>
                        </div>
                        {if $buttonUpdateOrder}
                            <input type="hidden" name='id_order' value="{$orderId|escape:'htmlall':'UTF-8'}">
                            <button type="submit" class="btn btn-primary pull-right" name="skrillUpdateOrder">
                                {if {l s='BACKEND_BT_UPDATE_ORDER' mod='skrill'} == "BACKEND_BT_UPDATE_ORDER"}Update Order{else}{l s='BACKEND_BT_UPDATE_ORDER' mod='skrill'}{/if}
                            </button>
                        {/if}
                        {if $buttonRefundOrder}
                            <input type="hidden" name='id_order' value="{$orderId|escape:'htmlall':'UTF-8'}">
                            <button type="submit" style="display:none" name="skrillRefundOrder" id="skrillRefundOrder">Refund</button>
                        {/if}
                    </div>
                </form>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>
