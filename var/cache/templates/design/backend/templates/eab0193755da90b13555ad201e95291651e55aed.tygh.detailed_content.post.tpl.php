<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:22
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_yandex_market/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591924125533e9cf6e3ea83-74956233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab0193755da90b13555ad201e95291651e55aed' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_yandex_market/hooks/products/detailed_content.post.tpl',
      1 => 1396612050,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1591924125533e9cf6e3ea83-74956233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'show_update_for_all' => 0,
    'addons' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf6f3ad24_51461504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf6f3ad24_51461504')) {function content_533e9cf6f3ad24_51461504($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml','yml_brand','yml_model','yml_type_prefix','yml_sales_notes','yml_market_category','yml_market_category_link','yml_market_category_list_title','yml_country','yml_export_yes','yml_true','yml_false','yml_delivery','yml_true','yml_false','yml_store','yml_true','yml_false','yml_pickup','yml_true','yml_false','yml_bid','yml_cbid'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("yml"),'target'=>"#yandex_market_addon"), 0);?>

<div id="yandex_market_addon" class="in collapse">
    <div class="control-group cm-no-hide-input">
        <label for="product_description_brand" class="control-label"><?php echo $_smarty_tpl->__("yml_brand");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_brand]" id="product_description_brand" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_brand'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_model" class="control-label"><?php echo $_smarty_tpl->__("yml_model");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_model]" id="product_description_model" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_model'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_market']['type_prefix']=="Y") {?>
        <div class="control-group cm-no-hide-input">
            <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml_type_prefix");?>
:</label>
            <div class="controls"><input type="text" name="product_data[yml_type_prefix]" id="product_type_prefix" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_type_prefix'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>

            </div>
        </div>  
    <?php }?>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_yml_sales_notes" class="control-label"><?php echo $_smarty_tpl->__("yml_sales_notes");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_sales_notes]" id="product_description_yml_sales_notes" size="50" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_sales_notes'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_market']['market_category']=="Y") {?>
        <div class="control-group cm-no-hide-input">
            <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml_market_category");?>
:</label>
            <div class="controls" id="product_market_category">
                <input type="text" name="product_data[yml_market_category]" id="market_category_input" size="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_market_category'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" /></br>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"product_market_category",'href'=>"products.market_category",'link_text'=>__("yml_market_category_link"),'text'=>__("yml_market_category_list_title"),'act'=>"link"), 0);?>

            </div>
        </div>  

        <script type="text/javascript"  class="cm-ajax-force">
        //<![CDATA[

                Tygh.$("#market_category_input").autocomplete(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                    source: function( request, response ) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        $.ceAjax('request', fn_url('products.market_category_autocomplete?q=' + request.term), <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
 
                            callback: function(data) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                response(data.autocomplete);
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

        //]]>
        </script>

    <?php }?>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_origin_country" class="control-label"><?php echo $_smarty_tpl->__("yml_country");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_origin_country]" id="product_description_origin_country" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_origin_country'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_yml_export_yes" class="control-label"><?php echo $_smarty_tpl->__("yml_export_yes");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_export_yes]" id="product_description_yml_export_yes">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_export_yes']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_export_yes']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_delivery" class="control-label"><?php echo $_smarty_tpl->__("yml_delivery");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_delivery]" id="product_description_delivery">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_delivery']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_delivery']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_store" class="control-label"><?php echo $_smarty_tpl->__("yml_store");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_store]" id="product_description_store">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_store']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_store']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_pickup" class="control-label"><?php echo $_smarty_tpl->__("yml_pickup");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_pickup]" id="product_description_pickup">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_pickup']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_pickup']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_bid" class="control-label"><?php echo $_smarty_tpl->__("yml_bid");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[yml_bid]" id="product_description_bid" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_bid'], ENT_QUOTES, 'UTF-8');?>
" class="input-small" />
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_cbid" class="control-label"><?php echo $_smarty_tpl->__("yml_cbid");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[yml_cbid]" id="product_description_cbid" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_cbid'], ENT_QUOTES, 'UTF-8');?>
" class="input-small" />
        </div>
    </div>

</div>
<?php }} ?>
