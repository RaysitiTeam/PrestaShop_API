<?php /* Smarty version Smarty-3.1.19, created on 2016-10-05 12:59:37
         compiled from "C:\xampp\htdocs\prestashop\admin401tqo2sa\themes\default\template\controllers\translations\helpers\view\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2667957f4abe1144650-60416986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58f1de71321260b7172e005dd2b91293a1f427b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin401tqo2sa\\themes\\default\\template\\controllers\\translations\\helpers\\view\\main.tpl',
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
  'nocache_hash' => '2667957f4abe1144650-60416986',
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
  'unifunc' => 'content_57f4abe135a5c5_20103896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4abe135a5c5_20103896')) {function content_57f4abe135a5c5_20103896($_smarty_tpl) {?>

<div class="leadin"></div>


	<script type="text/javascript">
		function chooseTypeTranslation(id_lang)
		{
			getE('translation_lang').value = id_lang;
			document.getElementById('typeTranslationForm').submit();
		}

		function addThemeSelect()
		{
			var list_type_for_theme = ['front', 'modules', 'pdf', 'mails'];
			var type = $('select[name=type]').val();

			$('select[name=theme]').hide();
			for (i=0; i < list_type_for_theme.length; i++)
				if (list_type_for_theme[i] == type)
				{
					$('select[name=theme]').show();
					if (type == 'front')
						$('select[name=theme]').children('option[value=""]').attr('disabled', true)
					else
						$('select[name=theme]').children('option[value=""]').attr('disabled', false)
				}
				else
					$('select[name=theme]').val('<?php echo $_smarty_tpl->tpl_vars['theme_default']->value;?>
');
		}

		$(document).ready(function(){
			addThemeSelect();
			$('select[name=type]').change(function() {
				addThemeSelect();
			});

			$('#translations-languages a').click(function(e) {
				e.preventDefault();
				$(this).parent().addClass('active').siblings().removeClass('active');
				$('#language-button').html($(this).html()+' <span class="caret"></span>');
			});

			$('#modify-translations').click(function(e) {
				var lang = $('#translations-languages li.active').data('type');

				if (lang == null)
					return !alert('<?php echo smartyTranslate(array('s'=>'Please select your language!'),$_smarty_tpl);?>
');

				chooseTypeTranslation($('#translations-languages li.active').data('type'));
			});
		});
	</script>
	<form method="get" action="index.php" id="typeTranslationForm" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-file-text"></i>
				<?php echo smartyTranslate(array('s'=>'Modify translations'),$_smarty_tpl);?>

			</h3>
			<p class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'Here you can modify translations for every line of text inside PrestaShop.'),$_smarty_tpl);?>
<br />
				<?php echo smartyTranslate(array('s'=>'First, select a type of translation (such as "Back office" or "Installed modules"), and then select the language you want to translate strings in.'),$_smarty_tpl);?>

			</p>
			<div class="form-group">
				<input type="hidden" name="controller" value="AdminTranslations" />
				<input type="hidden" name="lang" id="translation_lang" value="0" />
				<label class="control-label col-lg-3" for="type"><?php echo smartyTranslate(array('s'=>'Type of translation'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="type" id="type">
						<?php  $_smarty_tpl->tpl_vars['array'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['array']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['translations_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['array']->key => $_smarty_tpl->tpl_vars['array']->value) {
$_smarty_tpl->tpl_vars['array']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['array']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['array']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="theme"><?php echo smartyTranslate(array('s'=>'Select your theme'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="theme" id="theme">
						<?php if (!$_smarty_tpl->tpl_vars['host_mode']->value) {?>
						<option value=""><?php echo smartyTranslate(array('s'=>'Core (no theme selected)'),$_smarty_tpl);?>
</option>
						<?php }?>
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
" <?php if ($_smarty_tpl->tpl_vars['id_theme_current']->value==$_smarty_tpl->tpl_vars['theme']->value->id) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="language-button"><?php echo smartyTranslate(array('s'=>'Select your language'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<button type="button" id="language-button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo smartyTranslate(array('s'=>'Language'),$_smarty_tpl);?>
 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" id="translations-languages">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						<li data-type="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						<?php } ?>
					</ul>
				</div>
				<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			</div>
			<div class="panel-footer">
				<button type="button" class="btn btn-default pull-right" id="modify-translations">
					<i class="process-icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Modify'),$_smarty_tpl);?>

				</button>
			</div>
		</div>
	</form>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-download"></i>
				<?php echo smartyTranslate(array('s'=>'Add / Update a language'),$_smarty_tpl);?>

			</h3>
			<div id="submitAddLangContent" class="form-group">
				<p class="alert alert-info">
					<?php echo smartyTranslate(array('s'=>'You can add or update a language directly from the PrestaShop website here.'),$_smarty_tpl);?>
<br/>
					<?php echo smartyTranslate(array('s'=>'If you choose to update an existing language pack, all of your previous customizations in the theme named "Default-bootstrap" will be lost. This includes front office expressions and default email templates.'),$_smarty_tpl);?>

				</p>
				<?php if ($_smarty_tpl->tpl_vars['packs_to_update']->value||$_smarty_tpl->tpl_vars['packs_to_install']->value) {?>
					<label class="control-label col-lg-3" for="params_import_language"><?php echo smartyTranslate(array('s'=>'Please select the language you want to add or update'),$_smarty_tpl);?>
</label>
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-6">
								<select id="params_import_language" name="params_import_language" class="chosen">
								<optgroup label="<?php echo smartyTranslate(array('s'=>'Update a language'),$_smarty_tpl);?>
">
									<?php  $_smarty_tpl->tpl_vars['lang_pack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang_pack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packs_to_update']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang_pack']->key => $_smarty_tpl->tpl_vars['lang_pack']->value) {
$_smarty_tpl->tpl_vars['lang_pack']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['lang_pack']->value['iso_code'];?>
|<?php echo $_smarty_tpl->tpl_vars['lang_pack']->value['version'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang_pack']->value['name'];?>
</option>
									<?php } ?>
								</optgroup>
								<optgroup label="<?php echo smartyTranslate(array('s'=>'Add a language'),$_smarty_tpl);?>
">
									<?php  $_smarty_tpl->tpl_vars['lang_pack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang_pack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packs_to_install']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang_pack']->key => $_smarty_tpl->tpl_vars['lang_pack']->value) {
$_smarty_tpl->tpl_vars['lang_pack']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['lang_pack']->value['iso_code'];?>
|<?php echo $_smarty_tpl->tpl_vars['lang_pack']->value['version'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang_pack']->value['name'];?>
</option>
									<?php } ?>
								</optgroup>
							</select>
							</div>
						</div>
					</div>

				<?php } else { ?>
					<p class="text-danger"><?php echo smartyTranslate(array('s'=>'Cannot connect to the PrestaShop website to get the language list.'),$_smarty_tpl);?>
</p>
				<?php }?>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitAddLanguage" class="btn btn-default pull-right">
					<i class="process-icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Add or update a language'),$_smarty_tpl);?>

				</button>
			</div>
		</div>
	</form>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-download"></i>
				<?php echo smartyTranslate(array('s'=>'Import a language pack manually'),$_smarty_tpl);?>

			</h3>
			<p class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'If the language file format is ISO_code.gzip (e.g. "us.gzip"), and the language corresponding to this package does not exist, it will automatically be created.'),$_smarty_tpl);?>

				<?php echo smartyTranslate(array('s'=>'Warning: This will replace all of the existing data inside the destination language.'),$_smarty_tpl);?>

			</p>
			<div class="form-group">
				<label for="importLanguage" class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Language pack to import'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<div class="form-group">
						<div class="col-lg-12">
							<input id="importLanguage" type="file" name="file" class="hide" />
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input id="file-name" type="text" class="disabled" name="filename" readonly />
								<span class="input-group-btn">
									<button id="file-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
										<i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Add file'),$_smarty_tpl);?>

									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="selectThemeForImport" class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Select your theme'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="theme[]" id="selectThemeForImport" <?php if (count($_smarty_tpl->tpl_vars['themes']->value)>1) {?>multiple="multiple"<?php }?> >
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
 &nbsp;</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitImport" class="btn btn-default pull-right"><i class="process-icon-upload"></i> <?php echo smartyTranslate(array('s'=>'Import'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-upload"></i>
				<?php echo smartyTranslate(array('s'=>'Export a language'),$_smarty_tpl);?>

			</h3>
			<p class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'Export data from one language to a file (language pack).'),$_smarty_tpl);?>
<br />
				<?php echo smartyTranslate(array('s'=>'Select which theme you would like to export your translations to.'),$_smarty_tpl);?>

			</p>
			<div class="form-group">
				<label class="control-label col-lg-3" for="iso_code"><?php echo smartyTranslate(array('s'=>'Language'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="iso_code" id="iso_code">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="export-theme"><?php echo smartyTranslate(array('s'=>'Select your theme'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="theme" id="export-theme">
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
" <?php if ($_smarty_tpl->tpl_vars['id_theme_current']->value==$_smarty_tpl->tpl_vars['theme']->value->id) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitExport" class="btn btn-default pull-right"><i class="process-icon-download"></i> <?php echo smartyTranslate(array('s'=>'Export'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-copy"></i>
				<?php echo smartyTranslate(array('s'=>'Copy'),$_smarty_tpl);?>

			</h3>
			<p class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'Copies data from one language to another.'),$_smarty_tpl);?>
<br />
				<?php echo smartyTranslate(array('s'=>'Warning: This will replace all of the existing data inside the destination language.'),$_smarty_tpl);?>
<br />
				<?php echo smartyTranslate(array('s'=>'If necessary'),$_smarty_tpl);?>
, <b><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_create_language']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-link"><i class="icon-external-link-sign"></i> <?php echo smartyTranslate(array('s'=>'you must first create a new language.'),$_smarty_tpl);?>
</a></b>.
			</p>
			<div class="form-group">
				<label class="control-label col-lg-3 required" for="fromLang"> <?php echo smartyTranslate(array('s'=>'From'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="fromLang" id="fromLang">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-lg-4">
					<select name="fromTheme">
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
" <?php if ($_smarty_tpl->tpl_vars['id_theme_current']->value==$_smarty_tpl->tpl_vars['theme']->value->id) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="toLang"><?php echo smartyTranslate(array('s'=>'To'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="toLang" id="toLang">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-lg-4">
					<select name="toTheme">
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
" <?php if ($_smarty_tpl->tpl_vars['id_theme_current']->value==$_smarty_tpl->tpl_vars['theme']->value->id) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<p class="col-lg-12 text-muted required">
					<span class="text-danger">*</span>
					<?php echo smartyTranslate(array('s'=>'Language files must be complete to allow copying of translations.'),$_smarty_tpl);?>

				</p>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitCopyLang" class="btn btn-default pull-right"><i class="process-icon-duplicate"></i> <?php echo smartyTranslate(array('s'=>'Copy'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>
<script type="text/javascript">
	$(document).ready(function(){
		$('#file-selectbutton').click(function(e) {
			$('#importLanguage').trigger('click');
		});

		$('#file-name').click(function(e) {
			$('#importLanguage').trigger('click');
		});

		$('#importLanguage').change(function(e) {
			if ($(this)[0].files !== undefined)
			{
				var files = $(this)[0].files;
				var name  = '';

				$.each(files, function(index, value) {
					name += value.name+', ';
				});

				$('#file-name').val(name.slice(0, -2));
			}
			else // Internet Explorer 9 Compatibility
			{
				var name = $(this).val().split(/[\\/]/);
				$('#file-name').val(name[name.length-1]);
			}
		});
	});
</script>


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
