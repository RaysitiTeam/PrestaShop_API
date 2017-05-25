<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 14:08:45
         compiled from "C:\xampp\htdocs\prestashop\themes\default-bootstrap\order-carrier-opc-advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1369757f39bcd980a62-78486936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf4b90f0712410e344e4a4dd895b5f1c92f1d1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\order-carrier-opc-advanced.tpl',
      1 => 1473154514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1369757f39bcd980a62-78486936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'virtual_cart' => 0,
    'carriers' => 0,
    'HOOK_BEFORECARRIER' => 0,
    'isVirtualCart' => 0,
    'delivery_option_list' => 0,
    'id_address' => 0,
    'address_collection' => 0,
    'option_list' => 0,
    'option' => 0,
    'key' => 0,
    'delivery_option' => 0,
    'carrier' => 0,
    'cookie' => 0,
    'free_shipping' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'display_tax_label' => 0,
    'first' => 0,
    'product' => 0,
    'HOOK_EXTRACARRIER_ADDR' => 0,
    'errors' => 0,
    'cart' => 0,
    'address' => 0,
    'error' => 0,
    'flag_error_message' => 0,
    'opc' => 0,
    'oldMessage' => 0,
    'recyclablePackAllowed' => 0,
    'recyclable' => 0,
    'giftAllowed' => 0,
    'gift_wrapping_price' => 0,
    'total_wrapping_tax_exc_cost' => 0,
    'total_wrapping_cost' => 0,
    'conditions' => 0,
    'cms_id' => 0,
    'advanced_payment_api' => 0,
    'override_tos_display' => 0,
    'checkedTOS' => 0,
    'link_conditions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f39bcee7b655_98570661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f39bcee7b655_98570661')) {function content_57f39bcee7b655_98570661($_smarty_tpl) {?>
<div class="order_carrier_content box">
    <?php if (isset($_smarty_tpl->tpl_vars['virtual_cart']->value)&&$_smarty_tpl->tpl_vars['virtual_cart']->value) {?>
        <input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
    <?php } else { ?>
        <div id="HOOK_BEFORECARRIER">
            <?php if (isset($_smarty_tpl->tpl_vars['carriers']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value;?>

            <?php }?>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)&&$_smarty_tpl->tpl_vars['isVirtualCart']->value) {?>
            <p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No carrier is needed for this order.'),$_smarty_tpl);?>
</p>
        <?php } else { ?>
            <div class="delivery_options_address">
                <?php if (isset($_smarty_tpl->tpl_vars['delivery_option_list']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['option_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_list']->_loop = false;
 $_smarty_tpl->tpl_vars['id_address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_list']->key => $_smarty_tpl->tpl_vars['option_list']->value) {
$_smarty_tpl->tpl_vars['option_list']->_loop = true;
 $_smarty_tpl->tpl_vars['id_address']->value = $_smarty_tpl->tpl_vars['option_list']->key;
?>
                        <p class="carrier_title">
                            <?php if (isset($_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value])) {?>
                                <?php echo smartyTranslate(array('s'=>'Choose a shipping option for this address:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value]->alias;?>

                            <?php } else { ?>
                                <?php echo smartyTranslate(array('s'=>'Choose a shipping option'),$_smarty_tpl);?>

                            <?php }?>
                        </p>
                        <div class="delivery_options">
                            <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
                                <div class="delivery_option <?php if (($_smarty_tpl->tpl_vars['option']->index%2)) {?>alternate_<?php }?>item">
                                    <div>
                                        <table class="resume table table-bordered<?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> hide<?php }?>">
                                            <tr>
                                                <td class="delivery_option_radio">
                                                    <input id="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" class="delivery_option_radio" type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id_address="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value) {?> checked="checked"<?php }?> />
                                                </td>
                                                <td class="delivery_option_logo">
                                                    <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                                                            <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                                                        <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                            <?php if (!$_smarty_tpl->tpl_vars['carrier']->last) {?> - <?php }?>
                                                        <?php }?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                        <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>
                                                            <strong><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong>
                                                        <?php } ?>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>
                                                            <br /><?php echo smartyTranslate(array('s'=>'Delivery time:'),$_smarty_tpl);?>
&nbsp;<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                        <?php }?>
                                                    <?php }?>
                                                    <?php if (count($_smarty_tpl->tpl_vars['option_list']->value)>1) {?>
                                                        <br />
                                                        <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_grade']) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
                                                                <span class="best_grade best_grade_price best_grade_speed"><?php echo smartyTranslate(array('s'=>'The best price and speed'),$_smarty_tpl);?>
</span>
                                                            <?php } else { ?>
                                                                <span class="best_grade best_grade_speed"><?php echo smartyTranslate(array('s'=>'The fastest'),$_smarty_tpl);?>
</span>
                                                            <?php }?>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
                                                            <span class="best_grade best_grade_price"><?php echo smartyTranslate(array('s'=>'The best price'),$_smarty_tpl);?>
</span>
                                                        <?php }?>
                                                    <?php }?>
                                                </td>
                                                <td class="delivery_option_price">
                                                    <div class="delivery_option_price">
                                                        <?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']&&!$_smarty_tpl->tpl_vars['option']->value['is_free']&&(!isset($_smarty_tpl->tpl_vars['free_shipping']->value)||(isset($_smarty_tpl->tpl_vars['free_shipping']->value)&&!$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
                                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }?>
                                                                <?php } else { ?>
                                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>
                                                                <?php }?>
                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>

                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php echo smartyTranslate(array('s'=>'Free'),$_smarty_tpl);?>

                                                        <?php }?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                            <table class="delivery_option_carrier<?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?> resume table table-bordered<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> hide<?php }?>">
                                                <tr>
                                                    <?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                        <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['option']->value['carrier_list']);?>
" class="delivery_option_radio first_item">
                                                            <input id="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" class="delivery_option_radio" type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id_address="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value) {?> checked="checked"<?php }?> />
                                                        </td>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["first"] = new Smarty_variable(current($_smarty_tpl->tpl_vars['option']->value['carrier_list']), null, 0);?>
                                                    <td class="delivery_option_logo<?php if ($_smarty_tpl->tpl_vars['first']->value['product_list'][0]['carrier_list'][0]==0) {?> hide<?php }?>">
                                                        <?php if ($_smarty_tpl->tpl_vars['first']->value['logo']) {?>
                                                            <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                                                        <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                        <?php }?>
                                                    </td>
                                                    <td class="<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>first_item<?php }?><?php if ($_smarty_tpl->tpl_vars['first']->value['product_list'][0]['carrier_list'][0]==0) {?> hide<?php }?>">
                                                        <input type="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['first']->value['instance']->id);?>
" name="id_carrier" />
                                                        <?php if (isset($_smarty_tpl->tpl_vars['first']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>
                                                            <i class="icon-info-sign"></i>
                                                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&nbsp;<?php if (count($_smarty_tpl->tpl_vars['first']->value['product_list'])<=1) {?>(<?php echo smartyTranslate(array('s'=>'For this product:'),$_smarty_tpl);?>
<?php } else { ?>(<?php echo smartyTranslate(array('s'=>'For these products:'),$_smarty_tpl);?>
<?php }?>
                                                            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first']->value['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->index==4) {?>
                                                                    <acronym title="
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->index>=4) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>">&hellip;</acronym>)<?php }?><?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>)<?php }?><?php }?>
                                                            <?php } ?>
                                                        <?php }?>
                                                    </td>
                                                    <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['option']->value['carrier_list']);?>
" class="delivery_option_price">
                                                        <div class="delivery_option_price">
                                                            <?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']&&!$_smarty_tpl->tpl_vars['option']->value['is_free']&&(!isset($_smarty_tpl->tpl_vars['free_shipping']->value)||(isset($_smarty_tpl->tpl_vars['free_shipping']->value)&&!$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
                                                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }?>
                                                                    <?php } else { ?>
                                                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>

                                                                <?php }?>
                                                            <?php } else { ?>
                                                                <?php echo smartyTranslate(array('s'=>'Free'),$_smarty_tpl);?>

                                                            <?php }?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['carrier']->iteration!=1) {?>
                                                        <tr>
                                                            <td class="delivery_option_logo<?php if ($_smarty_tpl->tpl_vars['carrier']->value['product_list'][0]['carrier_list'][0]==0) {?> hide<?php }?>">
                                                                <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                                                                    <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                                                                <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                                    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                                <?php }?>
                                                            </td>
                                                            <td class="<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> first_item<?php }?><?php if ($_smarty_tpl->tpl_vars['carrier']->value['product_list'][0]['carrier_list'][0]==0) {?> hide<?php }?>">
                                                                <input type="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['first']->value['instance']->id);?>
" name="id_carrier" />
                                                                <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>
                                                                    <i class="icon-info-sign"></i>
                                                                    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&nbsp;<?php if (count($_smarty_tpl->tpl_vars['first']->value['product_list'])<=1) {?>(<?php echo smartyTranslate(array('s'=>'For this product:'),$_smarty_tpl);?>
<?php } else { ?>(<?php echo smartyTranslate(array('s'=>'For these products:'),$_smarty_tpl);?>
<?php }?>
                                                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrier']->value['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['product']->index==4) {?>
                                                                            <acronym title="
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['product']->index>=4) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>">&hellip;</acronym>)<?php }?><?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>)<?php }?><?php }?>
                                                                    <?php } ?>
                                                                <?php }?>
                                                            </td>
                                                        </tr>
                                                    <?php }?>
                                                <?php } ?>
                                            </table>
                                        <?php }?>
                                    </div>
                                </div> <!-- end delivery_option -->
                            <?php } ?>
                        </div> <!-- end delivery_options -->
                        <div class="hook_extracarrier" id="HOOK_EXTRACARRIER_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value])) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value];?>
<?php }?>
                        </div>
                        <?php }
if (!$_smarty_tpl->tpl_vars['option_list']->_loop) {
?>
                        <?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable(explode(' ',''), null, 0);?>
                        <p class="alert alert-warning" id="noCarrierWarning">
                            <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->getDeliveryAddressesWithoutCarriers(true,$_smarty_tpl->tpl_vars['errors']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['address']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['address']->iteration++;
 $_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
?>
                                <?php if (empty($_smarty_tpl->tpl_vars['address']->value->alias)) {?>
                                    <?php echo smartyTranslate(array('s'=>'No carriers available.'),$_smarty_tpl);?>

                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['flag_error_message'] = new Smarty_variable(false, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['error']->value==Carrier::SHIPPING_WEIGHT_EXCEPTION) {?>
                                            <?php $_smarty_tpl->tpl_vars['flag_error_message'] = new Smarty_variable(true, null, 0);?>
                                            <?php echo smartyTranslate(array('s'=>'The product selection cannot be delivered by the available carrier(s): it is too heavy. Please amend your cart to lower its weight.'),$_smarty_tpl);?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value==Carrier::SHIPPING_PRICE_EXCEPTION) {?>
                                            <?php $_smarty_tpl->tpl_vars['flag_error_message'] = new Smarty_variable(true, null, 0);?>
                                            <?php echo smartyTranslate(array('s'=>'The product selection cannot be delivered by the available carrier(s). Please amend your cart.'),$_smarty_tpl);?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value==Carrier::SHIPPING_SIZE_EXCEPTION) {?>
                                            <?php $_smarty_tpl->tpl_vars['flag_error_message'] = new Smarty_variable(true, null, 0);?>
                                            <?php echo smartyTranslate(array('s'=>'The product selection cannot be delivered by the available carrier(s): its size does not fit. Please amend your cart to reduce its size.'),$_smarty_tpl);?>

                                        <?php }?>
                                    <?php } ?>
                                    <?php if (!$_smarty_tpl->tpl_vars['flag_error_message']->value) {?>
                                        <?php echo smartyTranslate(array('s'=>'No carriers available for the address "%s".','sprintf'=>$_smarty_tpl->tpl_vars['address']->value->alias),$_smarty_tpl);?>

                                    <?php }?>
                                <?php }?>
                                <?php if (!$_smarty_tpl->tpl_vars['address']->last) {?>
                                    <br />
                                <?php }?>
                                <?php }
if (!$_smarty_tpl->tpl_vars['address']->_loop) {
?>
                                <?php echo smartyTranslate(array('s'=>'No carriers available.'),$_smarty_tpl);?>

                            <?php } ?>
                        </p>
                    <?php } ?>
                <?php }?>
            </div> <!-- end delivery_options_address -->
            <div id="extra_carrier" style="display: none;"></div>
            <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
                <p class="carrier_title"><?php echo smartyTranslate(array('s'=>'Leave a message'),$_smarty_tpl);?>
</p>
                <div>
                    <p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl);?>
</p>
        <textarea class="form-control" cols="120" rows="2" name="message" id="message"><?php if (isset($_smarty_tpl->tpl_vars['oldMessage']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oldMessage']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
                <p class="carrier_title"><?php echo smartyTranslate(array('s'=>'Recyclable Packaging'),$_smarty_tpl);?>
</p>
                <div class="checkbox recyclable">
                    <label for="recyclable">
                        <input type="checkbox" name="recyclable" id="recyclable" value="1"<?php if ($_smarty_tpl->tpl_vars['recyclable']->value==1) {?> checked="checked"<?php }?> />
                        <?php echo smartyTranslate(array('s'=>'I would like to receive my order in recycled packaging.'),$_smarty_tpl);?>

                    </label>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['giftAllowed']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
                    <hr style="" />
                <?php }?>
                <p class="carrier_title"><?php echo smartyTranslate(array('s'=>'Gift'),$_smarty_tpl);?>
</p>
                <p class="checkbox gift">
                    <input type="checkbox" name="gift" id="gift" value="1"<?php if ($_smarty_tpl->tpl_vars['cart']->value->gift==1) {?> checked="checked"<?php }?> />
                    <label for="gift">
                        <?php echo smartyTranslate(array('s'=>'I would like my order to be gift wrapped.'),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['gift_wrapping_price']->value>0) {?>
                            &nbsp;<i>(<?php echo smartyTranslate(array('s'=>'Additional cost of'),$_smarty_tpl);?>

                            <span class="price" id="gift-price">
                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc_cost']->value),$_smarty_tpl);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_cost']->value),$_smarty_tpl);?>

                    <?php }?>
                </span>
                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
                                    <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>

                                <?php } else { ?>
                                    <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>

                                <?php }?>
                            <?php }?>)
                        </i>
                        <?php }?>
                    </label>
                </p>
                <p id="gift_div">
                    <label for="gift_message"><?php echo smartyTranslate(array('s'=>'If you\'d like, you can add a note to the gift:'),$_smarty_tpl);?>
</label>
                    <textarea rows="2" cols="120" id="gift_message" class="form-control" name="gift_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->gift_message, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </p>
            <?php }?>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['conditions']->value&&$_smarty_tpl->tpl_vars['cms_id']->value&&!$_smarty_tpl->tpl_vars['advanced_payment_api']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
            <hr style="" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['override_tos_display']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['override_tos_display']->value;?>

        <?php } else { ?>
            <div class="box">
                <p class="checkbox">
                    <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
                    <label for="cgv"><?php echo smartyTranslate(array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl);?>
</label>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow"><?php echo smartyTranslate(array('s'=>'(Read the Terms of Service)'),$_smarty_tpl);?>
</a>
                </p>
            </div>
        <?php }?>
    <?php }?>
</div> <!-- end delivery_options_address -->
</div> <!-- end carrier_area -->
<?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'msg_order_carrier')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'msg_order_carrier'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You must agree to the terms of service before continuing.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'msg_order_carrier'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
<?php }} ?>
