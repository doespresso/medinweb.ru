<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:43:23
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/components/payments/cc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1872062857535e30cb268153-63035454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562938fc14eb196332598f10a82ba3d84c06d583' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/components/payments/cc.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1872062857535e30cb268153-63035454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'card_id' => 0,
    'id_suffix' => 0,
    'images_dir' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e30cb45ac50_39331983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e30cb45ac50_39331983')) {function content_535e30cb45ac50_39331983($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="clearfix">
    <div class="credit-card">
            <div class="control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="cm-cc-number input-text cm-autocomplete-off" />
                <ul class="cc-icons-wrap cc-icons cm-cc-icons">
                    <li class="cc-icon cc-default cm-cc-default"><span class="default">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-visa"><span class="visa">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-visa_electron"><span class="visa-electron">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-mastercard"><span class="mastercard">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-maestro"><span class="maestro">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-amex"><span class="american-express">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-discover"><span class="discover">&nbsp;</span></li>
                </ul>
            </div>
    
            <div class="control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="cm-cc-exp-month input-text-short cm-autocomplete-off" />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="cm-cc-exp-year input-text-short cm-autocomplete-off" />&nbsp;
            </div>
    
            <div class="control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name input-text uppercase cm-autocomplete-off" />
            </div>
    </div>
    
    <div class="control-group cvv-field">
        <label for="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-integer"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
        <input type="text" id="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-cc-cvv2 input-text-short cm-autocomplete-off" />

        <div class="cvv2"><?php echo $_smarty_tpl->__("what_is_cvv2");?>

            <div class="cvv2-note">

                <div class="card-info clearfix">
                    <div class="cards-images">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                    </div>
                    <div class="cards-description">
                        <h5><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                    </div>
                </div>
                <div class="card-info ax clearfix">
                    <div class="cards-images">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                    </div>
                    <div class="cards-description">
                        <h5><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function() {

        var icons = $('.cm-cc-icons li');

        if($(".cm-cc-number").data('rawMaskFn') == undefined) {

            $(".cm-cc-number").inputmask("9999 9999 9999 9[999]", {
                placeholder: ' '
            });

            $(".cm-cc-cvv2").inputmask("999[9]", {
                placeholder: ''
            });

            $(".cm-cc-exp-month, .cm-cc-exp-year").inputmask("99", {
                placeholder: ''
            });

            $('.cm-cc-number').validateCreditCard(function(result) {
                icons.removeClass('active');
                if (result.card_type) {
                    icons.filter('.cm-cc-' + result.card_type.name).addClass('active');

                    if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                        $('.cm-cc-cvv2').parent('label').removeClass('cm-required');
                    } else {
                        $('.cm-cc-cvv2').parent('label').addClass('cm-required');
                    }
                }
            });

        }
    });
})(Tygh, Tygh.$);
</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/cc.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/cc.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="clearfix">
    <div class="credit-card">
            <div class="control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="cm-cc-number input-text cm-autocomplete-off" />
                <ul class="cc-icons-wrap cc-icons cm-cc-icons">
                    <li class="cc-icon cc-default cm-cc-default"><span class="default">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-visa"><span class="visa">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-visa_electron"><span class="visa-electron">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-mastercard"><span class="mastercard">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-maestro"><span class="maestro">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-amex"><span class="american-express">&nbsp;</span></li>
                    <li class="cc-icon cm-cc-discover"><span class="discover">&nbsp;</span></li>
                </ul>
            </div>
    
            <div class="control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="cm-cc-exp-month input-text-short cm-autocomplete-off" />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="cm-cc-exp-year input-text-short cm-autocomplete-off" />&nbsp;
            </div>
    
            <div class="control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name input-text uppercase cm-autocomplete-off" />
            </div>
    </div>
    
    <div class="control-group cvv-field">
        <label for="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-integer"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
        <input type="text" id="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-cc-cvv2 input-text-short cm-autocomplete-off" />

        <div class="cvv2"><?php echo $_smarty_tpl->__("what_is_cvv2");?>

            <div class="cvv2-note">

                <div class="card-info clearfix">
                    <div class="cards-images">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                    </div>
                    <div class="cards-description">
                        <h5><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                    </div>
                </div>
                <div class="card-info ax clearfix">
                    <div class="cards-images">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                    </div>
                    <div class="cards-description">
                        <h5><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function() {

        var icons = $('.cm-cc-icons li');

        if($(".cm-cc-number").data('rawMaskFn') == undefined) {

            $(".cm-cc-number").inputmask("9999 9999 9999 9[999]", {
                placeholder: ' '
            });

            $(".cm-cc-cvv2").inputmask("999[9]", {
                placeholder: ''
            });

            $(".cm-cc-exp-month, .cm-cc-exp-year").inputmask("99", {
                placeholder: ''
            });

            $('.cm-cc-number').validateCreditCard(function(result) {
                icons.removeClass('active');
                if (result.card_type) {
                    icons.filter('.cm-cc-' + result.card_type.name).addClass('active');

                    if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                        $('.cm-cc-cvv2').parent('label').removeClass('cm-required');
                    } else {
                        $('.cm-cc-cvv2').parent('label').addClass('cm-required');
                    }
                }
            });

        }
    });
})(Tygh, Tygh.$);
</script><?php }?><?php }} ?>
