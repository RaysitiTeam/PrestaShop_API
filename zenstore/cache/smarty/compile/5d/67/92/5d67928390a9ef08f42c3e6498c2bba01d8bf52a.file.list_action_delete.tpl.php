<?php /* Smarty version Smarty-3.1.19, created on 2017-04-04 10:53:36
         compiled from "/home/zenstibx/public_html/estore/admin978jqir1y/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195398241258e32dd89ae5b3-99000981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d67928390a9ef08f42c3e6498c2bba01d8bf52a' => 
    array (
      0 => '/home/zenstibx/public_html/estore/admin978jqir1y/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1490306526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195398241258e32dd89ae5b3-99000981',
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
  'unifunc' => 'content_58e32dd89e8885_70884709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e32dd89e8885_70884709')) {function content_58e32dd89e8885_70884709($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
