<?php /* Smarty version Smarty-3.1.19, created on 2016-10-13 16:37:50
         compiled from "/home/karnarui/public_html/zenstudents/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191645108557ff6b061ef4f6-82456318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a6d72b571b73593d98d2ea9c6bc2ec5893aa0a' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/themes/default-bootstrap/category-count.tpl',
      1 => 1476353153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191645108557ff6b061ef4f6-82456318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ff6b06239564_68054556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff6b06239564_68054556')) {function content_57ff6b06239564_68054556($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
