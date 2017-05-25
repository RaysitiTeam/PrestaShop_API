<?php /* Smarty version Smarty-3.1.19, created on 2017-01-27 17:58:45
         compiled from "/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:714436227588b3cfdb8cb15-95905250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6b3147053dbbbf212ca1119207d94c982bf2235' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents.com/estore/modules/paytm/views/templates/admin/configure.tpl',
      1 => 1485520110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '714436227588b3cfdb8cb15-95905250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588b3cfdc34d79_18192298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b3cfdc34d79_18192298')) {function content_588b3cfdc34d79_18192298($_smarty_tpl) {?>

<div class="panel">
	<div class="row paytm-header">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/logo.png" class="col-xs-6 col-md-4 text-center" id="payment-logo" />
		<div class="col-xs-6 col-md-4 text-center">
			<h4><?php echo smartyTranslate(array('s'=>'Online payment processing','mod'=>'paytm'),$_smarty_tpl);?>
</h4>
			<h4><?php echo smartyTranslate(array('s'=>'Fast - Secure - Reliable','mod'=>'paytm'),$_smarty_tpl);?>
</h4>
		</div>
	</div>

	<hr />
	
	<div class="paytm-content">
		<div class="row">
			<div class="col-md-6">
				<h5><?php echo smartyTranslate(array('s'=>'This module allows you to accept payments by Paytm.','mod'=>'paytm'),$_smarty_tpl);?>
</h5>
				<dl>					
					<dd><?php echo smartyTranslate(array('s'=>'If the client chooses this payment mode, your Paytm account will 
        be automatically credited.','mod'=>'paytm'),$_smarty_tpl);?>
</dd>
					<dd><?php echo smartyTranslate(array('s'=>'You need to configure your Paytm account first before using this module.','mod'=>'paytm'),$_smarty_tpl);?>
</dd>
				</dl>
			</div>
		</div>		
		
	</div>
</div>
<?php }} ?>
