<?php /* Smarty version Smarty-3.1.19, created on 2017-04-04 10:53:35
         compiled from "/home/zenstibx/public_html/estore/admin978jqir1y/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200658835158e32dd7ee0388-88660344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf9e20cf7def7f8b15758ab0b26833826454cb32' => 
    array (
      0 => '/home/zenstibx/public_html/estore/admin978jqir1y/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1490307797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200658835158e32dd7ee0388-88660344',
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
  'unifunc' => 'content_58e32dd803e4b2_62154655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e32dd803e4b2_62154655')) {function content_58e32dd803e4b2_62154655($_smarty_tpl) {?>
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
