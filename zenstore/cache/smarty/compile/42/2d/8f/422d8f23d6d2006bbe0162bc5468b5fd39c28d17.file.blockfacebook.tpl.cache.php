<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 22:26:26
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962878547586bd7ba19cf69-83649400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '422d8f23d6d2006bbe0162bc5468b5fd39c28d17' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/modules/blockfacebook/blockfacebook.tpl',
      1 => 1483460891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962878547586bd7ba19cf69-83649400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586bd7ba1b6e49_74957797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bd7ba1b6e49_74957797')) {function content_586bd7ba1b6e49_74957797($_smarty_tpl) {?>
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
