<?php /* Smarty version Smarty-3.1.19, created on 2016-10-06 18:55:41
         compiled from "C:\xampp\htdocs\prestashop\modules\skrill\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767657f650d58f9d69-92692922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a06a2a5ccdf8f83e5a7ad44e563d3d9f857e9cde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\skrill\\views\\templates\\hook\\payment.tpl',
      1 => 1475752129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767657f650d58f9d69-92692922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this_path' => 0,
    'payments' => 0,
    'payment' => 0,
    'payment_id' => 0,
    'payment_link' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f650d598f025_87611347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f650d598f025_87611347')) {function content_57f650d598f025_87611347($_smarty_tpl) {?>

<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['this_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/css/skrill.css" rel="stylesheet" type="text/css">

<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['payment']->key;
?>
	<?php $_smarty_tpl->tpl_vars['payment_id'] = new Smarty_variable(ucfirst($_smarty_tpl->tpl_vars['payment']->value['name']), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['payment_link'] = new Smarty_variable("payment".((string)$_smarty_tpl->tpl_vars['payment_id']->value), null, 0);?>
	<div class="row">
		<div class="col-xs-12">
			<p class="payment_module">
				<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('skrill',$_smarty_tpl->tpl_vars['payment_link']->value,array(),true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="skrill-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" onmouseover="this.style.textDecoration='none';">
						<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['this_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.png" alt="" height="49"/>
				</a>
			</p>
		</div>
	</div>
<?php } ?>
<?php }} ?>
