<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 18:05:07
         compiled from "C:\xampp\htdocs\prestashop\admin401tqo2sa\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295957f3a1fbb6b663-73007803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ae53e33728317d43872159c6cd38e117f58756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin401tqo2sa\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1473154512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295957f3a1fbb6b663-73007803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f3a1fbb7bfb2_88743027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f3a1fbb7bfb2_88743027')) {function content_57f3a1fbb7bfb2_88743027($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
