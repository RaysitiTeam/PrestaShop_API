<?php /* Smarty version Smarty-3.1.19, created on 2017-05-05 12:59:32
         compiled from "C:\xampp\htdocs\zenstore\admin978jqir1y\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24695590c29dc323bb0-39743301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a3b2f4b6cfeb424b1315f5a3636adb624c82144' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zenstore\\admin978jqir1y\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1493965601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24695590c29dc323bb0-39743301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590c29dc370578_66318801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c29dc370578_66318801')) {function content_590c29dc370578_66318801($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
