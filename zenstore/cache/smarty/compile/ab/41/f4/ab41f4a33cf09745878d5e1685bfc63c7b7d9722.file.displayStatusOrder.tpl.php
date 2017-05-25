<?php /* Smarty version Smarty-3.1.19, created on 2016-10-07 14:38:22
         compiled from "C:\xampp\htdocs\prestashop\modules\skrill\views\templates\hook\displayStatusOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299857f76606b87f50-76689349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab41f4a33cf09745878d5e1685bfc63c7b7d9722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\skrill\\views\\templates\\hook\\displayStatusOrder.tpl',
      1 => 1475752129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299857f76606b87f50-76689349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'refundButton' => 0,
    'successMessage' => 0,
    'errorMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f76606c78fb7_29089350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f76606c78fb7_29089350')) {function content_57f76606c78fb7_29089350($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['module']->value=="skrill") {?>
    <script>
        $(document).ready(function() {
            $('#desc-order-standard_refund').css("display","none");
            $('#desc-order-partial_refund').css("display","none");
            var refundButton = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['refundButton']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
            if (refundButton) {
                var refund = '<a id="skrillRefund" class="btn btn-default"><i class="icon-exchange"></i> Refund</a>'
                $('#desc-order-partial_refund').after(refund);
                $('#skrillRefund').click(function(){
                    event.preventDefault();
                    $("#skrillRefundOrder").click();
                });
            }
        });
    </script>

    <?php if (!empty($_smarty_tpl->tpl_vars['successMessage']->value)) {?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php if ($_smarty_tpl->tpl_vars['successMessage']->value=="refund") {?>
                <?php ob_start();?><?php echo smartyTranslate(array('s'=>'SUCCESS_GENERAL_REFUND_PAYMENT','mod'=>'skrill'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=="SUCCESS_GENERAL_REFUND_PAYMENT") {?>Your attempt to refund the payment success.<?php } else { ?><?php echo smartyTranslate(array('s'=>'SUCCESS_GENERAL_REFUND_PAYMENT','mod'=>'skrill'),$_smarty_tpl);?>
<?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['successMessage']->value=="updateOrder") {?>
                <?php ob_start();?><?php echo smartyTranslate(array('s'=>'SUCCESS_GENERAL_UPDATE_PAYMENT','mod'=>'skrill'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=="SUCCESS_GENERAL_UPDATE_PAYMENT") {?>The payment status has been successfully updated.<?php } else { ?><?php echo smartyTranslate(array('s'=>'SUCCESS_GENERAL_UPDATE_PAYMENT','mod'=>'skrill'),$_smarty_tpl);?>
<?php }?>
            <?php }?>
        </div>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['errorMessage']->value)) {?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value=="refund") {?>
                <?php ob_start();?><?php echo smartyTranslate(array('s'=>'ERROR_GENERAL_REFUND_PAYMENT','mod'=>'skrill'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8=="ERROR_GENERAL_REFUND_PAYMENT") {?>Unfortunately, your attempt to refund the payment failed.<?php } else { ?><?php echo smartyTranslate(array('s'=>'ERROR_GENERAL_REFUND_PAYMENT','mod'=>'skrill'),$_smarty_tpl);?>
<?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['errorMessage']->value=="updateOrder") {?>
                <?php ob_start();?><?php echo smartyTranslate(array('s'=>'ERROR_UPDATE_BACKEND','mod'=>'skrill'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9=="ERROR_UPDATE_BACKEND") {?>Order status can not be updated. <?php } else { ?><?php echo smartyTranslate(array('s'=>'ERROR_UPDATE_BACKEND','mod'=>'skrill'),$_smarty_tpl);?>
<?php }?>
            <?php }?>
        </div>
    <?php }?>
<?php }?>
<?php }} ?>
