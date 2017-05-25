<?php /* Smarty version Smarty-3.1.19, created on 2016-10-13 16:32:07
         compiled from "/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173230307957ff69afde2924-18687721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd64a13c4ae192ab649d02443c53fa179d2bcb8' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/content.tpl',
      1 => 1476352887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173230307957ff69afde2924-18687721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ff69afdedf65_16002029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff69afdedf65_16002029')) {function content_57ff69afdedf65_16002029($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
