<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 14:08:57
         compiled from "C:\xampp\htdocs\prestashop\themes\default-bootstrap\shopping-cart-advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:433857f39bd9cbabf3-42584298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d325bfcf514eb350b38cf5d5722c572dd2a1c72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\shopping-cart-advanced.tpl',
      1 => 1473154516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '433857f39bd9cbabf3-42584298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_discounts' => 0,
    'use_taxes' => 0,
    'show_taxes' => 0,
    'total_wrapping' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'col_span_subtotal' => 0,
    'total_discounts_num' => 0,
    'total_wrapping_taxes_num' => 0,
    'total_tax' => 0,
    'rowspan_total' => 0,
    'priceDisplay' => 0,
    'total_shipping_tax_exc' => 0,
    'isVirtualCart' => 0,
    'free_ship' => 0,
    'total_shipping' => 0,
    'voucherAllowed' => 0,
    'opc' => 0,
    'link' => 0,
    'discount_name' => 0,
    'displayVouchers' => 0,
    'voucher' => 0,
    'display_tax_label' => 0,
    'total_products' => 0,
    'total_products_wt' => 0,
    'total_wrapping_tax_exc' => 0,
    'cart' => 0,
    'total_discounts_tax_exc' => 0,
    'total_discounts_negative' => 0,
    'total_price_without_tax' => 0,
    'total_price' => 0,
    'col_span_total' => 0,
    'products' => 0,
    'product' => 0,
    'odd' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'gift_products' => 0,
    'id_customization' => 0,
    'customization' => 0,
    'type' => 0,
    'CUSTOMIZE_FILE' => 0,
    'custom_data' => 0,
    'pic_dir' => 0,
    'picture' => 0,
    'CUSTOMIZE_TEXTFIELD' => 0,
    'textField' => 0,
    'quantityDisplayed' => 0,
    'last_was_odd' => 0,
    'discounts' => 0,
    'discount' => 0,
    'back_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f39bda4929d1_67419726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f39bda4929d1_67419726')) {function content_57f39bda4929d1_67419726($_smarty_tpl) {?>
<h2><?php echo smartyTranslate(array('s'=>'Cart Summary'),$_smarty_tpl);?>
</h2>
<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['total_discounts']->value!=0) {?><?php echo "1";?><?php } else { ?><?php echo "0";?><?php }?><?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_discounts_num'] = new Smarty_variable($_tmp3, null, 0);?>
<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['show_taxes']->value) {?><?php echo "2";?><?php } else { ?><?php echo "0";?><?php }?><?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['use_show_taxes'] = new Smarty_variable($_tmp4, null, 0);?>
<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value!=0) {?><?php echo "1";?><?php } else { ?><?php echo "0";?><?php }?><?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_wrapping_taxes_num'] = new Smarty_variable($_tmp5, null, 0);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBeforeShoppingCartBlock"),$_smarty_tpl);?>

<div id="order-detail-content" class="table_block table-responsive">
    <table id="cart_summary" class="table table-bordered <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>stock-management-on<?php } else { ?>stock-management-off<?php }?>">
        <thead>
        <tr>
            <th class="cart_product first_item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
            <th class="cart_description item"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
                <?php $_smarty_tpl->tpl_vars['col_span_subtotal'] = new Smarty_variable('3', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['col_span_total'] = new Smarty_variable('7', null, 0);?>
                <th class="cart_avail item text-center"><?php echo smartyTranslate(array('s'=>'Availability'),$_smarty_tpl);?>
</th>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['col_span_subtotal'] = new Smarty_variable('2', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['col_span_total'] = new Smarty_variable('6', null, 0);?>
            <?php }?>
            <th class="cart_unit item text-right"><?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
</th>
            <th class="cart_quantity item text-center"><?php echo smartyTranslate(array('s'=>'Qty'),$_smarty_tpl);?>
</th>
            <th colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="cart_total item text-right"><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</th>
        </tr>
        </thead>
        <tfoot>
        <?php $_smarty_tpl->tpl_vars['rowspan_total'] = new Smarty_variable(2+$_smarty_tpl->tpl_vars['total_discounts_num']->value+$_smarty_tpl->tpl_vars['total_wrapping_taxes_num']->value, null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['show_taxes']->value&&$_smarty_tpl->tpl_vars['total_tax']->value!=0) {?>
            <?php $_smarty_tpl->tpl_vars['rowspan_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowspan_total']->value+1, null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=0) {?>
            <?php $_smarty_tpl->tpl_vars['rowspan_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowspan_total']->value+1, null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0&&(!isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)||!$_smarty_tpl->tpl_vars['isVirtualCart']->value)&&$_smarty_tpl->tpl_vars['free_ship']->value) {?>
            <?php $_smarty_tpl->tpl_vars['rowspan_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowspan_total']->value+1, null, 0);?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value!=$_smarty_tpl->tpl_vars['total_shipping']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value&&$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value>0) {?>
                    <?php $_smarty_tpl->tpl_vars['rowspan_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowspan_total']->value+1, null, 0);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['total_shipping']->value>0) {?>
                    <?php $_smarty_tpl->tpl_vars['rowspan_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowspan_total']->value+1, null, 0);?>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value>0) {?>
                <?php $_smarty_tpl->tpl_vars['rowspan_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowspan_total']->value+1, null, 0);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                <tr class="cart_total_price">
                    <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="3" id="cart_voucher" class="cart_voucher">
                        <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                            <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" id="voucher">
                                <fieldset>
                                    <h4><?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
</h4>
                                    <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if (isset($_smarty_tpl->tpl_vars['discount_name']->value)&&$_smarty_tpl->tpl_vars['discount_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['discount_name']->value;?>
<?php }?>" />
                                    <input type="hidden" name="submitDiscount" />
                                    <button type="submit" name="submitAddDiscount" class="button btn btn-default button-small"><span><?php echo smartyTranslate(array('s'=>'OK'),$_smarty_tpl);?>
</span></button>
                                </fieldset>
                            </form>
                            <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                                <p id="title" class="title-offers"><?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl);?>
</p>
                                <div id="display_cart_vouchers">
                                    <?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['displayVouchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code']!='') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }?><?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br />
                                    <?php } ?>
                                </div>
                            <?php }?>
                        <?php }?>
                    </td>
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total products (tax excl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
<?php }?></td>
                    <td colspan="2" class="price" id="total_product"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl);?>
</td>
                </tr>
            <?php } else { ?>
                <tr class="cart_total_price">
                    <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="2" id="cart_voucher" class="cart_voucher">
                        <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                            <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" id="voucher">
                                <fieldset>
                                    <h4><?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
</h4>
                                    <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if (isset($_smarty_tpl->tpl_vars['discount_name']->value)&&$_smarty_tpl->tpl_vars['discount_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['discount_name']->value;?>
<?php }?>" />
                                    <input type="hidden" name="submitDiscount" />
                                    <button type="submit" name="submitAddDiscount" class="button btn btn-default button-small"><span><?php echo smartyTranslate(array('s'=>'OK'),$_smarty_tpl);?>
</span></button>
                                </fieldset>
                            </form>
                            <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                                <p id="title" class="title-offers"><?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl);?>
</p>
                                <div id="display_cart_vouchers">
                                    <?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['displayVouchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code']!='') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }?><?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br />
                                    <?php } ?>
                                </div>
                            <?php }?>
                        <?php }?>
                    </td>
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total products (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
<?php }?></td>
                    <td colspan="2" class="price" id="total_product"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products_wt']->value),$_smarty_tpl);?>
</td>
                </tr>
            <?php }?>
        <?php } else { ?>
            <tr class="cart_total_price">
                <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="2" id="cart_voucher" class="cart_voucher">
                    <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                        <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" id="voucher">
                            <fieldset>
                                <h4><?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
</h4>
                                <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if (isset($_smarty_tpl->tpl_vars['discount_name']->value)&&$_smarty_tpl->tpl_vars['discount_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['discount_name']->value;?>
<?php }?>" />
                                <input type="hidden" name="submitDiscount" />
                                <button type="submit" name="submitAddDiscount" class="button btn btn-default button-small">
                                    <span><?php echo smartyTranslate(array('s'=>'OK'),$_smarty_tpl);?>
</span>
                                </button>
                            </fieldset>
                        </form>
                        <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                            <p id="title" class="title-offers"><?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl);?>
</p>
                            <div id="display_cart_vouchers">
                                <?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['displayVouchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code']!='') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }?><?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br />
                                <?php } ?>
                            </div>
                        <?php }?>
                    <?php }?>
                </td>
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
</td>
                <td colspan="2" class="price" id="total_product"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl);?>
</td>
            </tr>
        <?php }?>
        <tr<?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value==0) {?> style="display: none;"<?php }?>>
            <td colspan="3" class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total gift wrapping (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total gift-wrapping cost'),$_smarty_tpl);?>
<?php }?>
                <?php } else { ?>
                    <?php echo smartyTranslate(array('s'=>'Total gift-wrapping cost'),$_smarty_tpl);?>

                <?php }?>
            </td>
            <td colspan="2" class="price-discount price" id="total_wrapping">
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value),$_smarty_tpl);?>

                    <?php }?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

                <?php }?>
            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0&&(!isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)||!$_smarty_tpl->tpl_vars['isVirtualCart']->value)) {?>
            <tr class="cart_total_delivery<?php if (!$_smarty_tpl->tpl_vars['opc']->value&&(!isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)||!$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
</td>
                <td colspan="2" class="price" id="total_shipping"><?php echo smartyTranslate(array('s'=>'Free shipping!'),$_smarty_tpl);?>
</td>
            </tr>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value!=$_smarty_tpl->tpl_vars['total_shipping']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                    <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0) {?> unvisible<?php }?>">
                        <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total shipping (tax excl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
<?php }?></td>
                        <td colspan="2" class="price" id="total_shipping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl);?>
</td>
                    </tr>
                <?php } else { ?>
                    <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping']->value<=0) {?> unvisible<?php }?>">
                        <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total shipping (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
<?php }?></td>
                        <td colspan="2" class="price" id="total_shipping" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_shipping']->value),$_smarty_tpl);?>
</td>
                    </tr>
                <?php }?>
            <?php } else { ?>
                <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0) {?> unvisible<?php }?>">
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
</td>
                    <td colspan="2" class="price" id="total_shipping" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl);?>
</td>
                </tr>
            <?php }?>
        <?php }?>
        <tr class="cart_total_voucher<?php if ($_smarty_tpl->tpl_vars['total_discounts']->value==0) {?> unvisible<?php }?>">
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0) {?>
                        <?php echo smartyTranslate(array('s'=>'Total vouchers (tax incl.)'),$_smarty_tpl);?>

                    <?php } else { ?>
                        <?php echo smartyTranslate(array('s'=>'Total vouchers (tax excl.)'),$_smarty_tpl);?>

                    <?php }?>
                <?php } else { ?>
                    <?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>

                <?php }?>
            </td>
            <td colspan="2" class="price-discount price" id="total_discount">
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0) {?>
                    <?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_discounts']->value*-1, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1, null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_discounts_negative']->value),$_smarty_tpl);?>

            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['show_taxes']->value&&$_smarty_tpl->tpl_vars['total_tax']->value!=0) {?>
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=0) {?>
                <tr class="cart_total_price">
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total (tax excl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
<?php }?></td>
                    <td colspan="2" class="price" id="total_price_without_tax"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl);?>
</td>
                </tr>
            <?php }?>
            <tr class="cart_total_tax">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo smartyTranslate(array('s'=>'Tax'),$_smarty_tpl);?>
</td>
                <td colspan="2" class="price" id="total_tax"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_tax']->value),$_smarty_tpl);?>
</td>
            </tr>
        <?php }?>
        <tr class="cart_total_price">
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="total_price_container text-right">
                <span><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</span>
                <div class="hookDisplayProductPriceBlock-price">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayCartTotalPriceLabel"),$_smarty_tpl);?>

                </div>
            </td>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                <td colspan="2" class="price" id="total_price_container">
                    <span id="total_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl);?>
</span>
                </td>
            <?php } else { ?>
                <td colspan="2" class="price" id="total_price_container">
                    <span id="total_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl);?>
</span>
                </td>
            <?php }?>
        </tr>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAfterShoppingCartBlock",'colspan_total'=>$_smarty_tpl->tpl_vars['col_span_total']->value),$_smarty_tpl);?>

        </tfoot>
        <tbody>
        <?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(false, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual']==0) {?>
                <?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable(($_smarty_tpl->tpl_vars['odd']->value+1)%2, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['ignoreProductLast'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||count($_smarty_tpl->tpl_vars['gift_products']->value), null, 0);?>
            
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'noDeleteButton'=>0,'cannotModify'=>0), 0);?>

            
            <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_smarty_tpl->tpl_vars['id_customization'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['customization']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['customization']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['id_customization']->value = $_smarty_tpl->tpl_vars['customization']->key;
 $_smarty_tpl->tpl_vars['customization']->iteration++;
 $_smarty_tpl->tpl_vars['customization']->last = $_smarty_tpl->tpl_vars['customization']->iteration === $_smarty_tpl->tpl_vars['customization']->total;
?>
                    <tr
                            id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
"
                            class="product_customization_for_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if ($_smarty_tpl->tpl_vars['odd']->value) {?> odd<?php } else { ?> even<?php }?> customization alternate_item <?php if ($_smarty_tpl->tpl_vars['product']->last&&$_smarty_tpl->tpl_vars['customization']->last&&!count($_smarty_tpl->tpl_vars['gift_products']->value)) {?>last_item<?php }?>">
                        <td></td>
                        <td colspan="3">
                            <?php  $_smarty_tpl->tpl_vars['custom_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['custom_data']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['custom_data']->key => $_smarty_tpl->tpl_vars['custom_data']->value) {
$_smarty_tpl->tpl_vars['custom_data']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['custom_data']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>
                                    <div class="customizationUploaded">
                                        <ul class="customizationUploaded">
                                            <?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
                                                <li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>
                                    <ul class="typedText">
                                        <?php  $_smarty_tpl->tpl_vars['textField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['textField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['textField']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['textField']->key => $_smarty_tpl->tpl_vars['textField']->value) {
$_smarty_tpl->tpl_vars['textField']->_loop = true;
 $_smarty_tpl->tpl_vars['textField']->index++;
?>
                                            <li>
                                                <?php if ($_smarty_tpl->tpl_vars['textField']->value['name']) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['textField']->value['name'];?>

                                                <?php } else { ?>
                                                    <?php echo smartyTranslate(array('s'=>'Text #'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['textField']->index+1;?>

                                                <?php }?>
                                                : <?php echo $_smarty_tpl->tpl_vars['textField']->value['value'];?>

                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                            <?php } ?>
                        </td>
                        <td class="cart_quantity" colspan="1">
                            <span><?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>
<?php }?></span>
                        </td>

                        <td>
                        </td>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable($_smarty_tpl->tpl_vars['quantityDisplayed']->value+$_smarty_tpl->tpl_vars['customization']->value['quantity'], null, 0);?>
                <?php } ?>

                
                <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'noDeleteButton'=>0,'cannotModify'=>0), 0);?>
<?php }?>
            <?php }?>
        <?php } ?>
        <?php $_smarty_tpl->tpl_vars['last_was_odd'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->iteration%2, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
            <?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->iteration+$_smarty_tpl->tpl_vars['last_was_odd']->value)%2, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['ignoreProductLast'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['cannotModify'] = new Smarty_variable(1, null, 0);?>
            
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'noDeleteButton'=>0,'cannotModify'=>0), 0);?>

        <?php } ?>
        </tbody>
        <?php if (sizeof($_smarty_tpl->tpl_vars['discounts']->value)) {?>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discount']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discount']->iteration=0;
 $_smarty_tpl->tpl_vars['discount']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
 $_smarty_tpl->tpl_vars['discount']->iteration++;
 $_smarty_tpl->tpl_vars['discount']->index++;
 $_smarty_tpl->tpl_vars['discount']->first = $_smarty_tpl->tpl_vars['discount']->index === 0;
 $_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
?>
                <?php if ((float)$_smarty_tpl->tpl_vars['discount']->value['value_real']==0) {?>
                    <?php continue 1?>
                <?php }?>
                <tr class="cart_discount <?php if ($_smarty_tpl->tpl_vars['discount']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['discount']->first) {?>first_item<?php } else { ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
                    <td class="cart_discount_name" colspan="<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>3<?php } else { ?>2<?php }?>"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
                    <td class="cart_discount_price">
								<span class="price-discount">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl);?>
<?php }?>
								</span>
                    </td>
                    <td class="cart_discount_delete">1</td>
                    <td class="price_discount_del text-center">
                        <?php if (strlen($_smarty_tpl->tpl_vars['discount']->value['code'])) {?>
                            <a
                                    href="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
"
                                    class="price_discount_delete"
                                    title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
">
                                <i class="icon-trash"></i>
                            </a>
                        <?php }?>
                    </td>
                    <td class="cart_discount_price">
                        <span class="price-discount price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl);?>
<?php }?></span>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        <?php }?>
    </table>
</div> <!-- end order-detail-content -->



<p class="cart_navigation clearfix">

    <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <?php $_smarty_tpl->tpl_vars['back_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['back_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=2"), null, 0);?>
    <?php }?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
" class="button-exclusive btn btn-default">
        <i class="icon-chevron-left"></i>
        <?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>

    </a>
    <button data-show-if-js="" style="" id="confirmOrder" type="button" class="button btn btn-default standard-checkout button-medium"><span><?php echo smartyTranslate(array('s'=>'Order With Obligation To Pay'),$_smarty_tpl);?>
</span></button>
</p>
<?php }} ?>
