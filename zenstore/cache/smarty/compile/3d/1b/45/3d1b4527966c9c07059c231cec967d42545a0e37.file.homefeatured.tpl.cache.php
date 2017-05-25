<?php /* Smarty version Smarty-3.1.19, created on 2017-05-05 12:55:47
         compiled from "C:\xampp\htdocs\zenstore\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32687590c28fbc3bd92-53075659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1b4527966c9c07059c231cec967d42545a0e37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zenstore\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1493967008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32687590c28fbc3bd92-53075659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590c28fbca0a11_67021121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c28fbca0a11_67021121')) {function content_590c28fbca0a11_67021121($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
