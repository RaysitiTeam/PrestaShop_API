<?php /* Smarty version Smarty-3.1.19, created on 2017-01-27 19:17:29
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1956727906588b4f7119d6f1-01664346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a881ba60a016cc76f2ebc4c0c8b267a7777186aa' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/hook/payment.tpl',
      1 => 1485520110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1956727906588b4f7119d6f1-01664346',
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
  'unifunc' => 'content_588b4f712361f4_08487097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b4f712361f4_08487097')) {function content_588b4f712361f4_08487097($_smarty_tpl) {?>
<p class="payment_module">
	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('paytm','payment',array(),true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with Paytm','mod'=>'paytm'),$_smarty_tpl);?>
">
		<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['this_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
logo.png" alt="<?php echo smartyTranslate(array('s'=>'Pay by Paytm','mod'=>'paytm'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'Pay with Paytm','mod'=>'paytm'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
