<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:04:17
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_yandex_market/hooks/categories/detailed_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:623916533ebbe1034754-74526155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b27aa7601fc7258f3e80ea5541ed1a427c565cb' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_yandex_market/hooks/categories/detailed_content.pre.tpl',
      1 => 1396612050,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '623916533ebbe1034754-74526155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
    'addons' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ebbe1088633_22055509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ebbe1088633_22055509')) {function content_533ebbe1088633_22055509($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml','yml_disable_cat','yml_market_category','yml_market_category_link','yml_market_category_list_title'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("yml"),'target'=>"#yandex_market_addon"), 0);?>

<div id="yandex_market_addon" class="in collapse">
    <div class="control-group">
        <label class="control-label" for="yml_export"><?php echo $_smarty_tpl->__("yml_disable_cat");?>
:</label>
        <div class="controls">
        <input type="hidden" value="N" name="category_data[yml_disable_cat]"/>
        <input type="checkbox" class="cm-toggle-checkbox" value="Y" name="category_data[yml_disable_cat]" id="yml_export" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['yml_disable_cat']=="Y") {?> checked="checked"<?php }?> />
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_market']['market_category']=="Y") {?>
    <div class="control-group cm-no-hide-input">
        <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml_market_category");?>
:</label>
        <div class="controls" id="product_market_category">
            <input type="text" name="category_data[yml_market_category]" id="market_category_input" size="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['yml_market_category'], ENT_QUOTES, 'UTF-8');?>
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
        
<?php }?><?php }} ?>
