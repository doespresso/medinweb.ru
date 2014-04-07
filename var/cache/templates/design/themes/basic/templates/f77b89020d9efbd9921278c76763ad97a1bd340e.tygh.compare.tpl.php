<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 20:58:57
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/product_features/compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8313209534187d116da03-18321982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f77b89020d9efbd9921278c76763ad97a1bd340e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/product_features/compare.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8313209534187d116da03-18321982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'comparison_data' => 0,
    'continue_url' => 0,
    'action' => 0,
    'config' => 0,
    'product' => 0,
    'return_current_url' => 0,
    'settings' => 0,
    'obj_id' => 0,
    'old_price' => 0,
    'price' => 0,
    'clean_price' => 0,
    'group_features' => 0,
    '_feature' => 0,
    'id' => 0,
    'group_id' => 0,
    'feature' => 0,
    'var' => 0,
    'r_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534187d1870976_26954339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534187d1870976_26954339')) {function content_534187d1870976_26954339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.html_checkboxes.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('no_products_selected','all_features','all_features','similar_only','similar_only','different_only','different_only','remove','remove','remove','clear_list','add_feature','add','compare','no_products_selected','all_features','all_features','similar_only','similar_only','different_only','different_only','remove','remove','remove','clear_list','add_feature','add','compare'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="compare">
<?php if (!$_smarty_tpl->tpl_vars['comparison_data']->value) {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_products_selected");?>
</p>
    <div class="compare-buttons">
        <div class="buttons-container buttons-container-empty">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0);?>

        </div>
    </div>
<?php } else { ?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <div class="compare-menu">
        <ul>
            <li><?php if ($_smarty_tpl->tpl_vars['action']->value!="show_all") {?><a href="<?php echo htmlspecialchars(fn_url("product_features.compare.show_all"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("all_features");?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("all_features");?>
</span><?php }?></li>
            <li><?php if ($_smarty_tpl->tpl_vars['action']->value!="similar_only") {?><a href="<?php echo htmlspecialchars(fn_url("product_features.compare.similar_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("similar_only");?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("similar_only");?>
</span><?php }?></li>
            <li><?php if ($_smarty_tpl->tpl_vars['action']->value!="different_only") {?><a href="<?php echo htmlspecialchars(fn_url("product_features.compare.different_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("different_only");?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("different_only");?>
</span><?php }?></li>
        </ul>
    </div>
    <?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>sizeof($_smarty_tpl->tpl_vars['comparison_data']->value['products']),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <div class="compare-products">
        <div class="compare-products-l"></div>
        <div class="compare-products-wrapper">
        <table class="compare-products-table">
            <tr>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <td>
                    <div class="delete"><a href="<?php echo htmlspecialchars(fn_url("product_features.delete_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class=" remove"  title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i><span><?php echo $_smarty_tpl->__("remove");?>
</span></a></div>
                    <div class="product"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'obj_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0);?>
</a></div>
                </td>
        <?php } ?>
            </tr>

            <tr>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <td>
                <div class="title"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a></div>
            </td>
        <?php } ?>
            </tr>

            <tr>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_old_price'=>true,'show_price_values'=>true,'show_price'=>true,'show_clean_price'=>true), 0);?>

            <td>
                <div class="product">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
<?php }?>

                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                </div>
            </td>
        <?php } ?>
            </tr>
            <tr class="compare-add">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('min_qty'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_add_to_cart'=>true,'but_role'=>"action",'hide_price'=>true), 0);?>
</td>
                <?php } ?>
            </tr>
        </table>
    
    <div class="compare-table">
        <table>
        <?php  $_smarty_tpl->tpl_vars["group_features"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group_features"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['product_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group_features"]->key => $_smarty_tpl->tpl_vars["group_features"]->value) {
$_smarty_tpl->tpl_vars["group_features"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_id"]->value = $_smarty_tpl->tpl_vars["group_features"]->key;
?>
        <?php  $_smarty_tpl->tpl_vars["_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_feature"]->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_feature"]->key => $_smarty_tpl->tpl_vars["_feature"]->value) {
$_smarty_tpl->tpl_vars["_feature"]->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars["_feature"]->key;
?>
        <tr>
            <td class="compare-table-sort">
                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value, ENT_QUOTES, 'UTF-8');?>
:</strong>
                    <a href="<?php echo htmlspecialchars(fn_url("product_features.delete_feature?feature_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="icon-cancel-circle" title="<?php echo $_smarty_tpl->__("remove");?>
"></a></td>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <td class="left-border">

            <?php if ($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value]) {?>
            <?php $_smarty_tpl->tpl_vars["feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value], null, 0);?>
            <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['group_id']->value]['subfeatures'][$_smarty_tpl->tpl_vars['id']->value], null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="C") {?><span class="compare-checkbox" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value']=="Y") {?><i class="icon-ok"></i><?php }?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="D") {?><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="M"&&$_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="float-left compare-list"><?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li><span class="compare-checkbox" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-ok"></i></span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</li><?php }?><?php } ?></ul><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="S"||$_smarty_tpl->tpl_vars['feature']->value['feature_type']=="E") {?><?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } ?><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="N"||$_smarty_tpl->tpl_vars['feature']->value['feature_type']=="O") {?><?php echo htmlspecialchars((($tmp = @floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']))===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value'])===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
<?php }?>
        <?php } ?>
        </tr>
        <?php } ?>
        <?php } ?>
        </table>
        </div>
    
        </div>
    </div>

    <div class="compare-buttons">
        <div class="buttons-container">
            <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(fn_url(''), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("clear_list"),'but_href'=>"product_features.clear_list?redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value)), 0);?>
&nbsp;&nbsp;&nbsp;
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0);?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("add_feature")), 0);?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_feature_form">
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php echo smarty_function_html_checkboxes(array('name'=>"add_features",'options'=>$_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features'],'columns'=>"4"),$_smarty_tpl);?>

    <div class="buttons-container margin-top">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("add"),'but_name'=>"dispatch[product_features.add_feature]"), 0);?>

    </div>
    </form>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("compare");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/compare.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/compare.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="compare">
<?php if (!$_smarty_tpl->tpl_vars['comparison_data']->value) {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_products_selected");?>
</p>
    <div class="compare-buttons">
        <div class="buttons-container buttons-container-empty">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0);?>

        </div>
    </div>
<?php } else { ?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <div class="compare-menu">
        <ul>
            <li><?php if ($_smarty_tpl->tpl_vars['action']->value!="show_all") {?><a href="<?php echo htmlspecialchars(fn_url("product_features.compare.show_all"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("all_features");?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("all_features");?>
</span><?php }?></li>
            <li><?php if ($_smarty_tpl->tpl_vars['action']->value!="similar_only") {?><a href="<?php echo htmlspecialchars(fn_url("product_features.compare.similar_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("similar_only");?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("similar_only");?>
</span><?php }?></li>
            <li><?php if ($_smarty_tpl->tpl_vars['action']->value!="different_only") {?><a href="<?php echo htmlspecialchars(fn_url("product_features.compare.different_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("different_only");?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("different_only");?>
</span><?php }?></li>
        </ul>
    </div>
    <?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>sizeof($_smarty_tpl->tpl_vars['comparison_data']->value['products']),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <div class="compare-products">
        <div class="compare-products-l"></div>
        <div class="compare-products-wrapper">
        <table class="compare-products-table">
            <tr>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <td>
                    <div class="delete"><a href="<?php echo htmlspecialchars(fn_url("product_features.delete_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class=" remove"  title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i><span><?php echo $_smarty_tpl->__("remove");?>
</span></a></div>
                    <div class="product"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'obj_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0);?>
</a></div>
                </td>
        <?php } ?>
            </tr>

            <tr>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <td>
                <div class="title"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a></div>
            </td>
        <?php } ?>
            </tr>

            <tr>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_old_price'=>true,'show_price_values'=>true,'show_price'=>true,'show_clean_price'=>true), 0);?>

            <td>
                <div class="product">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
<?php }?>

                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                </div>
            </td>
        <?php } ?>
            </tr>
            <tr class="compare-add">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('min_qty'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_add_to_cart'=>true,'but_role'=>"action",'hide_price'=>true), 0);?>
</td>
                <?php } ?>
            </tr>
        </table>
    
    <div class="compare-table">
        <table>
        <?php  $_smarty_tpl->tpl_vars["group_features"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group_features"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['product_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group_features"]->key => $_smarty_tpl->tpl_vars["group_features"]->value) {
$_smarty_tpl->tpl_vars["group_features"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_id"]->value = $_smarty_tpl->tpl_vars["group_features"]->key;
?>
        <?php  $_smarty_tpl->tpl_vars["_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_feature"]->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_feature"]->key => $_smarty_tpl->tpl_vars["_feature"]->value) {
$_smarty_tpl->tpl_vars["_feature"]->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars["_feature"]->key;
?>
        <tr>
            <td class="compare-table-sort">
                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value, ENT_QUOTES, 'UTF-8');?>
:</strong>
                    <a href="<?php echo htmlspecialchars(fn_url("product_features.delete_feature?feature_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="icon-cancel-circle" title="<?php echo $_smarty_tpl->__("remove");?>
"></a></td>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comparison_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <td class="left-border">

            <?php if ($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value]) {?>
            <?php $_smarty_tpl->tpl_vars["feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value], null, 0);?>
            <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['group_id']->value]['subfeatures'][$_smarty_tpl->tpl_vars['id']->value], null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="C") {?><span class="compare-checkbox" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value']=="Y") {?><i class="icon-ok"></i><?php }?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="D") {?><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="M"&&$_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="float-left compare-list"><?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li><span class="compare-checkbox" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-ok"></i></span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</li><?php }?><?php } ?></ul><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="S"||$_smarty_tpl->tpl_vars['feature']->value['feature_type']=="E") {?><?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } ?><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="N"||$_smarty_tpl->tpl_vars['feature']->value['feature_type']=="O") {?><?php echo htmlspecialchars((($tmp = @floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']))===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value'])===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
<?php }?>
        <?php } ?>
        </tr>
        <?php } ?>
        <?php } ?>
        </table>
        </div>
    
        </div>
    </div>

    <div class="compare-buttons">
        <div class="buttons-container">
            <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(fn_url(''), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("clear_list"),'but_href'=>"product_features.clear_list?redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value)), 0);?>
&nbsp;&nbsp;&nbsp;
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0);?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("add_feature")), 0);?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_feature_form">
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php echo smarty_function_html_checkboxes(array('name'=>"add_features",'options'=>$_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features'],'columns'=>"4"),$_smarty_tpl);?>

    <div class="buttons-container margin-top">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("add"),'but_name'=>"dispatch[product_features.add_feature]"), 0);?>

    </div>
    </form>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("compare");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php }?><?php }} ?>
