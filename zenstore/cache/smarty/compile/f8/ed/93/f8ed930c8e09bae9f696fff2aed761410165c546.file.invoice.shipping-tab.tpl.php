<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 11:07:25
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:887841902586c8a157a3204-46312963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8ed930c8e09bae9f696fff2aed761410165c546' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/pdf/invoice.shipping-tab.tpl',
      1 => 1483461349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '887841902586c8a157a3204-46312963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586c8a157b0be0_49044624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c8a157b0be0_49044624')) {function content_586c8a157b0be0_49044624($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
