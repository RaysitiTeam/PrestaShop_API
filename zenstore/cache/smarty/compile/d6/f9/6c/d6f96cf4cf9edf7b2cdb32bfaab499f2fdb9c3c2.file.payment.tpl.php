<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 10:52:00
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236642911586c8678a38178-37027702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f96cf4cf9edf7b2cdb32bfaab499f2fdb9c3c2' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1483461505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236642911586c8678a38178-37027702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586c8678a4f080_15190738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c8678a4f080_15190738')) {function content_586c8678a4f080_15190738($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
