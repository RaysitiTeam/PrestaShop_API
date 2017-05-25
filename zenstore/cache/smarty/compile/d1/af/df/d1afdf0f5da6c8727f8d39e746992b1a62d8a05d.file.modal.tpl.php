<?php /* Smarty version Smarty-3.1.19, created on 2016-10-13 16:31:24
         compiled from "/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35647387057ff6984976445-78101027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1afdf0f5da6c8727f8d39e746992b1a62d8a05d' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/admin401tqo2sa/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1476352938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35647387057ff6984976445-78101027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ff6984979b08_25671975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff6984979b08_25671975')) {function content_57ff6984979b08_25671975($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
