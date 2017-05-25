<?php /* Smarty version Smarty-3.1.19, created on 2016-10-15 16:40:14
         compiled from "/home/karnarui/public_html/zenstudents/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163312774658020e96310a95-55192552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe04683f8b16d7b6716d7373a3c162aaa8c8f5a' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1476353956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163312774658020e96310a95-55192552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58020e96386395_96658083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58020e96386395_96658083')) {function content_58020e96386395_96658083($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
