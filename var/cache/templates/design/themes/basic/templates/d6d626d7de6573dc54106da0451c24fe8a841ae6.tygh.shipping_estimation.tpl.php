<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:37
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_cities/overrides/views/checkout/components/shipping_estimation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1334277002533e9d7d1b1344-18165365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6d626d7de6573dc54106da0451c24fe8a841ae6' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_cities/overrides/views/checkout/components/shipping_estimation.tpl',
      1 => 1396612054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1334277002533e9d7d1b1344-18165365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location' => 0,
    'additional_id' => 0,
    'cart' => 0,
    'id_suffix' => 0,
    'prefix' => 0,
    'class_suffix' => 0,
    'countries' => 0,
    'code' => 0,
    'settings' => 0,
    'country' => 0,
    '_state' => 0,
    'cities' => 0,
    'client_city' => 0,
    'city' => 0,
    'input_city' => 0,
    'buttons_class' => 0,
    'product_groups' => 0,
    'group' => 0,
    'product' => 0,
    'group_key' => 0,
    'shipping' => 0,
    'rate' => 0,
    'tax' => 0,
    'inc_tax_lang' => 0,
    'checked' => 0,
    'delivery_time' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d7d7b9193_15382190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d7d7b9193_15382190')) {function content_533e9d7d7b9193_15382190($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('calculate_shipping_cost','country','select_country','state','select_state','city','select_city','other_town','other_town','city','zip_postal_code','get_rates','select_shipping_method','vendor','none','free_shipping','no_shipping_required','free_shipping','text_no_shipping_methods','total','select','text_no_shipping_methods','recalculate_rates','select_shipping_method','get_rates','calculate_shipping_cost','country','select_country','state','select_state','city','select_city','other_town','other_town','city','zip_postal_code','get_rates','select_shipping_method','vendor','none','free_shipping','no_shipping_required','free_shipping','text_no_shipping_methods','total','select','text_no_shipping_methods','recalculate_rates','select_shipping_method','get_rates'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><!-- Шаблон shipping_estimation.tpl перезаписан модулем rus_cities (/templates/addons/rus_cities/overrides/views/checkout/components/shipping_estimation.tpl) -->



<script type="text/javascript">
//<![CDATA[
function fn_calculate_total_shipping() 
{
    var $ = Tygh.$;
    params = [];
    parents = $('#shipping_estimation');
    radio = $('input[type=radio]:checked', parents);

    $.each(radio, function(id, elm) {
        params.push({name: elm.name, value: elm.value});
    });

    params.push({name: $('#elm_country').prop('name'), value: $('#elm_country').val()});
    params.push({name: $('#elm_state').prop('name'), value: $('#elm_state').val()});
    params.push({name: $('#elm_zipcode').prop('name'), value: $('#elm_zipcode').val()});

    url = fn_url('checkout.shipping_estimation');

    for (i in params) {
        url += '&' + params[i]['name'] + '=' + escape(params[i]['value']);
    }

    $.ceAjax('request', url, {
        result_ids: 'shipping_estimation',
        method: 'post'
    });
}
//]]>
</script>


<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>
    <?php $_smarty_tpl->tpl_vars["prefix"] = new Smarty_variable("sidebox_", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("hidden", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("buttons-container", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["class_suffix"] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value['user_data']&&$_SESSION['cart']['user_data']) {?>
    <?php $_smarty_tpl->tpl_vars["cart"] = new Smarty_variable($_SESSION['cart'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>

<div id="est_box<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" align="right">
    <div class="estimation-box" align="left">
    <h2><?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
</h2>
    <?php }?>
        <div id="shipping_estimation<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>_sidebox<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php if (!Smarty::$_smarty_vars['capture']['states_built']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("states_built", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>

        <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
estimation_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?><input type="hidden" name="location" value="sidebox" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><input type="hidden" name="additional_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <input type="hidden" name="result_ids" value="shipping_estimation<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>_sidebox<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
,shipping_estimation_buttons" />
        <div class="control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
            <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[country]">
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                <?php $_smarty_tpl->tpl_vars["countries"] = new Smarty_variable(fn_get_simple_countries(1), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']==$_smarty_tpl->tpl_vars['code']->value)||(!$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']&&$_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['settings']->value['General']['default_country'])) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>

        <?php $_smarty_tpl->tpl_vars["_state"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_state'] : $tmp), null, 0);?>
        <div class="control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
            <select class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[state]">
                <option label="" value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            </select>
            <input type="text" class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 input-text hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_d" name="customer_location[state]" size="<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox") {?>32<?php } else { ?>20<?php }?>" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
        </div>



        <div id="change_city">

            <?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
                <div class="control-group">
                    <label><?php echo $_smarty_tpl->__("city");?>
</label>
                    <select class="" id="elm_city" name="customer_location[city]">
                        <option label="" value="">-- <?php echo $_smarty_tpl->__("select_city");?>
 --</option>
                        <?php  $_smarty_tpl->tpl_vars["city"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["city"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["city"]->key => $_smarty_tpl->tpl_vars["city"]->value) {
$_smarty_tpl->tpl_vars["city"]->_loop = true;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['client_city']->value&&($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city']==$_smarty_tpl->tpl_vars['city']->value['city']||$_smarty_tpl->tpl_vars['city']->value['active']=="Y")) {?>
                                <?php $_smarty_tpl->tpl_vars["input_city"] = new Smarty_variable($_smarty_tpl->tpl_vars['city']->value['city'], null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["input_city"] = new Smarty_variable($_smarty_tpl->tpl_vars['client_city']->value, null, 0);?>
                            <?php }?>
                            <option <?php if (!$_smarty_tpl->tpl_vars['client_city']->value&&($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city']==$_smarty_tpl->tpl_vars['city']->value['city']||$_smarty_tpl->tpl_vars['city']->value['active']=="Y")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?> 
                         <option label="" <?php if ($_smarty_tpl->tpl_vars['client_city']->value) {?>selected="selected"<?php }?> value="client_city">-- <?php echo $_smarty_tpl->__("other_town");?>
 --</option>
                    </select>
                </div>

                <div id="client_city" class="control-group <?php if (!$_smarty_tpl->tpl_vars['client_city']->value) {?>hidden<?php }?>">
                    <label><?php echo $_smarty_tpl->__("other_town");?>
</label>
                    <input type="text" class="" id="elm_city_text" name="customer_location[city]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_city']->value, ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            <?php } else { ?>
                <div class="control-group">
                    <label><?php echo $_smarty_tpl->__("city");?>
</label>
                    <input type="text" class="" id="elm_city" name="customer_location[city]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
" autocomplete="on" />
                </div>
            <?php }?>

        <!--change_city--></div>



        <div class="control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>class="nowrap"<?php }?>><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
            <input type="text" class="input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox") {?>25<?php } else { ?>20<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("get_rates"),'but_name'=>"dispatch[checkout.shipping_estimation]",'but_role'=>"text",'but_id'=>"but_get_rates"), 0);?>

        </div>

        </form>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
            <div class="clear"></div>
            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!$_smarty_tpl->tpl_vars['cart']->value['company_shipping_failed']) {?>
                <?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
                    <div class="cart-shipping-title"><?php echo $_smarty_tpl->__("select_shipping_method");?>
</div>
                <?php }?>
                <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_shipping_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input type="hidden" name="redirect_mode" value="cart" />
                <input type="hidden" name="result_ids" value="checkout_totals" />

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                    <p>
                    <strong><?php echo $_smarty_tpl->__("vendor");?>
:&nbsp;</strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['group']->value['name'])===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), ENT_QUOTES, 'UTF-8');?>

                    </p>
                    <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                        <ul class="bullets-list">
                        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </li>
                        <?php } ?>
                        </ul>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['all_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                                <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
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

                            <p>
                                <input type="radio" class="valign" id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onclick="fn_calculate_total_shipping();" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 /><label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" class="valign"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</label>
                            </p>
                        <?php } ?>

                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                            <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['free_shipping']) {?>
                            <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                        <?php } else { ?>
                            <p><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                        <?php }?>
                    <?php }?>

                <?php } ?>

                <p><strong><?php echo $_smarty_tpl->__("total");?>
:</strong>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"price"), 0);?>
</p>
            
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("select"),'but_role'=>"text",'but_name'=>"dispatch[checkout.update_shipping]",'but_id'=>"but_select_shipping",'but_meta'=>"cm-dialog-closer"), 0);?>

                </div>

                </form>
            <?php } else { ?>
                <p class="error-text">
                    <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                </p>
            <?php }?>

        <?php }?>
        <!--shipping_estimation<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>_sidebox<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
<div class="buttons-container" id="shipping_estimation_buttons">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
        <div class="float-right rates-button">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("recalculate_rates"),'but_external_click_id'=>"but_get_rates",'but_role'=>"text",'but_meta'=>"nobg cm-external-click"), 0);?>

        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("select_shipping_method"),'but_external_click_id'=>"but_select_shipping",'but_meta'=>"cm-external-click cm-dialog-closer"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("get_rates"),'but_external_click_id'=>"but_get_rates",'but_meta'=>"cm-external-click"), 0);?>

    <?php }?>
<!--shipping_estimation_buttons--></div>
<?php }?>



       <script type="text/javascript"  class="cm-ajax-force">
        //<![CDATA[

        function fn_get_cities(change) 
        {

            var check_country = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val();
            var check_state = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val();

            var url = fn_url('city.shipping_estimation_city');

            url += '&check_country=' + check_country + '&check_state=' +  check_state ;

            var check_city = $("#elm_city").val();
            url += '&check_city=' + check_city;

            $.ceAjax('request', url, {
                result_ids: 'change_city',
                method: 'post'
            });
        }

        (function(_, $) {

            $(document).ready(function() {
                fn_get_cities(false);

                $(_.doc).on('change', '#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', function() {
                        $('#elm_city').val('');
                        $('#elm_city_text').val('');
                        fn_get_cities(true);
                });

                $(_.doc).on('change', '#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', function() {
                        $('#elm_city').val('');
                        $('#elm_city_text').val('');
                        fn_get_cities(true);
                });

                $(_.doc).on('change', '#elm_city', function() {
                    var inp = $('#elm_city').val();
                    if (inp == 'client_city') {
                        $('#client_city').removeClass('hidden');
                        $('#elm_city_text').val('');
                    } else {
                        $('#elm_city_text').val(inp);             
                        $('#client_city').addClass('hidden');
                    }
                });

            });

        }(Tygh, Tygh.$));
        //]]>
        </script>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_cities/overrides/views/checkout/components/shipping_estimation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_cities/overrides/views/checkout/components/shipping_estimation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><!-- Шаблон shipping_estimation.tpl перезаписан модулем rus_cities (/templates/addons/rus_cities/overrides/views/checkout/components/shipping_estimation.tpl) -->



<script type="text/javascript">
//<![CDATA[
function fn_calculate_total_shipping() 
{
    var $ = Tygh.$;
    params = [];
    parents = $('#shipping_estimation');
    radio = $('input[type=radio]:checked', parents);

    $.each(radio, function(id, elm) {
        params.push({name: elm.name, value: elm.value});
    });

    params.push({name: $('#elm_country').prop('name'), value: $('#elm_country').val()});
    params.push({name: $('#elm_state').prop('name'), value: $('#elm_state').val()});
    params.push({name: $('#elm_zipcode').prop('name'), value: $('#elm_zipcode').val()});

    url = fn_url('checkout.shipping_estimation');

    for (i in params) {
        url += '&' + params[i]['name'] + '=' + escape(params[i]['value']);
    }

    $.ceAjax('request', url, {
        result_ids: 'shipping_estimation',
        method: 'post'
    });
}
//]]>
</script>


<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>
    <?php $_smarty_tpl->tpl_vars["prefix"] = new Smarty_variable("sidebox_", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("hidden", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("buttons-container", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["class_suffix"] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value['user_data']&&$_SESSION['cart']['user_data']) {?>
    <?php $_smarty_tpl->tpl_vars["cart"] = new Smarty_variable($_SESSION['cart'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>

<div id="est_box<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" align="right">
    <div class="estimation-box" align="left">
    <h2><?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
</h2>
    <?php }?>
        <div id="shipping_estimation<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>_sidebox<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php if (!Smarty::$_smarty_vars['capture']['states_built']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("states_built", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>

        <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
estimation_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?><input type="hidden" name="location" value="sidebox" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><input type="hidden" name="additional_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <input type="hidden" name="result_ids" value="shipping_estimation<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>_sidebox<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
,shipping_estimation_buttons" />
        <div class="control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
            <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[country]">
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                <?php $_smarty_tpl->tpl_vars["countries"] = new Smarty_variable(fn_get_simple_countries(1), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']==$_smarty_tpl->tpl_vars['code']->value)||(!$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']&&$_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['settings']->value['General']['default_country'])) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>

        <?php $_smarty_tpl->tpl_vars["_state"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_state'] : $tmp), null, 0);?>
        <div class="control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
            <select class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[state]">
                <option label="" value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            </select>
            <input type="text" class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 input-text hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_d" name="customer_location[state]" size="<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox") {?>32<?php } else { ?>20<?php }?>" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
        </div>



        <div id="change_city">

            <?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
                <div class="control-group">
                    <label><?php echo $_smarty_tpl->__("city");?>
</label>
                    <select class="" id="elm_city" name="customer_location[city]">
                        <option label="" value="">-- <?php echo $_smarty_tpl->__("select_city");?>
 --</option>
                        <?php  $_smarty_tpl->tpl_vars["city"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["city"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["city"]->key => $_smarty_tpl->tpl_vars["city"]->value) {
$_smarty_tpl->tpl_vars["city"]->_loop = true;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['client_city']->value&&($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city']==$_smarty_tpl->tpl_vars['city']->value['city']||$_smarty_tpl->tpl_vars['city']->value['active']=="Y")) {?>
                                <?php $_smarty_tpl->tpl_vars["input_city"] = new Smarty_variable($_smarty_tpl->tpl_vars['city']->value['city'], null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["input_city"] = new Smarty_variable($_smarty_tpl->tpl_vars['client_city']->value, null, 0);?>
                            <?php }?>
                            <option <?php if (!$_smarty_tpl->tpl_vars['client_city']->value&&($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city']==$_smarty_tpl->tpl_vars['city']->value['city']||$_smarty_tpl->tpl_vars['city']->value['active']=="Y")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?> 
                         <option label="" <?php if ($_smarty_tpl->tpl_vars['client_city']->value) {?>selected="selected"<?php }?> value="client_city">-- <?php echo $_smarty_tpl->__("other_town");?>
 --</option>
                    </select>
                </div>

                <div id="client_city" class="control-group <?php if (!$_smarty_tpl->tpl_vars['client_city']->value) {?>hidden<?php }?>">
                    <label><?php echo $_smarty_tpl->__("other_town");?>
</label>
                    <input type="text" class="" id="elm_city_text" name="customer_location[city]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_city']->value, ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            <?php } else { ?>
                <div class="control-group">
                    <label><?php echo $_smarty_tpl->__("city");?>
</label>
                    <input type="text" class="" id="elm_city" name="customer_location[city]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
" autocomplete="on" />
                </div>
            <?php }?>

        <!--change_city--></div>



        <div class="control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>class="nowrap"<?php }?>><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
            <input type="text" class="input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox") {?>25<?php } else { ?>20<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("get_rates"),'but_name'=>"dispatch[checkout.shipping_estimation]",'but_role'=>"text",'but_id'=>"but_get_rates"), 0);?>

        </div>

        </form>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
            <div class="clear"></div>
            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!$_smarty_tpl->tpl_vars['cart']->value['company_shipping_failed']) {?>
                <?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
                    <div class="cart-shipping-title"><?php echo $_smarty_tpl->__("select_shipping_method");?>
</div>
                <?php }?>
                <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_shipping_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input type="hidden" name="redirect_mode" value="cart" />
                <input type="hidden" name="result_ids" value="checkout_totals" />

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                    <p>
                    <strong><?php echo $_smarty_tpl->__("vendor");?>
:&nbsp;</strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['group']->value['name'])===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), ENT_QUOTES, 'UTF-8');?>

                    </p>
                    <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                        <ul class="bullets-list">
                        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </li>
                        <?php } ?>
                        </ul>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['all_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                                <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
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

                            <p>
                                <input type="radio" class="valign" id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onclick="fn_calculate_total_shipping();" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 /><label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" class="valign"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</label>
                            </p>
                        <?php } ?>

                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                            <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['free_shipping']) {?>
                            <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                        <?php } else { ?>
                            <p><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                        <?php }?>
                    <?php }?>

                <?php } ?>

                <p><strong><?php echo $_smarty_tpl->__("total");?>
:</strong>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"price"), 0);?>
</p>
            
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("select"),'but_role'=>"text",'but_name'=>"dispatch[checkout.update_shipping]",'but_id'=>"but_select_shipping",'but_meta'=>"cm-dialog-closer"), 0);?>

                </div>

                </form>
            <?php } else { ?>
                <p class="error-text">
                    <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                </p>
            <?php }?>

        <?php }?>
        <!--shipping_estimation<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>_sidebox<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
<div class="buttons-container" id="shipping_estimation_buttons">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
        <div class="float-right rates-button">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("recalculate_rates"),'but_external_click_id'=>"but_get_rates",'but_role'=>"text",'but_meta'=>"nobg cm-external-click"), 0);?>

        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("select_shipping_method"),'but_external_click_id'=>"but_select_shipping",'but_meta'=>"cm-external-click cm-dialog-closer"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("get_rates"),'but_external_click_id'=>"but_get_rates",'but_meta'=>"cm-external-click"), 0);?>

    <?php }?>
<!--shipping_estimation_buttons--></div>
<?php }?>



       <script type="text/javascript"  class="cm-ajax-force">
        //<![CDATA[

        function fn_get_cities(change) 
        {

            var check_country = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val();
            var check_state = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val();

            var url = fn_url('city.shipping_estimation_city');

            url += '&check_country=' + check_country + '&check_state=' +  check_state ;

            var check_city = $("#elm_city").val();
            url += '&check_city=' + check_city;

            $.ceAjax('request', url, {
                result_ids: 'change_city',
                method: 'post'
            });
        }

        (function(_, $) {

            $(document).ready(function() {
                fn_get_cities(false);

                $(_.doc).on('change', '#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', function() {
                        $('#elm_city').val('');
                        $('#elm_city_text').val('');
                        fn_get_cities(true);
                });

                $(_.doc).on('change', '#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', function() {
                        $('#elm_city').val('');
                        $('#elm_city_text').val('');
                        fn_get_cities(true);
                });

                $(_.doc).on('change', '#elm_city', function() {
                    var inp = $('#elm_city').val();
                    if (inp == 'client_city') {
                        $('#client_city').removeClass('hidden');
                        $('#elm_city_text').val('');
                    } else {
                        $('#elm_city_text').val(inp);             
                        $('#client_city').addClass('hidden');
                    }
                });

            });

        }(Tygh, Tygh.$));
        //]]>
        </script>

<?php }?><?php }} ?>
