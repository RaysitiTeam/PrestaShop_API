<?php /* Smarty version Smarty-3.1.19, created on 2016-10-06 16:39:02
         compiled from "C:\xampp\htdocs\prestashop\modules\skrill\views\templates\admin\presentation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:911557f630cecf84d9-31186814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a79aa83b166031b11f00c1fe2429242f52fbee7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\skrill\\views\\templates\\admin\\presentation.tpl',
      1 => 1475752129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '911557f630cecf84d9-31186814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisPath' => 0,
    'presentation' => 0,
    'signUpUrl' => 0,
    'guideUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f630ceddb839_36337458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f630ceddb839_36337458')) {function content_57f630ceddb839_36337458($_smarty_tpl) {?>

<div class="panel panel-presentation">
	<div class="pres-header-group">
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-3 pres-header-logo">
			<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/skrill.png" alt="wlt" class="pres-logo">
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-6">
			<div class="pres-header-text"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['header'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="clear"></div>
	</div>
	<div class="pres-content-wrapper">
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-3 pres-content pres-content-img">
			<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/skrill_widget.png" alt="transaction-flow" class="pres-about-image">
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-6 pres-content pres-content-text">
			<span class="pres-title">ABOUT SKRILL</span>
			<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['text1'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['text2'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['signUpUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" class="pres-signup"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['signup']['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>.</p>
			<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['feature'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			<ul>
				<li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['feature1'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
				<li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['feature2'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
				<li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['feature3'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
				<li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['feature4'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
				<li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['about']['feature5'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
			</ul>
			<br />
			<p>
				<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['signUpUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" class="pres-btn-signup">
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['signup']['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</a>
			</p>
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="clear"></div>
	</div>
	<div class="pres-content-wrapper pres-content-bottom">
		<div class="col-lg-4 pres-content">
			<span class="step-title pres-firt-uppercase">
				<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['signUpUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" >
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['signup']['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</a>
			</span>
			<div class="pres-circle">
				<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['signUpUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" >
					<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/signup.png" alt="step-1" class="pres-step-image">
				</a>
			</div>
			<div class="clear"></div>
			<p class="step-text"><i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['signup']['text'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</i></p>
		</div>
		<div class="col-lg-4 pres-content">
			<span class="step-title pres-firt-uppercase"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['verify']['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
			<div class="pres-circle">
				<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/verify.png" alt="step-2" class="pres-step-image">
			</div>
			<div class="clear"></div>
			<p class="step-text"><i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['verify']['text'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</i></p>
		</div>
		<div class="col-lg-4 pres-content">
			<span class="step-title pres-firt-uppercase">
				<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['guideUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" >
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['guide']['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</a>
			</span>
			<div class="pres-circle">
				<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['guideUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" >
					<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['thisPath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/guide.png" alt="step-3" class="pres-step-image">
				</a>
			</div>
			<div class="clear"></div>
			<p class="step-text"><i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['presentation']->value['guide']['text'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</i></p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="panel-footer pres-footer">&nbsp;</div>
</div>
<div class="clear"></div><?php }} ?>
