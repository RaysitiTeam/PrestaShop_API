<?php /* Smarty version Smarty-3.1.19, created on 2017-03-25 12:27:09
         compiled from "/home/zenstibx/public_html/estore/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73207064758d614c5f1eb04-57599561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5165863e88ab7d6a91d75b35f104ab138f61a7f2' => 
    array (
      0 => '/home/zenstibx/public_html/estore/themes/default-bootstrap/category-count.tpl',
      1 => 1490303913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73207064758d614c5f1eb04-57599561',
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
  'unifunc' => 'content_58d614c5f3ba60_33874636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d614c5f3ba60_33874636')) {function content_58d614c5f3ba60_33874636($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
