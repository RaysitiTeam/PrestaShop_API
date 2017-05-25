<?php /* Smarty version Smarty-3.1.19, created on 2017-01-14 16:10:16
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/admin978jqir1y/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1081843270587a0010bd45c4-98859341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cf6519ce823bc42d5a8f06a2ac163ed1268fe4' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/admin978jqir1y/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1483459788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1081843270587a0010bd45c4-98859341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587a0010c6b9d7_32021864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587a0010c6b9d7_32021864')) {function content_587a0010c6b9d7_32021864($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
