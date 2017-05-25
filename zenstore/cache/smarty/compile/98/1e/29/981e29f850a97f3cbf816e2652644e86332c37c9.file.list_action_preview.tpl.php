<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 11:02:28
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/admin401tqo2sa/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997399135586c88ecafc3d8-60889275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '981e29f850a97f3cbf816e2652644e86332c37c9' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/admin401tqo2sa/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1483459742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997399135586c88ecafc3d8-60889275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586c88ecb09528_35511997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c88ecb09528_35511997')) {function content_586c88ecb09528_35511997($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
