<?php /* Smarty version Smarty-3.1.19, created on 2016-10-05 13:00:59
         compiled from "C:\xampp\htdocs\prestashop\admin401tqo2sa\themes\default\template\controllers\translations\helpers\view\translation_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:500857f4ac338c9c97-35751223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a48c03f5da635fb15ce8fc130a5686c4ea6f7e1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin401tqo2sa\\themes\\default\\template\\controllers\\translations\\helpers\\view\\translation_form.tpl',
      1 => 1473154512,
      2 => 'file',
    ),
    'd86538494106a98841c92fac8b75348292e8482e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin401tqo2sa\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1473154512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500857f4ac338c9c97-35751223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f4ac33a8b868_55760802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4ac33a8b868_55760802')) {function content_57f4ac33a8b868_55760802($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>

<div class="leadin"></div>


	<?php if ($_smarty_tpl->tpl_vars['mod_security_warning']->value) {?>
	<div class="alert alert-warning">
		<?php echo smartyTranslate(array('s'=>'Apache mod_security is activated on your server. This could result in some Bad Request errors'),$_smarty_tpl);?>

	</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="alert alert-warning">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type']=='suhosin') {?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>


			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.post.max_vars.'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.request.max_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase the Suhosin limit to'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>

			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for max_input_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase this limit to'),$_smarty_tpl);?>

		<?php }?>
		<?php echo smartyTranslate(array('s'=>'%s at least, or you will have to edit the translation files.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),$_smarty_tpl);?>

	</div>
	<?php } else { ?>

		<div class="alert alert-info">
			<p>
				<?php echo smartyTranslate(array('s'=>'Click on the title of a section to open its fieldsets.'),$_smarty_tpl);?>

			</p>
		</div>
		<div class="panel">
			<p><?php echo smartyTranslate(array('s'=>'Expressions to translate:'),$_smarty_tpl);?>
 <span class="badge"><?php echo smartyTranslate(array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['count']->value),$_smarty_tpl);?>
</span></p>
			<p><?php echo smartyTranslate(array('s'=>'Total missing expressions:'),$_smarty_tpl);?>
 <span class="badge"><?php echo smartyTranslate(array('s'=>'%d','sprintf'=>array_sum($_smarty_tpl->tpl_vars['missing_translations']->value)),$_smarty_tpl);?>
</p>
		</div>

		<form method="post" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-horizontal">
			<div class="panel">
				<input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
				<input type="hidden" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />

				<script type="text/javascript">
					$(document).ready(function(){
						$('a.useSpecialSyntax').click(function(){
							var syntax = $(this).find('img').attr('alt');
							$('#BoxUseSpecialSyntax .syntax span').html(syntax+".");
						});

						$("a.sidetoggle").click(function(){
							$('#'+$(this).attr('data-slidetoggle')).slideToggle();
							return false;
						});
					});
				</script>

				<div id="BoxUseSpecialSyntax">
					<div class="alert alert-warning">
						<p>
							<?php echo smartyTranslate(array('s'=>'Some of these expressions use this special syntax: %s.','sprintf'=>'%d'),$_smarty_tpl);?>

							<br />
							<?php echo smartyTranslate(array('s'=>'You MUST use this syntax in your translations. Here are several examples:'),$_smarty_tpl);?>

						</p>
						<ul>
							<li>"<?php echo smartyTranslate(array('s'=>'There are [1]%d[/1] products','tags'=>array('<strong>')),$_smarty_tpl);?>
": <?php echo smartyTranslate(array('s'=>'"%s" will be replaced by a number.','sprintf'=>'%d'),$_smarty_tpl);?>
</li>
							<li>"<?php echo smartyTranslate(array('s'=>'List of pages in [1]%s[/1]','tags'=>array('<strong>')),$_smarty_tpl);?>
": <?php echo smartyTranslate(array('s'=>'"%s" will be replaced by a string.','sprintf'=>'%s'),$_smarty_tpl);?>
</li>
							<li>"<?php echo smartyTranslate(array('s'=>'Feature: [1]%1$s[/1] ([1]%2$d[/1] values)','tags'=>array('<strong>')),$_smarty_tpl);?>
": <?php echo smartyTranslate(array('s'=>'The numbers enable you to reorder the variables when necessary.'),$_smarty_tpl);?>
</li>
						</ul>
					</div>
				</div>
				<div class="panel-footer">
					<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cancel_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
					<?php echo $_smarty_tpl->tpl_vars['toggle_button']->value;?>

					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
				</div>
			</div>
			<?php  $_smarty_tpl->tpl_vars['newLang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newLang']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newLang']->key => $_smarty_tpl->tpl_vars['newLang']->value) {
$_smarty_tpl->tpl_vars['newLang']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['newLang']->key;
?>
				<?php if (!empty($_smarty_tpl->tpl_vars['newLang']->value)) {?>
					<div class="panel">
						<h3>
							<a href="#" class="sidetoggle" data-slidetoggle="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-tpl">
								<i class="icon-caret-down"></i>
								<?php echo $_smarty_tpl->tpl_vars['k']->value;?>

							</a>
							- <?php echo count($_smarty_tpl->tpl_vars['newLang']->value);?>
 <?php echo smartyTranslate(array('s'=>'expressions'),$_smarty_tpl);?>

							<?php if (isset($_smarty_tpl->tpl_vars['missing_translations']->value[$_smarty_tpl->tpl_vars['k']->value])) {?> <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['missing_translations']->value[$_smarty_tpl->tpl_vars['k']->value];?>
 <?php echo smartyTranslate(array('s'=>'missing'),$_smarty_tpl);?>
</span><?php }?>
						</h3>
						<div name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_div" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-tpl" style="display:<?php if (isset($_smarty_tpl->tpl_vars['missing_translations']->value[$_smarty_tpl->tpl_vars['k']->value])) {?>block<?php } else { ?>none<?php }?>">
							<table class="table">
								<?php echo smarty_function_counter(array('start'=>0,'assign'=>'irow'),$_smarty_tpl);?>

								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newLang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php echo smarty_function_counter(array(),$_smarty_tpl);?>

									<tr>
										<td width="40%"><?php echo stripslashes($_smarty_tpl->tpl_vars['key']->value);?>
</td>
										<td width="2%">=</td>
										<td width="40%"> 
											<?php if (strlen($_smarty_tpl->tpl_vars['key']->value)<$_smarty_tpl->tpl_vars['textarea_sized']->value) {?>
												<input type="text" style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {?>;background:#FBB<?php }?>"
													name="<?php if (in_array($_smarty_tpl->tpl_vars['type']->value,array('front','fields'))) {?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
<?php }?>"
													value="<?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'/"/','&quot;'));?>
"' />
											<?php } else { ?>
												<textarea rows="<?php echo intval((strlen($_smarty_tpl->tpl_vars['key']->value)/$_smarty_tpl->tpl_vars['textarea_sized']->value));?>
" style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {?>;background:#FBB<?php }?>"
												name="<?php if (in_array($_smarty_tpl->tpl_vars['type']->value,array('front','fields'))) {?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
<?php }?>"
												><?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'/"/','&quot;'));?>
</textarea>
											<?php }?>
										</td>
										<td width="18%">
											<?php if (isset($_smarty_tpl->tpl_vars['value']->value['use_sprintf'])&&$_smarty_tpl->tpl_vars['value']->value['use_sprintf']) {?>
												<a class="useSpecialSyntax" title="<?php echo smartyTranslate(array('s'=>'This expression uses a special syntax:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
">
													<img src="<?php echo @constant('_PS_IMG_');?>
admin/error.png" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
" />
												</a>
											<?php }?>
										</td>
									</tr>
								<?php } ?>
							</table>
							<div class="panel-footer">
							<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cancel_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
							<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
							<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
						</div>
						</div>

					</div>
				<?php }?>
			<?php } ?>
		</form>
	<?php }?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
