<?php /* Smarty version Smarty-3.1.19, created on 2016-10-17 17:46:14
         compiled from "/home/karnarui/public_html/zenstudents/modules/blocklayered/views/templates/admin/add_1.6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10892347025804c10eb0c7f7-75533106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dba75a1b2e1b13979a0b336b095aea7d6601f68' => 
    array (
      0 => '/home/karnarui/public_html/zenstudents/modules/blocklayered/views/templates/admin/add_1.6.tpl',
      1 => 1476353953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10892347025804c10eb0c7f7-75533106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'current_url' => 0,
    'id_layered_filter' => 0,
    'template_name' => 0,
    'categories_tree' => 0,
    'asso_shops' => 0,
    'total_filters' => 0,
    'attribute_groups' => 0,
    'attribute_group' => 0,
    'features' => 0,
    'feature' => 0,
    'filters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5804c10ec8d4e6_86340870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804c10ec8d4e6_86340870')) {function content_5804c10ec8d4e6_86340870($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }?>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'New filters template','mod'=>'blocklayered'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal" onsubmit="return checkForm();">
		<input type="hidden" name="id_layered_filter" id="id_layered_filter" value="<?php echo $_smarty_tpl->tpl_vars['id_layered_filter']->value;?>
" />
		<div class="form-group">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Template name:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<input type="text" id="layered_tpl_name" name="layered_tpl_name" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" />
				<p class="help-block"><?php echo smartyTranslate(array('s'=>'Only as a reminder','mod'=>'blocklayered'),$_smarty_tpl);?>
</p>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Categories used for this template:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<?php if (trim($_smarty_tpl->tpl_vars['categories_tree']->value)!='') {?>
					<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

				<?php } else { ?>
					<div class="alert alert-warning">
						<?php echo smartyTranslate(array('s'=>'Categories selection is disabled because you have no categories or you are in a "all shops" context.','mod'=>'blocklayered'),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['asso_shops']->value)) {?>
		<div class="form-group">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Choose shop association:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
		</div>
		<?php }?>
		<div class="form-group">
			<label class="control-label col-lg-3">
				<span class="badge" id="selected_filters">0</span>
				<span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can drag and drop filters to adjust position','mod'=>'blocklayered'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Filters:','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
			</label>
			<div class="col-lg-9">
				<section class="filter_panel">
					<header class="clearfix">
						<span class="badge pull-right"><?php echo smartyTranslate(array('s'=>sprintf('Total filters: %s',$_smarty_tpl->tpl_vars['total_filters']->value),'mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
					</header>
					<section class="filter_list">
						<ul class="list-unstyled sortable">
							<li class="filter_list_item" draggable="true">
								<div class="col-lg-2">
									<label class="switch-light prestashop-switch fixed-width-lg">
										<input name="layered_selection_subcategories" id="layered_selection_subcategories" type="checkbox" />
										<span>
											<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
										</span>
										<a class="slide-button btn"></a>
									</label>
								</div>
								<div class="col-lg-4">
									<h4><?php echo smartyTranslate(array('s'=>'Sub-categories filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</h4>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_subcategories_filter_show_limit">
											<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="10">10</option>
											<option value="20">20</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_subcategories_filter_type">
											<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
										</select>
									</div>
								</div>
							</li>
							<li class="filter_list_item" draggable="true">
								<div class="col-lg-2">
									<label class="switch-light prestashop-switch fixed-width-lg">
										<input name="layered_selection_stock" id="layered_selection_stock" type="checkbox" />
										<span>
											<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
										</span>
										<a class="slide-button btn"></a>
									</label>
								</div>
								<div class="col-lg-4">
									<span class="module_name"><?php echo smartyTranslate(array('s'=>'Product stock filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_stock_filter_show_limit">
											<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="10">10</option>
											<option value="20">20</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_stock_filter_type">
											<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
										</select>
									</div>
								</div>
							</li>
							<li class="filter_list_item" draggable="true">
								<div class="col-lg-2">
									<label class="switch-light prestashop-switch fixed-width-lg">
										<input name="layered_selection_condition" id="layered_selection_condition" type="checkbox" />
										<span>
											<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
										</span>
										<a class="slide-button btn"></a>
									</label>
								</div>
								<div class="col-lg-4">
									<span class="module_name"><?php echo smartyTranslate(array('s'=>'Product condition filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_condition_filter_show_limit">
											<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="10">10</option>
											<option value="20">20</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_condition_filter_type">
											<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
										</select>
									</div>
								</div>
							</li>
							<li class="filter_list_item" draggable="true">
								<div class="col-lg-2">
									<label class="switch-light prestashop-switch fixed-width-lg">
										<input name="layered_selection_manufacturer" id="layered_selection_manufacturer" type="checkbox" />
										<span>
											<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
										</span>
										<a class="slide-button btn"></a>
									</label>
								</div>
								<div class="col-lg-4">
									<span class="module_name"><?php echo smartyTranslate(array('s'=>'Product manufacturer filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_manufacturer_filter_show_limit">
											<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="10">10</option>
											<option value="20">20</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_manufacturer_filter_type">
											<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
										</select>
									</div>
								</div>
							</li>
							<li class="filter_list_item" draggable="true">
								<div class="col-lg-2">
									<label class="switch-light prestashop-switch fixed-width-lg">
										<input name="layered_selection_weight_slider" id="layered_selection_weight_slider" type="checkbox" />
										<span>
											<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
										</span>
										<a class="slide-button btn"></a>
									</label>
								</div>
								<div class="col-lg-4">
									<span class="module_name"><?php echo smartyTranslate(array('s'=>'Product weight filter (slider)','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_weight_slider_filter_show_limit">
											<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="10">10</option>
											<option value="20">20</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_weight_slider_filter_type">
											<option value="0"><?php echo smartyTranslate(array('s'=>'Slider','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="1"><?php echo smartyTranslate(array('s'=>'Inputs area','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="2"><?php echo smartyTranslate(array('s'=>'List of values','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
										</select>
									</div>
								</div>
							</li>
							<li class="filter_list_item" draggable="true">
								<div class="col-lg-2">
									<label class="switch-light prestashop-switch fixed-width-lg">
										<input name="layered_selection_price_slider" id="layered_selection_price_slider" type="checkbox" />
										<span>
											<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
										</span>
										<a class="slide-button btn"></a>
									</label>
								</div>
								<div class="col-lg-4">
									<span class="module_name"><?php echo smartyTranslate(array('s'=>'Product price filter (slider)','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_price_slider_filter_show_limit">
											<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="10">10</option>
											<option value="20">20</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 pull-right">
									<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
									<div class="col-lg-6">
										<select name="layered_selection_price_slider_filter_type">
											<option value="0"><?php echo smartyTranslate(array('s'=>'Slider','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="1"><?php echo smartyTranslate(array('s'=>'Inputs area','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											<option value="2"><?php echo smartyTranslate(array('s'=>'List of values','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
										</select>
									</div>
								</div>
							</li>
							<?php if (count($_smarty_tpl->tpl_vars['attribute_groups']->value)>0) {?>
								<?php  $_smarty_tpl->tpl_vars['attribute_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attribute_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute_group']->key => $_smarty_tpl->tpl_vars['attribute_group']->value) {
$_smarty_tpl->tpl_vars['attribute_group']->_loop = true;
?>
								<li class="filter_list_item" draggable="true">
									<div class="col-lg-2">
										<label class="switch-light prestashop-switch fixed-width-lg">
											<input name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" id="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" type="checkbox" />
											<span>
												<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
												<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											</span>
											<a class="slide-button btn"></a>
										</label>
									</div>
									<div class="col-lg-4">
										<span class="module_name">
										<?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['n']>1) {?>
											<?php echo smartyTranslate(array('s'=>sprintf('Attribute group: %1$s (%2$d attributes)',$_smarty_tpl->tpl_vars['attribute_group']->value['name'],$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>

										<?php } else { ?>
											<?php echo smartyTranslate(array('s'=>sprintf('Attribute group: %1$s (%2$d attribute)',$_smarty_tpl->tpl_vars['attribute_group']->value['name'],$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>

										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['is_color_group']) {?>
											<img src="../img/admin/color_swatch.png" alt="" title="<?php echo smartyTranslate(array('s'=>'This group will allow user to select a color','mod'=>'blocklayered'),$_smarty_tpl);?>
" />
										<?php }?>
										</span>
									</div>
									<div class="col-lg-3 pull-right">
										<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
										<div class="col-lg-6">
											<select name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
_filter_show_limit">
												<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="10">10</option>
												<option value="20">20</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 pull-right">
										<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
										<div class="col-lg-6">
											<select name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
_filter_type">
												<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
												<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
												<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											</select>
										</div>
									</div>
								</li>
								<?php } ?>
							<?php }?>

							<?php if (count($_smarty_tpl->tpl_vars['features']->value)>0) {?>
								<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
								<li class="filter_list_item" draggable="true">
									<div class="col-lg-2">
										<label class="switch-light prestashop-switch fixed-width-lg">
											<input name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" id="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" type="checkbox" />
											<span>
												<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
												<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
											</span>
											<a class="slide-button btn"></a>
										</label>
									</div>
									<div class="col-lg-4">
										<span class="module_name">
									<?php if ($_smarty_tpl->tpl_vars['feature']->value['n']>1) {?><?php echo smartyTranslate(array('s'=>sprintf('Feature: %1$s (%2$d values)',$_smarty_tpl->tpl_vars['feature']->value['name'],$_smarty_tpl->tpl_vars['feature']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>sprintf('Feature: %1$s (%2$d value)',$_smarty_tpl->tpl_vars['feature']->value['name'],$_smarty_tpl->tpl_vars['feature']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>
<?php }?>
										</span>
									</div>
									<div class="col-lg-3 pull-right">
										<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
										<div class="col-lg-6">
											<select name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
_filter_show_limit">
												<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="10">10</option>
												<option value="20">20</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 pull-right">
										<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
										<div class="col-lg-6">
											<select name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
_filter_type">
												<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
												<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
												<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
											</select>
										</div>
									</div>
								</li>
								<?php } ?>
							<?php }?>
						</ul>
					</section>
				</section>
			</div>
		</div>
		<div class="panel-footer" id="toolbar-footer">
			<button class="btn btn-default pull-right" id="submit-filter" name="SubmitFilter" type="submit"><i class="process-icon-save"></i> <span><?php echo smartyTranslate(array('s'=>'Save','mod'=>'blocklayered'),$_smarty_tpl);?>
</span></button>
			<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">
				<i class="process-icon-cancel"></i> <span><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
			</a>
		</div>
	</form>
</div>

<script type="text/javascript">
	var translations = new Array();
	<?php if (isset($_smarty_tpl->tpl_vars['filters']->value)) {?>var filters = '<?php echo $_smarty_tpl->tpl_vars['filters']->value;?>
';<?php }?>
	translations['no_selected_categories'] = '<?php echo smartyTranslate(array('s'=>addslashes('You must select at least one category'),'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['no_selected_filters'] = '<?php echo smartyTranslate(array('s'=>addslashes('You must select at least one filter'),'mod'=>'blocklayered'),$_smarty_tpl);?>
';
</script>
<?php }} ?>
