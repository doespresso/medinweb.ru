<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:06
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/currencies/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116861427533e9b069c3c44-31572733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e154ad5529cab4a21b41b6ac9003875071c4a66' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/currencies/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '116861427533e9b069c3c44-31572733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'currencies_data' => 0,
    'currency' => 0,
    'currency_details' => 0,
    '_href_delete' => 0,
    'runtime' => 0,
    'primary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b06b18982_42854441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b06b18982_42854441')) {function content_533e9b06b18982_42854441($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('currency_rate','currency_sign','editing_currency','no_data','new_currency','add_currency','exchange_rate','currencies'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <div class="items-container cm-sortable <?php if (!fn_allow_save_object('','',true)) {?> cm-hide-inputs<?php }?>"
         data-ca-sortable-table="currencies" data-ca-sortable-id-name="currency_id" id="manage_currencies_list">
        <?php if ($_smarty_tpl->tpl_vars['currencies_data']->value) {?>
            <table class="table table-middle table-objects table-striped">
                <tbody>
                <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary']=="Y") {?>
                        <?php $_smarty_tpl->tpl_vars["_href_delete"] = new Smarty_variable('', null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["_href_delete"] = new Smarty_variable("currencies.delete?currency_id=".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id']), null, 0);?>
                    <?php }?>
                    <?php ob_start();?><?php echo $_smarty_tpl->__("currency_rate");?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->__("currency_sign");?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["currency_details"] = new Smarty_variable("<span>".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_code'])."</span>, ".$_tmp1.": <span>".((string)$_smarty_tpl->tpl_vars['currency']->value['coefficient'])."</span>, ".$_tmp2.": <span>".((string)$_smarty_tpl->tpl_vars['currency']->value['symbol'])."</span>", null, 0);?>

                    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_currency");?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['currency']->value['currency_id'],'text'=>$_smarty_tpl->tpl_vars['currency']->value['description'],'details'=>$_smarty_tpl->tpl_vars['currency_details']->value,'href'=>"currencies.update?currency_id=".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'href_delete'=>$_smarty_tpl->tpl_vars['_href_delete']->value,'delete_data'=>$_smarty_tpl->tpl_vars['currency']->value['currency_code'],'delete_target_id'=>"manage_currencies_list",'header_text'=>$_tmp3.": ".((string)$_smarty_tpl->tpl_vars['currency']->value['description']),'table'=>"currencies",'object_id_name'=>"currency_id",'status'=>$_smarty_tpl->tpl_vars['currency']->value['status'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id']),'no_table'=>true,'non_editable'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'is_view_link'=>true,'draggable'=>true,'hidden'=>true,'update_controller'=>"currencies",'st_result_ids'=>"manage_currencies_list"), 0);?>

                <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--manage_currencies_list--></div>
    
    <div class="buttons-container">
        <?php $_smarty_tpl->_capture_stack[0][] = array("extra_tools", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:import_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:import_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:import_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    </div>
    <?php if (fn_allow_save_object('','',true)) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/currencies/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('currency'=>array()), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_currency",'text'=>__("new_currency"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>__("add_currency"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("exchange_rate");?>
</h6>
        <ul class="unstyled currencies-rate" id="currencies_stock_exchange">
        </ul>
    </div>
    <a href="http://finance.yahoo.com/" class="currencies-powered" target="_blank" title="Yahoo finance"></a>
    <script type="text/javascript">

        var exchangeRate = {

            primary_currency: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['primary_currency']->value, ENT_QUOTES, 'UTF-8');?>
",

            init: function() {

                // Check if primary_currency is valid else use USD as default value
                this.getRate(this.primary_currency, 'USD', "exchangeRate.getAllCurrency");

                $.ceEvent('on', 'ce.form_confirm', function(elm) {
                    var code = elm.data('caParams');

                    if(code !== 'EUR' && code !== 'GBP' && code !== 'CHF') {
                        $('#currencies_stock_exchange li:contains("' + code + '")').remove();
                    }
                });
            },

            getAllCurrency: function(data){
                var self = this;
                var currencies = ['USD','EUR','GBP','CHF'];

                if(parseFloat(data.query.results.row.rate, 10) == 0) {
                    this.primary_currency = 'USD';
                }

                <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['currency_code']!="EUR"&&$_smarty_tpl->tpl_vars['currency']->value['currency_code']!="GBP"&&$_smarty_tpl->tpl_vars['currency']->value['currency_code']!="CHF"&&$_smarty_tpl->tpl_vars['currency']->value['currency_code']!="USD") {?>
                        currencies.push("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
");
                    <?php }?>
                <?php } ?>

                $.each(currencies, function(index, value) {
                    self.getRate(value, self.primary_currency);
                });
            },

            getRate: function (from, to, callback) {
                var script = document.createElement('script');
                callback = callback || "exchangeRate.parseExchangeRate";

                script.setAttribute('src', "http://query.yahooapis.com/v1/public/yql?q=select%20rate%2Cname%20from%20csv%20where%20url%3D'http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes%3Fs%3D" + from + to + "%253DX%26f%3Dl1n'%20and%20columns%3D'rate%2Cname'&format=json&callback=" + callback);
                document.body.appendChild(script);
            },

            parseExchangeRate: function(data) {

                var name = Tygh.$.trim(data.query.results.row.name.split('to')[0]);
                var rate = parseFloat(data.query.results.row.rate, 10);
                var container = Tygh.$('#currencies_stock_exchange');

                if(rate !== 0 && name != this.primary_currency) {
                    function asc_sort(a, b){
                        return ($(b).text()) < ($(a).text()) ? 1 : -1;
                    }
                    container.append('<li>' + name + ' / '+ this.primary_currency +' <span class="pull-right muted">'+ rate +'</span></li>');
                    container.find('li').sort(asc_sort).appendTo(container);
                }
            }
        };

        exchangeRate.init();
    </script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("currencies"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
