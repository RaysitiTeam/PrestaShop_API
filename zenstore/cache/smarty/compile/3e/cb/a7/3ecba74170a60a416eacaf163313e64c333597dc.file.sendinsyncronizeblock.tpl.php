<?php /* Smarty version Smarty-3.1.19, created on 2016-10-15 16:32:31
         compiled from "/home/karnarui/public_html/zenstudents/modules/sendinblue/views/templates/admin/sendinsyncronizeblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89799391558020cc769dc11-05885623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ecba74170a60a416eacaf163313e64c333597dc' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/modules/sendinblue/views/templates/admin/sendinsyncronizeblock.tpl',
      1 => 1476353967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89799391558020cc769dc11-05885623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_url' => 0,
    'cl_version' => 0,
    'Sendin_Subscribe_Setting' => 0,
    'parselist' => 0,
    'radio_val_option' => 0,
    'temp_data' => 0,
    'chkval_url' => 0,
    'Sendin_doubleoptin_redirect' => 0,
    'chkval' => 0,
    'temp_confirm' => 0,
    'smtp_alert' => 0,
    'Sendin_import_user_status' => 0,
    'link' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58020cc7806e91_36444653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58020cc7806e91_36444653')) {function content_58020cc7806e91_36444653($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/karnarui/public_html/zenstudents/tools/smarty/plugins/modifier.replace.php';
?>

<form method="post" action="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
">
<table cellspacing="0" cellpadding="0" width="100%" style="margin-top:15px;" class="table tableblock hidetableblock form-data">
        <thead>
        <tr>
        <th colspan="2"><?php echo smartyTranslate(array('s'=>'Activate SendinBlue to manage subscribers','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
        </tr>
        </thead>
        <tbody><tr>
        <td style="width:250px">
        <label> <?php echo smartyTranslate(array('s'=>'Activate SendinBlue to manage subscribers','mod'=>'sendinblue'),$_smarty_tpl);?>

        </label>
        </td>
        <td class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><input type="radio" <?php if (isset($_smarty_tpl->tpl_vars['Sendin_Subscribe_Setting']->value)&&$_smarty_tpl->tpl_vars['Sendin_Subscribe_Setting']->value==1) {?>checked="checked"<?php }?> value="1" name="managesubscribe" style="margin-right:10px;" id="managesubscribe" class="managesubscribe"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'sendinblue'),$_smarty_tpl);?>

        <input type="radio" <?php if (isset($_smarty_tpl->tpl_vars['Sendin_Subscribe_Setting']->value)&&$_smarty_tpl->tpl_vars['Sendin_Subscribe_Setting']->value==0) {?>checked="checked"<?php }?> value="0" name="managesubscribe" style="margin-left:20px;margin-right:10px;" id="managesubscribe" class="managesubscribe"><?php echo smartyTranslate(array('s'=>'No','mod'=>'sendinblue'),$_smarty_tpl);?>

        <span title="<?php echo smartyTranslate(array('s'=>'If you activate this feature, your new contacts will be automatically added to SendinBlue or unsubscribed from SendinBlue. To synchronize the other way (SendinBlue to PrestaShop), you should run the url (mentioned below) each day.','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="toolTip">
        &nbsp;</span>
        </td>
        </tr><tr class="managesubscribeBlock"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['parselist']->value);?>
</tr>
        <tr class="managesubscribeBlock"><td>&nbsp;</td>
        <td>
        </td>
        </tr><tr class="managesubscribeBlock"><td></td><td>
        <div class="col-md-6 left-wrapper radio_group_option">
  <div class="form-group manage_subscribe_block">
    <div>
      <input type="radio" <?php if (isset($_smarty_tpl->tpl_vars['radio_val_option']->value)&&$_smarty_tpl->tpl_vars['radio_val_option']->value=="nocon") {?>checked="checked"<?php }?> value="nocon" name="subscribe_confirm_type" id="no_follow_email">
      <label for="no_follow_email" class="radio-label"> <?php echo smartyTranslate(array('s'=>'No confirmation','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
    </div>
    <div class="clearfix"></div>
    <div style="display:block;" class="inner_manage_box">
      <div class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" id="no-templates"> <?php echo smartyTranslate(array('s'=>'With this option, contacts are directly added to your list when they enter their email address. No confirmation email is sent.','mod'=>'sendinblue'),$_smarty_tpl);?>
</div>
    </div>
  </div>
  <div class="form-group manage_subscribe_block">
    <div class="col-md-10">
      <input type="radio" <?php if (isset($_smarty_tpl->tpl_vars['radio_val_option']->value)&&$_smarty_tpl->tpl_vars['radio_val_option']->value=="simplemail") {?>checked="checked"<?php }?> value="simplemail" id="follow_mail" name="subscribe_confirm_type">
      <label for="follow_mail" class="radio-label"> <?php echo smartyTranslate(array('s'=>'Simple confirmation','mod'=>'sendinblue'),$_smarty_tpl);?>
</label><span title="<?php echo smartyTranslate(array('s'=>'This confirmation email is one of your SMTP templates. By default, we have created a Default Template - Single Confirmation.','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="toolTip"></span>
    </div>
    <div class="inner_manage_box" <?php if (isset($_smarty_tpl->tpl_vars['radio_val_option']->value)&&$_smarty_tpl->tpl_vars['radio_val_option']->value=="simplemail") {?> style="display:block;" <?php }?>> 
      <div class="clearfix"></div>
      <div class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" id="create-templates"> <?php echo smartyTranslate(array('s'=>'By selecting this option, contacts are directly added to your list when they enter their email address on the form. A confirmation email will automatically be sent following their subscription.','mod'=>'sendinblue'),$_smarty_tpl);?>
</div>
      <div class="clearfix"></div>
      <div id="mail-templates"><div style="text-align: left;" class="listData <?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
 managesubscribeBlock"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['temp_data']->value);?>
</div></div>
      <div class="clearfix"></div>
      <div id="mail-templates-active-state">
        
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
  <div class="form-group manage_subscribe_block">
    <div style="padding: 0px;" class="col-md-10">
      <input type="radio" <?php if (isset($_smarty_tpl->tpl_vars['radio_val_option']->value)&&$_smarty_tpl->tpl_vars['radio_val_option']->value=="doubleoptin") {?>checked="checked"<?php }?> value="doubleoptin" id="double_optin" name="subscribe_confirm_type">
      <label for="double_optin" class="radio-label"> <?php echo smartyTranslate(array('s'=>'Double opt-in confirmation','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
      <span title="<?php echo smartyTranslate(array('s'=>'If you select the Double Opt-in confirmation, subscribers will receive an email inviting them to confirm their subscription. Before confirmation, the contact will be saved in the \'FORM\' folder, on the \'Temp - DOUBLE OPT-IN\' list. After confirmation, the contact will be saved in the \'Corresponding List\' selected below.','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="toolTip">
    </span></div>
    <div class="clearfix"></div>
    <div class="inner_manage_box" <?php if (isset($_smarty_tpl->tpl_vars['radio_val_option']->value)&&$_smarty_tpl->tpl_vars['radio_val_option']->value=="doubleoptin") {?> style="display:block;" <?php }?>> 
      <div class="clearfix"></div>
      <!-- Please select a template with the [DOUBLEOPTIN] link -->
      <div id="create-doubleoptin-templates">
        <p style="width: 90%;text-align: justify;text-justify: inter-word;"><?php echo smartyTranslate(array('s'=>'Once the form has been completed, your contact will receive an email with a link to confirm their subscription.','mod'=>'sendinblue'),$_smarty_tpl);?>
</p></div>
      <!-- Redirect URL after click on the validation email -->
      <div class="clearfix"></div>
      <div style="padding-top: 10px;" id="doubleoptin-redirect-url-area" class="form-group clearfix"> 
      <div style="float:left;">
        <input type="checkbox" class="openCollapse" <?php if (isset($_smarty_tpl->tpl_vars['chkval_url']->value)&&$_smarty_tpl->tpl_vars['chkval_url']->value=="yes") {?>checked="checked"<?php }?> value="yes" name="optin_redirect_url_check" id="doptin_redirect_span_icon">
        <a style="color: #555;font-weight: bold;" aria-controls="mail-doubleoptin-redirect" href="#mail-doubleoptin-redirect"> <?php echo smartyTranslate(array('s'=>'Redirect URL after clicking in the validation email','mod'=>'sendinblue'),$_smarty_tpl);?>
 </a> 
        <!-- <label style="margin-bottom: 5px;"></label> -->
        </div>
        <div class="clearfix"></div>
        <div id="mail-doubleoptin-redirect" class="collapse">
          <p style="width: 90%;text-align: justify;text-justify: inter-word;">       
          <?php echo smartyTranslate(array('s'=>'Redirect your contacts to a landing page or to your website once they have clicked on the confirmation link in the email.','mod'=>'sendinblue'),$_smarty_tpl);?>
</p>
          <input type="url" style="margin-bottom:10px;width:370px" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['Sendin_doubleoptin_redirect']->value);?>
" placeholder="http://your-domain.com" class="form-control" name="doubleoptin-redirect-url" id="doubleoptin-redirect-url">
          <div class="clearfix"></div>
          <div class="pull-left" id="doubleoptin-redirect-message"> </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- Send a final confirmation email -->
      <div class="clearfix"></div>
      <div id="doubleoptin-final-confirmation-area" class="form-group clearfix"> 
      <div style="float:left;">
        <input type="checkbox" class="openCollapse" <?php if (isset($_smarty_tpl->tpl_vars['chkval']->value)&&$_smarty_tpl->tpl_vars['chkval']->value=="yes") {?>checked="checked"<?php }?> value="yes" name="final_confirm_email" id="doptin_final_confirm_email">
        <a style="color: #555;font-weight: bold;" aria-controls="doubleoptin-final-confirm" aria-expanded="false" data-toggle="collapse" href="#doubleoptin-final-confirm"> <?php echo smartyTranslate(array('s'=>'Send a final confirmation email','mod'=>'sendinblue'),$_smarty_tpl);?>
 </a>
        </div>
        <div class="clearfix"></div>
        <div style="padding-left: 10px;" id="doubleoptin-final-confirm" class="collapse">
          <p><?php echo smartyTranslate(array('s'=>'Once a contact has clicked in the double opt-in confirmation email, send them a final confirmation email','mod'=>'sendinblue'),$_smarty_tpl);?>
</p>
          <div style="text-align: left;" class="listData <?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
 managesubscribeBlock"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['temp_confirm']->value);?>
</div>
          <div class="clearfix"></div>
          <div class="pull-left" id="final-mail-templates"></div>
         <div class="clearfix"></div> 
        </div>
          <div style="padding-left: 20px;" id="doubleoptin-templates-active-state">
        <?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['smtp_alert']->value);?>

    </div>
    </div>

    </div>
    </div>
    <div class="clearfix"></div>
    </div>
        </td><td></td></tr><tr class="managesubscribeBlock"><td>&nbsp;</td>
        <td>
        <input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Update','mod'=>'sendinblue'),$_smarty_tpl);?>
" name="submitForm2">&nbsp;
        </td>
        </tr><tr class="managesubscribeBlock"><td>&nbsp;</td><td colspan="2">
        <?php if (isset($_smarty_tpl->tpl_vars['Sendin_import_user_status']->value)&&$_smarty_tpl->tpl_vars['Sendin_import_user_status']->value==1) {?>
        <input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Import Old Subscribers','mod'=>'sendinblue'),$_smarty_tpl);?>
" name="submitUpdateImport">&nbsp;
        <?php }?>
        </td>
        </form>
        </tr><tr class="managesubscribeBlock"><td class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" colspan="3"><?php echo smartyTranslate(array('s'=>'To synchronize the emails of your customers from SendinBlue platform to your e-commerce website, you should run','mod'=>'sendinblue'),$_smarty_tpl);?>

        <?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value);?>
 <?php echo smartyTranslate(array('s'=>'each day.','mod'=>'sendinblue'),$_smarty_tpl);?>

        <span title="<?php echo smartyTranslate(array('s'=>'Note that if you change the name of your Shop (currently','mod'=>'sendinblue'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['site_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>') the token value changes.','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="toolTip">&nbsp;</span>
        </td>
        </tr>
        </tbody>
        </table>

<?php }} ?>
