<?php /* Smarty version Smarty-3.1.19, created on 2016-10-06 18:55:52
         compiled from "C:\xampp\htdocs\prestashop\modules\skrill\views\templates\hook\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2848957f650e0269370-11753337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec406dfcb34f9489763a06fa8a2d7d739119443d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\skrill\\views\\templates\\hook\\error.tpl',
      1 => 1475752129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2848957f650e0269370-11753337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'errorMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f650e02c4929_53374006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f650e02c4929_53374006')) {function content_57f650e02c4929_53374006($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['module']->value=="skrill") {?>
	<?php if ($_smarty_tpl->tpl_vars['errorMessage']->value) {?>
	    <div class="alert alert-danger">
	        <button type="button" class="close" data-dismiss="alert">×</button>
	        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errorMessage']->value, ENT_QUOTES, 'UTF-8', true);?>

	    </div>
	<?php }?>
<?php }?>
<?php }} ?>
