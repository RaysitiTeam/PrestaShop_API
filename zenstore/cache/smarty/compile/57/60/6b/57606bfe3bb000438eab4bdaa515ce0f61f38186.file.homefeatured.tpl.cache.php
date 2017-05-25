<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 22:24:42
         compiled from "/home/karnarui/public_html/zenstudents.com/zenstore/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1552377741586bd752595b54-05719306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57606bfe3bb000438eab4bdaa515ce0f61f38186' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/zenstore/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1483461433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552377741586bd752595b54-05719306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586bd7525b76d5_25854915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bd7525b76d5_25854915')) {function content_586bd7525b76d5_25854915($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
