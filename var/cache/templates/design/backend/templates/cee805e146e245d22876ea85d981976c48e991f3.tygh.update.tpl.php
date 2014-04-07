<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:50:35
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/product_features/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2028152426533e9c8b8c5741-71748210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cee805e146e245d22876ea85d981976c48e991f3' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/product_features/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2028152426533e9c8b8c5741-71748210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature' => 0,
    'is_group' => 0,
    'allow_save' => 0,
    'id' => 0,
    'hide_inputs_class' => 0,
    'group_features' => 0,
    'group_feature' => 0,
    'picker_selected_companies' => 0,
    'items' => 0,
    'hide_first_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c8bb36bb2_23594404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c8bb36bb2_23594404')) {function content_533e9c8bb36bb2_23594404($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('general','variants','categories','name','feature_code','position','description','type','group','checkbox','single','multiple','selectbox','text','number','brand_type','others','text','number','date','warning_variants_removal','group','none','feature_display_on_product','tt_views_product_features_update_feature_display_on_product','feature_display_on_catalog','tt_views_product_features_update_feature_display_on_catalog','feature_display_on_header','tt_views_product_features_update_feature_display_on_header','prefix','tt_views_product_features_update_prefix','suffix','tt_views_product_features_update_suffix','text_all_items_included','categories'));
?>
<?php if ($_smarty_tpl->tpl_vars['feature']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['feature_id'], null, 0);?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['is_group']->value==true) {?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(@constant('NEW_FEATURE_GROUP_ID'), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['hide_inputs_class'] = new Smarty_variable('', null, 0);?>
<?php if (fn_check_form_permissions('')||!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
<?php $_smarty_tpl->tpl_vars['hide_inputs_class'] = new Smarty_variable("cm-hide-inputs", null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_features_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit  cm-disable-empty-files <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs_class']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">

<input type="hidden" class="cm-no-hide-input" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" class="cm-no-hide-input" name="feature_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js cm-ajax <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']&&strpos("SMNE",$_smarty_tpl->tpl_vars['feature']->value['feature_type'])===false||!$_smarty_tpl->tpl_vars['feature']->value) {?>hidden<?php }?>"><a href="<?php echo htmlspecialchars(fn_url("product_features.get_variants?feature_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&feature_type=".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_type'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("variants");?>
</a></li>
        <li id="tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?> hidden<?php }?>"><a><?php echo $_smarty_tpl->__("categories");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    
    <div id="content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <div class="control-group">
            <label class="control-label cm-required" for="elm_feature_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
            <input class="span9" type="text" name="feature_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        
        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"feature_data[company_id]",'id'=>"elm_feature_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['feature']->value['company_id']), 0);?>

        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_feature_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_code");?>
</label>
            <div class="controls">
                <input type="text" size="3" name="feature_data[feature_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" id="elm_feature_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position");?>
</label>
            <div class="controls">
                <input type="text" size="3" name="feature_data[position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" id="elm_feature_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
            <div class="controls">
                <textarea name="feature_data[full_description]" cols="55" rows="4" class="span9 cm-wysiwyg" id="elm_feature_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['full_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['is_group']->value||$_smarty_tpl->tpl_vars['feature']->value['feature_type']=="G") {?>
            <input type="hidden" name="feature_data[feature_type]" value="G" />
        <?php } else { ?>
        <div class="control-group">
            <label class="control-label cm-required" for="elm_feature_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="G") {?><?php echo $_smarty_tpl->__("group");?>
<?php } else { ?>
                <select name="feature_data[feature_type]" id="elm_feature_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-feature-type">
                    <optgroup label="<?php echo $_smarty_tpl->__("checkbox");?>
">
                        <option value="C" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("single");?>
</option>
                        <option value="M" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("multiple");?>
</option>
                    </optgroup>
                    <optgroup label="<?php echo $_smarty_tpl->__("selectbox");?>
">
                        <option value="S" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("text");?>
</option>
                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("number");?>
</option>
                        <option value="E" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="E") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("brand_type");?>
</option>
                    </optgroup>
                    <optgroup label="<?php echo $_smarty_tpl->__("others");?>
">
                        <option value="T" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("text");?>
</option>
                        <option value="O" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="O") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("number");?>
</option>
                        <option value="D" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("date");?>
</option>
                    </optgroup>
                </select>
                <div class="error-message feature_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" style="display: none" id="warning_feature_change_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="arrow"></div><div class="message"><p><?php echo $_smarty_tpl->__("warning_variants_removal");?>
</p></div></div>
            <?php }?>
            </div>
        </div>
            <div class="control-group">
            <label class="control-label" for="elm_feature_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("group");?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="G") {?>-<?php } else { ?>
                <select name="feature_data[parent_id]" id="elm_feature_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-feature-group">
                    <option value="0">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                    <?php  $_smarty_tpl->tpl_vars["group_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group_feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group_feature"]->key => $_smarty_tpl->tpl_vars["group_feature"]->value) {
$_smarty_tpl->tpl_vars["group_feature"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_type']=="G") {?>
                            <option data-ca-display-on-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_product'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-catalog="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_catalog'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-header="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_header'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id']==$_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            <?php }?>
            </div>
        </div>
        <?php }?>
        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_product");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_product_features_update_feature_display_on_product")), 0);?>
</label>
            <div class="controls">
            <input type="hidden" name="feature_data[display_on_product]" value="N" />
            <input type="checkbox" name="feature_data[display_on_product]" value="Y" data-ca-display-id="OnProduct" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_product']=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']&&$_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_product']=="Y") {?>disabled="disabled"<?php }?>/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_catalog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_catalog");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_product_features_update_feature_display_on_catalog")), 0);?>
</label>
            <div class="controls">
            <input type="hidden" name="feature_data[display_on_catalog]" value="N" />
            <input type="checkbox" name="feature_data[display_on_catalog]" value="Y"  data-ca-display-id="OnCatalog" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_catalog']=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']&&$_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_catalog']=="Y") {?>disabled="disabled"<?php }?> />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_header_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_header");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_product_features_update_feature_display_on_header")), 0);?>
</label>
            <div class="controls">
            <input type="hidden" name="feature_data[display_on_header]" value="N" />
            <input type="checkbox" name="feature_data[display_on_header]" value="Y"  data-ca-display-id="OnHeader" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_header']=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']&&$_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_header']=="Y") {?>disabled="disabled"<?php }?> />
            </div>
        </div>

        <?php if ((!$_smarty_tpl->tpl_vars['feature']->value&&!$_smarty_tpl->tpl_vars['is_group']->value)||($_smarty_tpl->tpl_vars['feature']->value['feature_type']&&$_smarty_tpl->tpl_vars['feature']->value['feature_type']!="G")) {?>
        <div class="control-group">
            <label class="control-label" for="elm_feature_prefix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("prefix");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_product_features_update_prefix")), 0);?>
</label>
            <div class="controls">
            <input type="text" name="feature_data[prefix]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_prefix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_suffix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("suffix");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_product_features_update_suffix")), 0);?>
</label>
            <div class="controls">
            <input type="text" name="feature_data[suffix]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_suffix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" /></div>
        </div>
        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:properties")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </fieldset>
    <!--content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['id']->value!="0G") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>
    <div class="hidden" id="content_tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['categories_path']) {?>
        <?php $_smarty_tpl->tpl_vars["items"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['feature']->value['categories_path']), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'multiple'=>true,'input_name'=>"feature_data[categories_path]",'item_ids'=>$_smarty_tpl->tpl_vars['items']->value,'data_id'=>"category_ids_".((string)$_smarty_tpl->tpl_vars['id']->value),'no_item_text'=>__("text_all_items_included",array("[items]"=>__("categories"))),'use_keys'=>"N",'owner_company_id'=>$_smarty_tpl->tpl_vars['feature']->value['company_id'],'but_meta'=>"pull-right"), 0);?>


    <!--content_tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

</div>

<div class="buttons-container">
    <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_features.update]",'cancel_action'=>"close",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id']), 0);?>

</div>
</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
