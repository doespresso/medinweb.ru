<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:13
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/products/components/advanced_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:895075305533e9cede74623-73393624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02946815224ce4f90ffddaefa88f64367e5d4317' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/products/components/advanced_search_form.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '895075305533e9cede74623-73393624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_features' => 0,
    'splitted_filter' => 0,
    'filters_row' => 0,
    'filter' => 0,
    'filter_ranges' => 0,
    'range_id' => 0,
    'prefix' => 0,
    'search' => 0,
    'range' => 0,
    'el_id' => 0,
    '_type' => 0,
    'range_name' => 0,
    'date_extra' => 0,
    'settings' => 0,
    'from_value' => 0,
    'to_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cee25d011_57161744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cee25d011_57161744')) {function content_533e9cee25d011_57161744($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
fn_preload_lang_vars(array('none','your_range','none','yes','no','any'));
?>
<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['filter_features']->value,'size'=>"3",'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>

<table cellpadding="8">
<?php  $_smarty_tpl->tpl_vars["filters_row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filters_row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["filters_row"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["filters_row"]->key => $_smarty_tpl->tpl_vars["filters_row"]->value) {
$_smarty_tpl->tpl_vars["filters_row"]->_loop = true;
 $_smarty_tpl->tpl_vars["filters_row"]->index++;
 $_smarty_tpl->tpl_vars["filters_row"]->first = $_smarty_tpl->tpl_vars["filters_row"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["filters_row"]['first'] = $_smarty_tpl->tpl_vars["filters_row"]->first;
?>
<thead>
    <tr>
    <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters_row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['filter']->value&&$_smarty_tpl->tpl_vars['filter']->value['field_type']!="P") {?>
        <td><strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['filter'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['description'] : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong></td>
        <?php }?>
    <?php } ?>
    </tr>
</thead>
<tr valign="top"<?php if ((sizeof($_smarty_tpl->tpl_vars['splitted_filter']->value)>1)&&$_smarty_tpl->getVariable('smarty')->value['foreach']['filters_row']['first']) {?> class="delim"<?php }?>>
<?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters_row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value&&$_smarty_tpl->tpl_vars['filter']->value['field_type']!="P") {?>
        <td width="33%">
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="S"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="E"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="N"&&!$_smarty_tpl->tpl_vars['filter']->value['filter_id']) {?>
                <div class="scroll-y">
                    <?php $_smarty_tpl->tpl_vars["filter_ranges"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['ranges'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['variants'] : $tmp), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_smarty_tpl->tpl_vars["range_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
 $_smarty_tpl->tpl_vars["range_id"]->value = $_smarty_tpl->tpl_vars["range"]->key;
?>
                        <label for="variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox"><input type="checkbox" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?>multiple_<?php }?>variants[]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>[V<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range_id']->value, ENT_QUOTES, 'UTF-8');?>
]<?php }?>" <?php if (smarty_modifier_in_array("[V".((string)$_smarty_tpl->tpl_vars['range_id']->value)."]",$_smarty_tpl->tpl_vars['search']->value['variants'])||smarty_modifier_in_array($_smarty_tpl->tpl_vars['range_id']->value,$_smarty_tpl->tpl_vars['search']->value['multiple_variants'])) {?>checked="checked"<?php }?> /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</label>
                    <?php } ?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="O"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="N"&&$_smarty_tpl->tpl_vars['filter']->value['filter_id']||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="D"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="F") {?>
                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?><div class="scroll-y"><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                        <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable("field_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable("feature_".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id']), null, 0);?>
                    <?php }?>

                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
no_ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio"><input type="radio" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
no_ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="" checked="checked" /><?php echo $_smarty_tpl->__("none");?>
</label>
                    <?php $_smarty_tpl->tpl_vars["filter_ranges"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['ranges'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['variants'] : $tmp), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["_type"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['field_type'])===null||$tmp==='' ? "R" : $tmp), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                        <?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_smarty_tpl->tpl_vars["range_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
 $_smarty_tpl->tpl_vars["range_id"]->value = $_smarty_tpl->tpl_vars["range"]->key;
?>
                            <?php $_smarty_tpl->tpl_vars["range_name"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['range']->value['range_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['range']->value['variant'] : $tmp), null, 0);?>
                            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio"><input type="radio" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]==((string)$_smarty_tpl->tpl_vars['_type']->value).((string)$_smarty_tpl->tpl_vars['range_id']->value)) {?>checked="checked"<?php }?> /><?php echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['range_name']->value), ENT_QUOTES, 'UTF-8');?>
</label>
                        <?php } ?>
                    <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?></div><?php }?>

                <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']!="F") {?>
                <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_custom_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio"><input type="radio" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_custom_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="O" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]=="O") {?>checked="checked"<?php }?>  /><?php echo $_smarty_tpl->__("your_range");?>
</label>

                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from']||$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to']) {?>
                            <?php $_smarty_tpl->tpl_vars["date_extra"] = new Smarty_variable('', null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["date_extra"] = new Smarty_variable("disabled=\"disabled\"", null, 0);?>
                        <?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."range_".((string)$_smarty_tpl->tpl_vars['el_id']->value)."_from",'date_name'=>"custom_range[".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id'])."][from]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from'],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."range_".((string)$_smarty_tpl->tpl_vars['el_id']->value)."_to",'date_name'=>"custom_range[".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id'])."][to]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to'],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        <input type="hidden" name="custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
][type]" value="D" />
                    <?php } else { ?>
                        <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                            <?php $_smarty_tpl->tpl_vars["from_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['from'] : $tmp), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["to_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['to'] : $tmp), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["from_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['from'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['range_values']['min'] : $tmp), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["to_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['to'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['range_values']['max'] : $tmp), null, 0);?>
                        <?php }?>

                        <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']) {?>field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[from]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_from" size="3" class="input-mini" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['from_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> /> - <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']) {?>field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[to]" size="3" class="input-mini" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to_value']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_to" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                    <?php }?>
                <?php }?>
                <script type="text/javascript">
                //<![CDATA[
                Tygh.$(document).ready(function() {
                    var $ = Tygh.$;
                    $("input[type=radio][name='variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]']").change(function() {
                        var el_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
';
                        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_' + el_id + '_from').prop('disabled', this.value !== 'O');
                        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_' + el_id + '_to').prop('disabled', this.value !== 'O');
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>
                        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_' + el_id + '_from_but').prop('disabled', this.value !== 'O');
                        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_' + el_id + '_to_but').prop('disabled', this.value !== 'O');
                        <?php }?>
                    });
                });
                //]]>
                </script>
            <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="C"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="C") {?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                    <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['field_type'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['feature_id'], null, 0);?>
                <?php }?>
                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_none" class="radio">
                    <input type="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_none" value="" <?php if (!$_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]) {?>checked="checked"<?php }?> />
                    <?php echo $_smarty_tpl->__("none");?>
</label>

                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_yes" class="radio">
                    <input type="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_yes" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="Y") {?>checked="checked"<?php }?> />
                    <?php echo $_smarty_tpl->__("yes");?>
</label>

                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_no" class="radio">
                    <input type="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_no" value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="N") {?>checked="checked"<?php }?> />
                    <?php echo $_smarty_tpl->__("no");?>
</label>

                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_any" class="radio">
                    <input type="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_any" value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="A") {?>checked="checked"<?php }?> />
                    <?php echo $_smarty_tpl->__("any");?>
</label>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="T") {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<input type="text" name="tx_features[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]" class="input-mini" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tx_features'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </td>
    <?php }?>
<?php } ?>
</tr>
<?php } ?>
</table><?php }} ?>
