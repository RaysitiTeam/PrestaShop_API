<?php /* Smarty version Smarty-3.1.19, created on 2017-05-05 12:55:46
         compiled from "C:\xampp\htdocs\zenstore\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10896590c28fa697b46-60054297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54f59fb06b7a7a11f51b7bcf762ec0db7c284792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zenstore\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1493966855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10896590c28fa697b46-60054297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590c28fa6fde47_88566176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c28fa6fde47_88566176')) {function content_590c28fa6fde47_88566176($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
