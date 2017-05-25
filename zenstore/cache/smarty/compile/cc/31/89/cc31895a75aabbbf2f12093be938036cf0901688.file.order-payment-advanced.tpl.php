<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 14:08:50
         compiled from "C:\xampp\htdocs\prestashop\themes\default-bootstrap\order-payment-advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2969457f39bd2a40271-69349438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc31895a75aabbbf2f12093be938036cf0901688' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\order-payment-advanced.tpl',
      1 => 1473154514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2969457f39bd2a40271-69349438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addresses_style' => 0,
    'products' => 0,
    'product' => 0,
    'productNumber' => 0,
    'PS_CATALOG_MODE' => 0,
    'HOOK_ADVANCED_PAYMENT' => 0,
    'pay_option' => 0,
    'adv_payment_empty' => 0,
    'advanced_payment_opt_list' => 0,
    'paymentOption' => 0,
    'name' => 0,
    'value' => 0,
    'opc' => 0,
    'is_logged' => 0,
    'is_guest' => 0,
    'conditions' => 0,
    'cms_id' => 0,
    'override_tos_display' => 0,
    'checkedTOS' => 0,
    'link_conditions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f39bd30c7054_07237916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f39bd30c7054_07237916')) {function content_57f39bd30c7054_07237916($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']->value)) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['company'] = 'address_company';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['vat_number'] = 'address_company';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['firstname'] = 'address_name';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['lastname'] = 'address_name';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['address1'] = 'address_address1';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['address2'] = 'address_address2';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['city'] = 'address_city';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['country'] = 'address_country';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone'] = 'address_phone';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone_mobile'] = 'address_phone_mobile';?>
    <?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['alias'] = 'address_title';?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(false, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual']==0) {?>
        <?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(true, null, 0);?>
        <?php break 1?>
    <?php }?>
<?php } ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProduct')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProducts')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Products','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your shopping cart'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['productNumber']->value==0) {?>
<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This store has not accepted your new order.'),$_smarty_tpl);?>
</p>
<?php } else { ?>
    <p id="emptyCartWarning" class="alert alert-warning unvisible"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>
    <h2><?php echo smartyTranslate(array('s'=>'Payment Options'),$_smarty_tpl);?>
</h2>
    <!-- HOOK_ADVANCED_PAYMENT -->
    <div id="HOOK_ADVANCED_PAYMENT">
        <div class="row">
        <!-- Should get a collection of "PaymentOption" object -->
        <?php $_smarty_tpl->tpl_vars['adv_payment_empty'] = new Smarty_variable(true, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['pay_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pay_option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['HOOK_ADVANCED_PAYMENT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pay_option']->key => $_smarty_tpl->tpl_vars['pay_option']->value) {
$_smarty_tpl->tpl_vars['pay_option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pay_option']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['pay_option']->value) {?>
                <?php $_smarty_tpl->tpl_vars['adv_payment_empty'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['HOOK_ADVANCED_PAYMENT']->value&&!$_smarty_tpl->tpl_vars['adv_payment_empty']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['advanced_payment_opt_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advanced_payment_opt_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HOOK_ADVANCED_PAYMENT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advanced_payment_opt_list']->key => $_smarty_tpl->tpl_vars['advanced_payment_opt_list']->value) {
$_smarty_tpl->tpl_vars['advanced_payment_opt_list']->_loop = true;
?>
                <?php  $_smarty_tpl->tpl_vars['paymentOption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paymentOption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advanced_payment_opt_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['paymentOption']->key => $_smarty_tpl->tpl_vars['paymentOption']->value) {
$_smarty_tpl->tpl_vars['paymentOption']->_loop = true;
?>
                    <div class="col-xs-6 col-md-6">
                        <p class="payment_module pointer-box">
                            <a class="payment_module_adv">
                                <img class="payment_option_logo" src="<?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getLogo();?>
"/>
                                <span class="payment_option_cta">
                                    <?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getCallToActionText();?>

                                </span>
                                <span class="pull-right payment_option_selected">
                                    <i class="icon-check"></i>
                                </span>
                            </a>

                        </p>
                        <div class="payment_option_form">
                            <?php if ($_smarty_tpl->tpl_vars['paymentOption']->value->getForm()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getForm();?>

                            <?php } else { ?>
                                <form method="<?php if ($_smarty_tpl->tpl_vars['paymentOption']->value->getMethod()) {?><?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getMethod();?>
<?php } else { ?>POST<?php }?>" action="<?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getAction();?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['paymentOption']->value->getInputs()) {?>
                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['paymentOption']->value->getInputs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
                                        <?php } ?>
                                    <?php }?>
                                </form>
                            <?php }?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <?php } else { ?>
        <div class="col-xs-12 col-md-12">
            <p class="alert alert-warning "><?php echo smartyTranslate(array('s'=>'Unable to find any available payment option for your cart. Please contact us if the problem persists'),$_smarty_tpl);?>
</p>
        </div>
        <?php }?>
    </div>
    <!-- end HOOK_ADVANCED_PAYMENT -->

    <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <!-- Carrier -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-carrier-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- END Carrier -->
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_logged']->value&&!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-address-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <!-- Create account / Guest account / Login block -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-opc-new-account-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- END Create account / Guest account / Login block -->
    <?php }?>

    <!-- TNC -->
    <?php if ($_smarty_tpl->tpl_vars['conditions']->value&&$_smarty_tpl->tpl_vars['cms_id']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['override_tos_display']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['override_tos_display']->value;?>

        <?php } else { ?>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2><?php echo smartyTranslate(array('s'=>'Terms and Conditions'),$_smarty_tpl);?>
</h2>
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
                </div>
            </div>
        <?php }?>
    <?php }?>
    <!-- end TNC -->

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
