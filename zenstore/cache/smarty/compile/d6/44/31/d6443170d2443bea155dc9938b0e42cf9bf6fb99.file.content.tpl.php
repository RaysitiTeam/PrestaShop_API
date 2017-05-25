<?php /* Smarty version Smarty-3.1.19, created on 2016-10-17 11:11:22
         compiled from "/home/karnarui/public_html/zenstudents/admin790bbqamo/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167799171458046482cb0288-20555287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6443170d2443bea155dc9938b0e42cf9bf6fb99' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/admin790bbqamo/themes/default/template/content.tpl',
      1 => 1476352887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167799171458046482cb0288-20555287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58046482ce17a9_21635183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046482ce17a9_21635183')) {function content_58046482ce17a9_21635183($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
