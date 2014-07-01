<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:43:14
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/shipping_rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1688452106535e30c2f23460-59253543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '489a9c5db3b74f82fb29247002c1515536bc536e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/shipping_rates.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1688452106535e30c2f23460-59253543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_header' => 0,
    'no_form' => 0,
    'use_ajax' => 0,
    'display' => 0,
    'product_groups' => 0,
    'group' => 0,
    'product' => 0,
    'company_id' => 0,
    'onchange' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping' => 0,
    'rate' => 0,
    'tax' => 0,
    'inc_tax_lang' => 0,
    'checked' => 0,
    'delivery_time' => 0,
    'selected' => 0,
    'strong_begin' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e30c33c7de4_08353569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e30c33c7de4_08353569')) {function content_535e30c33c7de4_08353569($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('select_shipping_method','free_shipping','total','free_shipping','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods','no_shipping_required','free_shipping','select','select_shipping_method','free_shipping','total','free_shipping','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods','no_shipping_required','free_shipping','select'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<script type="text/javascript">
//<![CDATA[
function fn_calculate_total_shipping_cost() {
    params = [];
    parents = Tygh.$('#shipping_rates_list');
    radio = Tygh.$('input[type=radio]:checked', parents);

    Tygh.$.each(radio, function(id, elm) {
        params.push({name: elm.name, value: elm.value});
    });

    url = fn_url('checkout.checkout');

    for (i in params) {
        url += '&' + params[i]['name'] + '=' + escape(params[i]['value']);
    }

    Tygh.$.ceAjax('request', url, {
        result_ids: 'shipping_rates_list,checkout_info_summary_*,checkout_info_order_info_*',
        method: 'get',
        full_render: true
    });
}
//]]>
</script>


<?php if ($_smarty_tpl->tpl_vars['show_header']->value==true) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("select_shipping_method")), 0);?>

<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
    <form <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>class="cm-ajax"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="shippings_form">
        <input type="hidden" name="redirect_mode" value="checkout" />
        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>
            <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps" />
        <?php }?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
    <div class="step-complete-wrapper">
<?php }?>

    <div id="shipping_rates_list">

        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars['group']->key;
 $_smarty_tpl->tpl_vars['group']->iteration++;
 $_smarty_tpl->tpl_vars['group']->last = $_smarty_tpl->tpl_vars['group']->iteration === $_smarty_tpl->tpl_vars['group']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["spg"]['last'] = $_smarty_tpl->tpl_vars['group']->last;
?>
            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <span class="vendor-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>

            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <ul class="bullets-list">
                    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                        <?php if (!(($_smarty_tpl->tpl_vars['product']->value['is_edp']=='Y'&&$_smarty_tpl->tpl_vars['product']->value['edp_shipping']!='Y')||$_smarty_tpl->tpl_vars['product']->value['free_shipping']=='Y')) {?>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['all_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php if ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
                    <p>
                        <select id="ssr_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['onchange']->value) {?>onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onchange']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable("selected=\"selected\"", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable("<strong>", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable("</strong>", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)$_smarty_tpl->tpl_vars['shipping']->value['delivery_time']).")", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"nowrap"), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (".((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
                        <p class="shipping-options-method">
                            <input type="radio" class="valign" id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onclick="fn_calculate_total_shipping_cost();" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 />
                            <label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" class="valign"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</label>
                        </p>

                    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</option>

                    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
                            <p>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>

                            </p>
                    <?php }?>

                <?php } ?>

                <?php if ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
                        </select>
                    <p>
                <?php }?>

                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['spg']['last']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['free_shipping'])) {?>
                    <p class="shipping-options-total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"price"), 0);?>
</p>
                <?php }?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                     <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                    <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                <?php } else { ?>
                    <p class="error-text">
                        <?php if ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
                            <strong><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</strong>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                        <?php }?>
                    </p>
                <?php }?>
            <?php }?>

        <?php }
if (!$_smarty_tpl->tpl_vars['group']->_loop) {
?>
            <p>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
                    <?php echo $_smarty_tpl->__("no_shipping_required");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['free_shipping']) {?>
                    <?php echo $_smarty_tpl->__("free_shipping");?>

                <?php }?>
            </p>
        <?php } ?>

    <!--shipping_rates_list--></div>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
    </div>
<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
        <div class="cm-noscript buttons-container center"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_shipping]",'but_text'=>__("select")), 0);?>
</div>
    </form>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/shipping_rates.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/shipping_rates.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<script type="text/javascript">
//<![CDATA[
function fn_calculate_total_shipping_cost() {
    params = [];
    parents = Tygh.$('#shipping_rates_list');
    radio = Tygh.$('input[type=radio]:checked', parents);

    Tygh.$.each(radio, function(id, elm) {
        params.push({name: elm.name, value: elm.value});
    });

    url = fn_url('checkout.checkout');

    for (i in params) {
        url += '&' + params[i]['name'] + '=' + escape(params[i]['value']);
    }

    Tygh.$.ceAjax('request', url, {
        result_ids: 'shipping_rates_list,checkout_info_summary_*,checkout_info_order_info_*',
        method: 'get',
        full_render: true
    });
}
//]]>
</script>


<?php if ($_smarty_tpl->tpl_vars['show_header']->value==true) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("select_shipping_method")), 0);?>

<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
    <form <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>class="cm-ajax"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="shippings_form">
        <input type="hidden" name="redirect_mode" value="checkout" />
        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>
            <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps" />
        <?php }?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
    <div class="step-complete-wrapper">
<?php }?>

    <div id="shipping_rates_list">

        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars['group']->key;
 $_smarty_tpl->tpl_vars['group']->iteration++;
 $_smarty_tpl->tpl_vars['group']->last = $_smarty_tpl->tpl_vars['group']->iteration === $_smarty_tpl->tpl_vars['group']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["spg"]['last'] = $_smarty_tpl->tpl_vars['group']->last;
?>
            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <span class="vendor-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>

            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <ul class="bullets-list">
                    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                        <?php if (!(($_smarty_tpl->tpl_vars['product']->value['is_edp']=='Y'&&$_smarty_tpl->tpl_vars['product']->value['edp_shipping']!='Y')||$_smarty_tpl->tpl_vars['product']->value['free_shipping']=='Y')) {?>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['all_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php if ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
                    <p>
                        <select id="ssr_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['onchange']->value) {?>onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onchange']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable("selected=\"selected\"", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable("<strong>", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable("</strong>", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)$_smarty_tpl->tpl_vars['shipping']->value['delivery_time']).")", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"nowrap"), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (".((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
                        <p class="shipping-options-method">
                            <input type="radio" class="valign" id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onclick="fn_calculate_total_shipping_cost();" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 />
                            <label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" class="valign"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</label>
                        </p>

                    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</option>

                    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
                            <p>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>

                            </p>
                    <?php }?>

                <?php } ?>

                <?php if ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
                        </select>
                    <p>
                <?php }?>

                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['spg']['last']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['free_shipping'])) {?>
                    <p class="shipping-options-total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"price"), 0);?>
</p>
                <?php }?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                     <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                    <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                <?php } else { ?>
                    <p class="error-text">
                        <?php if ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
                            <strong><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</strong>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                        <?php }?>
                    </p>
                <?php }?>
            <?php }?>

        <?php }
if (!$_smarty_tpl->tpl_vars['group']->_loop) {
?>
            <p>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
                    <?php echo $_smarty_tpl->__("no_shipping_required");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['free_shipping']) {?>
                    <?php echo $_smarty_tpl->__("free_shipping");?>

                <?php }?>
            </p>
        <?php } ?>

    <!--shipping_rates_list--></div>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
    </div>
<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
        <div class="cm-noscript buttons-container center"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_shipping]",'but_text'=>__("select")), 0);?>
</div>
    </form>
<?php }?><?php }?><?php }} ?>
