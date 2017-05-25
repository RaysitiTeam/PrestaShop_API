<?php /* Smarty version Smarty-3.1.19, created on 2016-10-06 16:39:02
         compiled from "C:\xampp\htdocs\prestashop\modules\skrill\views\templates\admin\paymentConfiguration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:492057f630ceecd1c5-88641702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ba49ef934145a1d6426a93ee1f04e632bcced47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\skrill\\views\\templates\\admin\\paymentConfiguration.tpl',
      1 => 1475752129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '492057f630ceecd1c5-88641702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentIndex' => 0,
    'thisPath' => 0,
    'payments' => 0,
    'label' => 0,
    'button' => 0,
    'sort' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f630cf0a28f7_96040313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f630cf0a28f7_96040313')) {function content_57f630cf0a28f7_96040313($_smarty_tpl) {?>

<form id="module_form" class="defaultForm form-horizontal" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" enctype="multipart/form-data">
<div class="panel">
	<div class="form-group border-none">
		<div class="col-lg-2 logo-wrapper">
			<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.png" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="payment-config-logo">
		</div>
		<label class="payment-label col-lg-3">
			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		</label>
		<div class="col-lg-3">
			<div class="col-lg-4 control-label switch-label"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['label']->value['active'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
			<div class="col-lg-6 switch prestashop-switch fixed-width-lg">
				<input type="radio" name="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE" id="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_on" value="1"  <?php if (($_smarty_tpl->tpl_vars['payments']->value[0]['active']==1)) {?>checked="checked"<?php }?>">
				<label for="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_on"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['yes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
				<input type="radio" name="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE" id="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_off" value="0" <?php if (empty($_smarty_tpl->tpl_vars['payments']->value[0]['active'])) {?>checked="checked"<?php }?>>
				<label for="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_off"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['no'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
				<a class="slide-button btn"></a>
			</div>
		</div>
		<div class="col-lg-4">
			<label class="general-tooltip">
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payments']->value[0]['tooltips'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

			</label>
		</div>
		<div style="clear: both"></div>
	</div>
	<div style="clear: both"></div>
</div>
<div class="panel">
		<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['payment']->key;
?>
			<?php if (($_smarty_tpl->tpl_vars['sort']->value!=0)) {?>
			<div class="form-group">
				<div class="col-lg-2 logo-wrapper">
					<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.png" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="payment-config-logo">
				</div>
				<label class="payment-label col-lg-3">
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<?php if (!empty($_smarty_tpl->tpl_vars['payment']->value['tooltips'])) {?>
						<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/questionmark.png" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-toggle="tooltip" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['tooltips'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="payment-config-tooltip">
					<?php }?>
				</label>
				<div class="col-lg-3">
					<div class="col-lg-4 control-label switch-label"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['label']->value['active'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
					<div class="col-lg-6 switch prestashop-switch fixed-width-lg">
						<input type="radio" name="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE" id="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_on" value="1" <?php if (($_smarty_tpl->tpl_vars['payment']->value['active']==1)) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_on"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['yes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
						<input type="radio" name="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE" id="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_off" value="0" <?php if (empty($_smarty_tpl->tpl_vars['payment']->value['active'])) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_ACTIVE_off"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['no'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
						<a class="slide-button btn"></a>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="col-lg-4 control-label switch-label"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['label']->value['mode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
					<div class="col-lg-6 switch prestashop-switch fixed-width-lg">
						<input type="radio" name="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_MODE" id="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_MODE_on" value="1" <?php if (($_smarty_tpl->tpl_vars['payment']->value['mode']==1)) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_MODE_on"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['yes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
						<input type="radio" name="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_MODE" id="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_MODE_off" value="0" <?php if (empty($_smarty_tpl->tpl_vars['payment']->value['mode'])) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['brand'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_MODE_off"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['no'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
						<a class="slide-button btn"></a>
					</div>
				</div>
				<div style="clear: both"></div>
			</div>
			<div style="clear: both"></div>
			<?php }?>
		<?php } ?>

	<div class="panel-footer">
		<button type="submit" value="1" name="btnSubmitPaymentConfig" class="btn btn-default pull-right">
			<i class="process-icon-save"></i> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['save'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		</button>
	</div>

</div>
</form>
<?php }} ?>
