<?php /* Smarty version Smarty-3.1.19, created on 2016-10-15 16:32:32
         compiled from "/home/karnarui/public_html/zenstudents/modules/sendinblue/views/templates/admin/userlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205059266358020cc83d5631-51828782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '687ad0acc64c09949803f4d44229958856fe3ab6' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/modules/sendinblue/views/templates/admin/userlist.tpl',
      1 => 1476353967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205059266358020cc83d5631-51828782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cl_version' => 0,
    'middlelable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58020cc840ea82_25148455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58020cc840ea82_25148455')) {function content_58020cc840ea82_25148455($_smarty_tpl) {?>

<table width="100%" cellspacing="0" cellpadding="0" style="margin-top:15px;margin-bottom:15px;" class="table hidetableblock">
	<thead>
		<tr>
			<th colspan="2"><?php echo smartyTranslate(array('s'=>'Contacts list','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
		</tr>
	</thead>
	<tbody>
	
		<tr>
			<td style="border-bottom:none;" class="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['cl_version']->value);?>
"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['middlelable']->value);?>

			</td>
		</tr>
		<tr id="userDetails" style="display:none;">
			<td>
				<table class="table managesubscribeBlock" style="margin-top:20px;" cellspacing="0" cellpadding="0" width="100%">
					<thead>
						<tr>
							<th>Emails</th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'Client','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'Newsletter SendinBlue Status','mod'=>'sendinblue'),$_smarty_tpl);?>
<span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'Click on the icon to subscribe / unsubscribe the contact from SendinBlue and PrestaShop.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span></th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'Newsletter PrestaShop Status','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
                                                        <th width="20%"><?php echo smartyTranslate(array('s'=>'SMS SendinBlue Status','mod'=>'sendinblue'),$_smarty_tpl);?>
<span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'Click on the icon to subscribe / unsubscribe the SMS from SendinBlue.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span></th>
						</tr>
					</thead>
					<tbody class="midleft"> 
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<?php }} ?>
