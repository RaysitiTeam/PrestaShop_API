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
{if $status == 'Ok'}
	<p class="success">
		{l s='Your order has been completed.' mod='paytm'}
		<br /><br />{$responseMsg|escape:'htmlall':'UTF-8'}
		<br /><br />{l s='For any questions or for further information, please contact our' mod='paytm'} <a href="{$base_dir|escape:'htmlall':'UTF-8'}contact-form.php">{l s='customer support' mod='paytm'}</a>.
		<br /><br />If you would like to view your order history please <a href="order-history" title="{l s='History of Orders' mod='paytm'}">Click Here!</a>
	</p>
{else}
	<p class="error">
		{$responseMsg|escape:'htmlall':'UTF-8'}
		<br /><br /><a href="{$base_dir|escape:'htmlall':'UTF-8'}contact-form.php">{l s='customer support' mod='paytm'}</a>.
		<br /><br />If you would like to view your order history please <a href="order-history" title="{l s='History of Orders' mod='paytm'}">Click Here!</a>
	<p></p>
{/if}
