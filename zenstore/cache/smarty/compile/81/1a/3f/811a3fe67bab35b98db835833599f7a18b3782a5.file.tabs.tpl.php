<?php /* Smarty version Smarty-3.1.19, created on 2016-10-06 16:39:03
         compiled from "C:\xampp\htdocs\prestashop\modules\skrill\views\templates\admin\tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2843357f630cf0c9063-51079285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '811a3fe67bab35b98db835833599f7a18b3782a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\skrill\\views\\templates\\admin\\tabs.tpl',
      1 => 1475752129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2843357f630cf0c9063-51079285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'backOfficeJsUrl' => 0,
    'backOfficeCssUrl' => 0,
    'message' => 0,
    'alert' => 0,
    'tabs' => 0,
    'selectedTab' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f630cf12ebc3_83923858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f630cf12ebc3_83923858')) {function content_57f630cf12ebc3_83923858($_smarty_tpl) {?>

<script type='text/javascript' src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['backOfficeJsUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['backOfficeCssUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel="stylesheet" type="text/css">

<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['message']->value['success']) {?>
		<?php $_smarty_tpl->tpl_vars["alert"] = new Smarty_variable("alert-success", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars["alert"] = new Smarty_variable("alert-danger", null, 0);?>
	<?php }?>
	<div class="bootstrap">
		<div class="module_confirmation conf confirm alert <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['alert']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		</div>
	</div>
<?php }?>

<div class="skrill-tabs">
	<?php if ($_smarty_tpl->tpl_vars['tabs']->value) {?>
		<nav>
		<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
			<button class="tab-title <?php if (isset($_smarty_tpl->tpl_vars['selectedTab']->value)&&$_smarty_tpl->tpl_vars['tab']->value['id']==$_smarty_tpl->tpl_vars['selectedTab']->value) {?>active<?php }?>" href="#" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-target="#skrill-tabs-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</button>
		<?php } ?>
		</nav>
		<div class="content">
		<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
			<div class="tab-content" id="skrill-tabs-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="display:<?php if (isset($_smarty_tpl->tpl_vars['selectedTab']->value)&&$_smarty_tpl->tpl_vars['tab']->value['id']==$_smarty_tpl->tpl_vars['selectedTab']->value) {?>block<?php } else { ?>none<?php }?>">
                <?php echo html_entity_decode(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>

			</div>
		<?php } ?>
		</div>
	<?php }?>
</div>
<?php }} ?>
