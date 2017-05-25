<?php /* Smarty version Smarty-3.1.19, created on 2017-03-25 16:44:16
         compiled from "/home/zenstibx/public_html/estore/modules/paytm/views/templates/front/payment_response.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97139530858d6510858c8d5-39373842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2b44bc484cb76c411c72ae141264d6b36dfe3d2' => 
    array (
      0 => '/home/zenstibx/public_html/estore/modules/paytm/views/templates/front/payment_response.tpl',
      1 => 1490306094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97139530858d6510858c8d5-39373842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'responseMsg' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d651085c9218_99724006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d651085c9218_99724006')) {function content_58d651085c9218_99724006($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['status']->value=='Ok') {?>
	<p class="success">
		<?php echo smartyTranslate(array('s'=>'Your order has been completed.','mod'=>'paytm'),$_smarty_tpl);?>

		<br /><br /><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['responseMsg']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'paytm'),$_smarty_tpl);?>
 <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
contact-form.php"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'paytm'),$_smarty_tpl);?>
</a>.
		<br /><br />If you would like to view your order history please <a href="order-history" title="<?php echo smartyTranslate(array('s'=>'History of Orders','mod'=>'paytm'),$_smarty_tpl);?>
">Click Here!</a>
	</p>
<?php } else { ?>
	<p class="error">
		<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['responseMsg']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		<br /><br /><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
contact-form.php"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'paytm'),$_smarty_tpl);?>
</a>.
		<br /><br />If you would like to view your order history please <a href="order-history" title="<?php echo smartyTranslate(array('s'=>'History of Orders','mod'=>'paytm'),$_smarty_tpl);?>
">Click Here!</a>
	<p></p>
<?php }?>
<?php }} ?>
