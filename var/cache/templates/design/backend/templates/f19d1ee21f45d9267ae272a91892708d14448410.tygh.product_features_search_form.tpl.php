<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:50:36
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/product_features/components/product_features_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1137512474533e9c8c5cfc85-80097750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f19d1ee21f45d9267ae272a91892708d14448410' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/product_features/components/product_features_search_form.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1137512474533e9c8c5cfc85-80097750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    's_cid' => 0,
    'group_features' => 0,
    'group_feature' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c8c6f3eb5_83554198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c8c6f3eb5_83554198')) {function content_533e9c8c6f3eb5_83554198($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('search','category','all_categories','feature','type','checkbox','single','checkbox','multiple','selectbox','text','selectbox','number','selectbox','brand_type','others','text','others','number','others','date','display_on','product','catalog_pages','group','ungroupped_features'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="product_features_search_form" method="get">

<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("category");?>
:</label>
    <div class="break clear correct-picker-but">
    <?php if (fn_show_picker("categories",@constant('CATEGORY_THRESHOLD'))) {?>
        <?php if ($_smarty_tpl->tpl_vars['search']->value['category_ids']) {?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['category_ids'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable("0", null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"category_ids",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'show_root'=>true,'default_name'=>__("all_categories"),'extra'=>''), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"category_ids",'id'=>$_smarty_tpl->tpl_vars['search']->value['category_ids']), 0);?>

    <?php }?>
    </div>
</div>
<div class="sidebar-field">
    <label for="fname"><?php echo $_smarty_tpl->__("feature");?>
:</label>
    <input type="text" name="description" id="fname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['description'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
<div class="group form-horizontal">
    <?php echo $_smarty_tpl->__("type");?>

    
        <table width="100%">
            <tr class="nowrap">
                <td><label for="elm_checkbox_single" class="checkbox"><input id="elm_checkbox_single"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("C",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="C"/><?php echo $_smarty_tpl->__("checkbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("single");?>
</label></td>
                <td><label for="elm_checkbox_multiple" class="checkbox"><input id="elm_checkbox_multiple" type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("M",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="M"/><?php echo $_smarty_tpl->__("checkbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("multiple");?>
</label></td>
                <td><label for="elm_selectbox_text" class="checkbox"><input id="elm_selectbox_text"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("S",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="S"/><?php echo $_smarty_tpl->__("selectbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("text");?>
</label></td>
                <td><label for="elm_selectbox_number" class="checkbox"><input id="elm_selectbox_number"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("N",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="N"/><?php echo $_smarty_tpl->__("selectbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("number");?>
</label></td>
            </tr>
            <tr>
            <td><label for="elm_selectbox_brand_type" class="checkbox"><input id="elm_selectbox_brand_type"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("E",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="E"/><?php echo $_smarty_tpl->__("selectbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("brand_type");?>
</label></td>
                <td><label for="elm_others_text" class="checkbox"><input id="elm_others_text"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("T",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="T"/><?php echo $_smarty_tpl->__("others");?>
:&nbsp;<?php echo $_smarty_tpl->__("text");?>
</label></td>
                <td><label for="elm_others_number" class="checkbox"><input id="elm_others_number"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("O",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="O"/><?php echo $_smarty_tpl->__("others");?>
:&nbsp;<?php echo $_smarty_tpl->__("number");?>
</label></td>
                <td><label for="elm_others_date" class="checkbox"><input id="elm_others_date"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array("D",$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="D"/><?php echo $_smarty_tpl->__("others");?>
:&nbsp;<?php echo $_smarty_tpl->__("date");?>
</label></td>
            </tr>
        </table>
    
</div>

<div class="group form-horizontal">
    <div class="control-group">
    <label class="control-label" for="elm_display_on"><?php echo $_smarty_tpl->__("display_on");?>
:</label>
    <div class="controls">
    <select name="display_on" id="elm_display_on">
        <option value="">--</option>
        <option value="product" <?php if ($_smarty_tpl->tpl_vars['search']->value['display_on']=="product") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product");?>
</option>
        <option value="catalog" <?php if ($_smarty_tpl->tpl_vars['search']->value['display_on']=="catalog") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("catalog_pages");?>
</option>
    </select>
    </div>
    </div>

    <div class="control-group">
    <label for="elm_parent_id" class="control-label"><?php echo $_smarty_tpl->__("group");?>
:</label>
    <div class="controls">
    <select name="parent_id" id="elm_parent_id">
        <option value="">--</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['parent_id']==="0") {?>selected="selected"<?php }?> value="0"><?php echo $_smarty_tpl->__("ungroupped_features");?>
</option>
        <?php  $_smarty_tpl->tpl_vars["group_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group_feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group_feature"]->key => $_smarty_tpl->tpl_vars["group_feature"]->value) {
$_smarty_tpl->tpl_vars["group_feature"]->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id']==$_smarty_tpl->tpl_vars['search']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
    </div>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"product_features"), 0);?>


</form>
</div><?php }} ?>
