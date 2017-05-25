<?php /* Smarty version Smarty-3.1.19, created on 2017-05-05 12:59:32
         compiled from "C:\xampp\htdocs\zenstore\admin978jqir1y\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29302590c29dc2cb8f9-85265354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c30c68054986a7a22e75c664ad214bd71ff52f79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zenstore\\admin978jqir1y\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1493965601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29302590c29dc2cb8f9-85265354',
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
  'unifunc' => 'content_590c29dc2fdb23_21951943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c29dc2fdb23_21951943')) {function content_590c29dc2fdb23_21951943($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
