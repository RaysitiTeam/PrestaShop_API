<?php /* Smarty version Smarty-3.1.19, created on 2017-03-25 16:44:05
         compiled from "/home/zenstibx/public_html/estore/modules/paytm/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44689819358d650fd8427d6-27764134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e08b60358ac23344fba4d7c3edf45f6fb58a10' => 
    array (
      0 => '/home/zenstibx/public_html/estore/modules/paytm/views/templates/hook/payment.tpl',
      1 => 1490306095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44689819358d650fd8427d6-27764134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d650fd8a33d5_54101141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d650fd8a33d5_54101141')) {function content_58d650fd8a33d5_54101141($_smarty_tpl) {?>
<p class="payment_module">
	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('paytm','payment',array(),true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'All Types of Card Accepted','mod'=>'paytm'),$_smarty_tpl);?>
">
		<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['this_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
logo.png" alt="<?php echo smartyTranslate(array('s'=>'All Types of Card Accepted','mod'=>'paytm'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'All Types of Card Accepted','mod'=>'paytm'),$_smarty_tpl);?>

	</a>
</p>

<?php }} ?>
