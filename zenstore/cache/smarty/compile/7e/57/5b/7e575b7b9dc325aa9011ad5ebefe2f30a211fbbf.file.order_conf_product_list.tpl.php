<?php /* Smarty version Smarty-3.1.19, created on 2017-03-25 16:44:13
         compiled from "/home/zenstibx/public_html/estore/mails/en/order_conf_product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62240963158d6510555d225-15121235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e575b7b9dc325aa9011ad5ebefe2f30a211fbbf' => 
    array (
      0 => '/home/zenstibx/public_html/estore/mails/en/order_conf_product_list.tpl',
      1 => 1490303752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62240963158d6510555d225-15121235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'product' => 0,
    'customization' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d651055763e9_11344090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d651055763e9_11344090')) {function content_58d651055763e9_11344090($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
<tr>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="10">&nbsp;</td>
				<td>
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>

					</font>
				</td>
				<td width="10">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="10">&nbsp;</td>
				<td>
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<strong><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</strong>
					</font>
				</td>
				<td width="10">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="10">&nbsp;</td>
				<td align="right">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo $_smarty_tpl->tpl_vars['product']->value['unit_price'];?>

					</font>
				</td>
				<td width="10">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="10">&nbsp;</td>
				<td align="right">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>

					</font>
				</td>
				<td width="10">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="10">&nbsp;</td>
				<td align="right">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

					</font>
				</td>
				<td width="10">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
	<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customization']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
		<tr>
		<td colspan="2" style="border:1px solid #D6D4D4;">
			<table class="table">
				<tr>
					<td width="10">&nbsp;</td>
					<td>
						<font size="2" face="Open-sans, sans-serif" color="#555454">
							<strong><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</strong><br>
							<?php echo $_smarty_tpl->tpl_vars['customization']->value['customization_text'];?>

						</font>
					</td>
					<td width="10">&nbsp;</td>
				</tr>
			</table>
		</td>
		<td style="border:1px solid #D6D4D4;">
			<table class="table">
				<tr>
					<td width="10">&nbsp;</td>
					<td align="right">
						<font size="2" face="Open-sans, sans-serif" color="#555454">
							<?php echo $_smarty_tpl->tpl_vars['product']->value['unit_price'];?>

						</font>
					</td>
					<td width="10">&nbsp;</td>
				</tr>
			</table>
		</td>
		<td style="border:1px solid #D6D4D4;">
			<table class="table">
				<tr>
					<td width="10">&nbsp;</td>
					<td align="right">
						<font size="2" face="Open-sans, sans-serif" color="#555454">
							<?php echo $_smarty_tpl->tpl_vars['customization']->value['customization_quantity'];?>

						</font>
					</td>
					<td width="10">&nbsp;</td>
				</tr>
			</table>
		</td>
		<td style="border:1px solid #D6D4D4;">
			<table class="table">
				<tr>
					<td width="10">&nbsp;</td>
					<td align="right">
						<font size="2" face="Open-sans, sans-serif" color="#555454">
							<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>

						</font>
					</td>
					<td width="10">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
	<?php } ?>
<?php } ?><?php }} ?>
