<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 11:03:58
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/admin401tqo2sa/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71430378586c89464ba766-26977245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25e9c923c634b9fedaf0a6c5551ea2b2928336a7' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/admin401tqo2sa/themes/default/template/controllers/localization/content.tpl',
      1 => 1483459716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71430378586c89464ba766-26977245',
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
  'unifunc' => 'content_586c894650c647_45906041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c894650c647_45906041')) {function content_586c894650c647_45906041($_smarty_tpl) {?>

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
