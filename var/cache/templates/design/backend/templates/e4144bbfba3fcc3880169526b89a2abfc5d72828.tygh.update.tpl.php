<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 22:32:26
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/product_filters/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3243801075342ef3a4f93b9-31015479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4144bbfba3fcc3880169526b89a2abfc5d72828' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/product_filters/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3243801075342ef3a4f93b9-31015479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter' => 0,
    'id' => 0,
    'allow_save' => 0,
    'filter_fields' => 0,
    'filter_features' => 0,
    'feature' => 0,
    'subfeature' => 0,
    'field' => 0,
    'field_type' => 0,
    'range' => 0,
    'num' => 0,
    'features' => 0,
    'settings' => 0,
    'picker_selected_companies' => 0,
    'hide_first_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342ef3a9aefa4_34794560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342ef3a9aefa4_34794560')) {function content_5342ef3a9aefa4_34794560($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('general','ranges','categories','name','position_short','show_on_home_page','filter_by','features','product_fields','round_to','display_type','expanded','minimized','display_variants_count','tt_views_product_filters_update_display_variants_count','display_more_variants_count','tt_views_product_filters_update_display_more_variants_count','position_short','name','range_from','range_to','text_all_items_included','categories'));
?>
<?php if ($_smarty_tpl->tpl_vars['filter']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['filter_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['filter']->value,"product_filters"), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["filter_fields"] = new Smarty_variable(fn_get_product_filter_fields(''), null, 0);?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="update_filter_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit <?php if (fn_check_form_permissions('')||!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>">

<input type="hidden" class="cm-no-hide-input" name="filter_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" class="cm-no-hide-input" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <?php if (($_smarty_tpl->tpl_vars['filter']->value['feature_type']&&strpos("ODN",$_smarty_tpl->tpl_vars['filter']->value['feature_type'])!==false)||($_smarty_tpl->tpl_vars['filter']->value['field_type']&&$_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range']==true)||!$_smarty_tpl->tpl_vars['id']->value) {?>
            <li id="tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>hidden<?php }?>"><a><?php echo $_smarty_tpl->__("ranges");?>
</a></li>
        <?php }?>
        <li id="tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("categories");?>
</a></li>
    </ul>
</div>
<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <div class="control-group">
            <label for="elm_filter_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" id="elm_filter_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[filter]" class="span9" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"filter_data[company_id]",'id'=>"elm_filter_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['filter']->value['company_id']), 0);?>

        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_filter_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position_short");?>
</label>
            <div class="controls">
            <input type="text" id="elm_filter_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['position'], ENT_QUOTES, 'UTF-8');?>
<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>0<?php }?>"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_filter_show_on_home_page_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_on_home_page");?>
</label>
            <div class="controls">
            <input type="hidden" name="filter_data[show_on_home_page]" value="N" />
            <input type="checkbox" id="elm_filter_show_on_home_page_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[show_on_home_page]" <?php if ($_smarty_tpl->tpl_vars['filter']->value['show_on_home_page']=="Y"||!$_smarty_tpl->tpl_vars['filter']->value) {?>checked="checked"<?php }?> value="Y"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_filter_filter_by_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("filter_by");?>
</label>
            <div class="controls">
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                
                <select name="filter_data[filter_type]" onchange="fn_check_product_filter_type(this.value, 'tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
);" id="elm_filter_filter_by_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['filter_features']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("features");?>
">
                    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                        <option value="<?php if (strpos("ON",$_smarty_tpl->tpl_vars['feature']->value['feature_type'])!==false) {?>R<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="D") {?>D<?php } else { ?>F<?php }?>F-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
                    <?php  $_smarty_tpl->tpl_vars['subfeature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subfeature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['subfeatures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subfeature']->key => $_smarty_tpl->tpl_vars['subfeature']->value) {
$_smarty_tpl->tpl_vars['subfeature']->_loop = true;
?>
                        <option value="<?php if (strpos("ON",$_smarty_tpl->tpl_vars['feature']->value['feature_type'])!==false) {?>R<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="D") {?>D<?php } else { ?>F<?php }?>F-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    <?php }?>
                    <?php } ?>
                    </optgroup>
                <?php }?>
                    <optgroup label="<?php echo $_smarty_tpl->__("product_fields");?>
">
                    <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["field_type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["field_type"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
                        <?php if (!$_smarty_tpl->tpl_vars['field']->value['hidden']) {?>
                            <option value="<?php if ($_smarty_tpl->tpl_vars['field']->value['is_range']) {?>R<?php } else { ?>B<?php }?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</option>
                        <?php }?>
                    <?php } ?>
                    </optgroup>
                </select>
            <?php } else { ?>
                <input type="hidden" name="filter_data[filter_type]" value="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_id']) {?>FF-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range']) {?>R<?php } else { ?>B<?php }?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
<?php }?>">
                <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_group']) {?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_group'], ENT_QUOTES, 'UTF-8');?>
)<?php }?></span>
            <?php }?>
            </div>
        </div>

        <div class="control-group<?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?> hidden<?php }?>" id="round_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_container">
            <label class="control-label" for="elm_filter_round_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("round_to");?>
</label>
            <div class="controls">
            <select name="filter_data[round_to]" id="elm_filter_round_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <option value="1"  <?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==1) {?>   selected="selected"<?php }?>>1</option>
                <option value="10" <?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==10) {?>  selected="selected"<?php }?>>10</option>
                <option value="100"<?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==100) {?> selected="selected"<?php }?>>100</option>
            </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_filter_display_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("display_type");?>
</label>
            <div class="controls">
            <select name="filter_data[display]" id="elm_filter_display_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=='Y') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("expanded");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=='N') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("minimized");?>
</option>
            </select>
            </div>
        </div>

        <div class="control-group <?php if (!($_smarty_tpl->tpl_vars['filter']->value['feature_id']||$_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range'])) {?> hidden<?php }?>" id="display_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_container">
            <label class="control-label" for="elm_filter_display_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("display_variants_count");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_product_filters_update_display_variants_count")), 0);?>
</label>
            <div class="controls">
            <input type="text" id="elm_filter_display_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[display_count]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['display_count'])===null||$tmp==='' ? "10" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group <?php if (!($_smarty_tpl->tpl_vars['filter']->value['feature_id']||$_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range'])) {?> hidden<?php }?>" id="display_more_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_container">
            <label class="control-label" for="elm_filter_display_more_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("display_more_variants_count");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_product_filters_update_display_more_variants_count")), 0);?>
</label>
            <div class="controls">
            <input type="text" id="elm_filter_display_more_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[display_more_count]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['display_more_count'])===null||$tmp==='' ? "20" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        
    </fieldset>
    </div>

    <div class="hidden" id="content_tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <table class="table table-middle">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->__("position_short");?>
</th>
            <th><?php echo $_smarty_tpl->__("name");?>
</th>
            <th><?php echo $_smarty_tpl->__("range_from");?>
&nbsp;-&nbsp;<?php echo $_smarty_tpl->__("range_to");?>
</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <?php if ($_smarty_tpl->tpl_vars['filter']->value['ranges']) {?>
        <?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_f"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_f"]['iteration']++;
?>
        <?php $_smarty_tpl->tpl_vars["num"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['fe_f']['iteration'], null, 0);?>
        <tr  name="sub"} id="range_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
">
            <td>
                <input type="hidden" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][range_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['position'], ENT_QUOTES, 'UTF-8');?>
"  />
            </td>
            <td><input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][range_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_name'], ENT_QUOTES, 'UTF-8');?>
" /></td>
            <td class="nowrap">
                <?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['prefix']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['prefix'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']!=="D") {?>
                    <input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][from]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['from'], ENT_QUOTES, 'UTF-8');?>
" class="cm-value-decimal" />&nbsp;-&nbsp;<input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][to]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['to'], ENT_QUOTES, 'UTF-8');?>
" class="cm-value-decimal" />
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_1_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['range']->value['range_id']),'date_name'=>"filter_data[dates_ranges][".((string)$_smarty_tpl->tpl_vars['num']->value)."][from]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['range']->value['from'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>
&nbsp;-&nbsp;
                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_2_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['range']->value['range_id']),'date_name'=>"filter_data[dates_ranges][".((string)$_smarty_tpl->tpl_vars['num']->value)."][to]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['range']->value['to'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['suffix']) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['suffix'], ENT_QUOTES, 'UTF-8');?>
<?php }?></td>
            <td class="right">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"range_item_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['range']->value['range_id']),'tag_level'=>"1",'only_delete'=>"Y"), 0);?>

            </td>
        </tr>
        <?php } ?>
        <?php }?>
        
        <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['num']->value)===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

        <tr id="box_add_to_range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <td class="nowrap">
                <input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="0" />
            </td>
            <td><input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][range_name]" /></td>
            <td class="nowrap">
                <?php if (!$_smarty_tpl->tpl_vars['id']->value||$_smarty_tpl->tpl_vars['filter']->value['feature_type']!="D") {?>
                <div id="inputs_ranges<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>class="hidden"<?php }?>>
                    <input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][from]" value="" class="input-text-medium cm-value-decimal" />&nbsp;-&nbsp;<input type="text" name="filter_data[ranges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][to]" value="" class="cm-value-decimal" />
                </div>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['id']->value||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>
                <div id="dates_ranges<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['id']->value||$_smarty_tpl->tpl_vars['filter']->value['feature_type']!="D") {?>class="hidden"<?php }?>>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_3_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"filter_data[dates_ranges][".((string)$_smarty_tpl->tpl_vars['num']->value)."][from]",'date_val'=>@constant('TIME'),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>
&nbsp;-&nbsp;
                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_4_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"filter_data[dates_ranges][".((string)$_smarty_tpl->tpl_vars['num']->value)."][to]",'date_val'=>@constant('TIME'),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                </div>
                <?php }?>
            </td>
            <td>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_to_range_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>"1"), 0);?>
</td>
        </tr>
        </table>
    </div>

    <div class="hidden" id="content_tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'multiple'=>true,'input_name'=>"filter_data[categories_path]",'item_ids'=>$_smarty_tpl->tpl_vars['filter']->value['categories_path'],'data_id'=>"category_ids_".((string)$_smarty_tpl->tpl_vars['id']->value),'no_item_text'=>__("text_all_items_included",array("[items]"=>__("categories"))),'use_keys'=>"N",'owner_company_id'=>$_smarty_tpl->tpl_vars['filter']->value['company_id'],'but_meta'=>"pull-right"), 0);?>

    </div>
</div>

<div class="buttons-container">
    <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_filters.update]",'cancel_action'=>"close",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>

</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
<script type="text/javascript">
//<![CDATA[
    fn_check_product_filter_type(Tygh.$('#elm_filter_filter_by_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').val(), 'tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');
//]]>
</script>
<?php }?>
<?php }} ?>
