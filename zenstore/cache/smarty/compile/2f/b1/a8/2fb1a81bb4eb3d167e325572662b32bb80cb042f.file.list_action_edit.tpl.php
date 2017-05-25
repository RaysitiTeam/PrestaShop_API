<?php /* Smarty version Smarty-3.1.19, created on 2017-04-04 10:53:36
         compiled from "/home/zenstibx/public_html/estore/admin978jqir1y/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97929417858e32dd88e4b31-81933314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb1a81bb4eb3d167e325572662b32bb80cb042f' => 
    array (
      0 => '/home/zenstibx/public_html/estore/admin978jqir1y/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1490306526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97929417858e32dd88e4b31-81933314',
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
  'unifunc' => 'content_58e32dd8929be8_66762518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e32dd8929be8_66762518')) {function content_58e32dd8929be8_66762518($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
