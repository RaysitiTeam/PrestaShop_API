<?php /* Smarty version Smarty-3.1.19, created on 2017-02-01 13:55:03
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/front/payment_response.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168886037258919b5f46da18-85479527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '151a3bbd17369a0d674cfbf17e617ea3e6fe7c69' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/front/payment_response.tpl',
      1 => 1485520110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168886037258919b5f46da18-85479527',
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
  'unifunc' => 'content_58919b5f659555_46491330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58919b5f659555_46491330')) {function content_58919b5f659555_46491330($_smarty_tpl) {?>
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
