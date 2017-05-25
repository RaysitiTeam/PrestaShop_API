<?php /* Smarty version Smarty-3.1.19, created on 2016-10-14 12:35:00
         compiled from "/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9075507625800839c9a3718-96919319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14ff0ea50777d2d10718359b601f7a9a043ce8e6' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1476352937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9075507625800839c9a3718-96919319',
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
  'unifunc' => 'content_5800839c9f49d7_08631354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800839c9f49d7_08631354')) {function content_5800839c9f49d7_08631354($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
