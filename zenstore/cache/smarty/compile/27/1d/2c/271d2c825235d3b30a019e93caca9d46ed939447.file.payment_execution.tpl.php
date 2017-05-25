<?php /* Smarty version Smarty-3.1.19, created on 2017-01-27 19:17:49
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/front/payment_execution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:714137614588b4f8545ae10-26189361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271d2c825235d3b30a019e93caca9d46ed939447' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/front/payment_execution.tpl',
      1 => 1485520110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '714137614588b4f8545ae10-26189361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbProducts' => 0,
    'paytmurl' => 0,
    'merchant_id' => 0,
    'order_id' => 0,
    'website' => 0,
    'industry_type' => 0,
    'channel_id' => 0,
    'amount' => 0,
    'email' => 0,
    'cust_id' => 0,
    'mobile_no' => 0,
    'date' => 0,
    'checksum' => 0,
    'callbackhtml' => 0,
    'currency' => 0,
    'total' => 0,
    'use_taxes' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588b4f855dbfe9_64727001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b4f855dbfe9_64727001')) {function content_588b4f855dbfe9_64727001($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h2><?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'paytm'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['nbProducts']->value)&&$_smarty_tpl->tpl_vars['nbProducts']->value<=0) {?>
    <p class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'paytm'),$_smarty_tpl);?>
</p>
<?php } else { ?>

<h3><?php echo smartyTranslate(array('s'=>'You have chosen to pay with Paytm','mod'=>'paytm'),$_smarty_tpl);?>
</h3>
<form name="checkout_confirmation" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paytmurl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" />
	<input type="hidden" name="MID" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['merchant_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input type="hidden" name="ORDER_ID" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	
	<input name="WEBSITE" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['website']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="INDUSTRY_TYPE_ID" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['industry_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="CHANNEL_ID" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['channel_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="TXN_AMOUNT" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="EMAIL" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="CUST_ID" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cust_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="MOBILE_NO" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mobile_no']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="txnDate" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input name="CHECKSUMHASH" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['checksum']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input type="hidden" name="CALLBACK_URL" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['callbackhtml']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	
    <p>
		<?php echo smartyTranslate(array('s'=>'Here is a short summary of your order:','mod'=>'paytm'),$_smarty_tpl);?>

	</p>
	<p style="margin-top:20px;">
		- <?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'paytm'),$_smarty_tpl);?>

			<span id="amount_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->id, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['total']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>
			<?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'paytm'),$_smarty_tpl);?>

			<?php }?>
	</p>
	<p>
        <?php echo smartyTranslate(array('s'=>'You will be redirected to Paytm to complete your payment.','mod'=>'paytm'),$_smarty_tpl);?>

        <br /><br />
        <b><?php echo smartyTranslate(array('s'=>'Please confirm your order by clicking \'I confirm my order\'','mod'=>'paytm'),$_smarty_tpl);?>
.</b>
    </p>
	<p class="cart_navigation">
        <input type="submit" name="submit" value="<?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'paytm'),$_smarty_tpl);?>
" class="exclusive_large" />
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3"), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'paytm'),$_smarty_tpl);?>
</a>
 	</p>
 </form>
<?php }?><?php }} ?>
