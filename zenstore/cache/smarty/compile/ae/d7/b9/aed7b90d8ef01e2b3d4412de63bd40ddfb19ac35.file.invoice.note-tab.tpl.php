<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 11:07:25
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/pdf/invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:383587319586c8a156c27e0-80961674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aed7b90d8ef01e2b3d4412de63bd40ddfb19ac35' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/pdf/invoice.note-tab.tpl',
      1 => 1483461349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '383587319586c8a156c27e0-80961674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586c8a156e13e7_22021595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c8a156e13e7_22021595')) {function content_586c8a156e13e7_22021595($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>
