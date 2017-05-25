<?php /* Smarty version Smarty-3.1.19, created on 2016-10-17 11:11:03
         compiled from "/home/karnarui/public_html/zenstudents/admin790bbqamo/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7175350805804646f1f05e2-78100665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f8e3081125d562ac7e4b18d168b11de2528e37' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/admin790bbqamo/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1476352938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7175350805804646f1f05e2-78100665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5804646f1fd975_48982374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804646f1fd975_48982374')) {function content_5804646f1fd975_48982374($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
