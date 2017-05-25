<?php /* Smarty version Smarty-3.1.19, created on 2016-12-26 17:59:59
         compiled from "/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2736123658610d47d38ee3-78879089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e8aefd7a2cef30826e29ecb8ece535eae9a15c' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/controllers/localization/content.tpl',
      1 => 1476352918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2736123658610d47d38ee3-78879089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58610d47dc97a7_08249480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58610d47dc97a7_08249480')) {function content_58610d47dc97a7_08249480($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
