<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 01:43:27
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/promotions/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:520545970533f277f47ed22-89546687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0104b712bc3ec4005aa24a58013ae697b5b9b651' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/promotions/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '520545970533f277f47ed22-89546687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'promotion_data' => 0,
    'id' => 0,
    'allow_save' => 0,
    'zone' => 0,
    'settings' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f277f673d37_32038510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f277f673d37_32038510')) {function content_533f277f673d37_32038510($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('name','detailed_description','short_description','use_avail_period','avail_from','avail_till','priority','stop_other_rules','tt_views_promotions_update_stop_other_rules','new_promotion','editing_promotion'));
?>
<?php if ($_smarty_tpl->tpl_vars['promotion_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['promotion_data']->value['promotion_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['promotion_data']->value,"promotions"), null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<script type="text/javascript">
//<![CDATA[
function fn_promotion_add(id, skip_select, type)
{
    var $ = Tygh.$;
    var skip_select = skip_select | false;
    var new_group = false;

    var new_id = $('#container_' + id).cloneNode(0, true, true).str_replace('container_', '');

    // Get data array index and increment it
    var e = $('input[name^=promotion_data]:first', $('#container_' + new_id).prev()).clone();
    if (e.length == 0) {
        e = $('input[data-ca-input-name^=promotion_data]:first', $('#container_' + new_id).prev()).clone();
    }
    if (e.val() != 'undefined' && e.val() != '') {
        e.val('');
    }

    // We added new group, so we need to get input from parent element or this is the new condition
    if (!e.get(0)) {
        e = $('input[name^=promotion_data]:first', $('#container_' + new_id).parents('li:first')).clone(); // for group

        $('.no-node.no-items', $('#container_' + new_id).parents('ul:first')).hide(); // hide conainer with "no items" text

        // new condition
        if (!e.get(0)) {
            var n = (type == 'condition') ? "promotion_data[conditions][conditions][0][condition]" : "promotion_data[bonuses][0][bonus]";
            e = $('<input type="hidden" name="'+ n +'" value="" />');
        } else {
            new_group = true;
        }
    }
    
    var _name = e.prop('name').length > 0 ? e.prop('name') : e.data('caInputName');
    var val = parseInt(_name.match(/(.*)\[(\d+)\]/)[2]);
    var name = new_group? _name : _name.replace(/(.*)\[(\d+)\]/, '$1[' + (val + 1) +']');

    e.prop('name', name);
    $('#container_' + new_id).append(e);
    name = name.replace(/\[(\w+)\]$/, '');

    if (new_group) {
        name += '[conditions][1]';
    }

    $('#container_' + new_id).prev().removeClass('cm-last-item'); // remove tree node closure from previous element
    $('#container_' + new_id).addClass('cm-last-item').show(); // add tree node closure to new element
    // Update selector with name with new index
    if (skip_select == false) {
        $('#container_' + new_id + ' select').prop('id', new_id).prop('name', name);

    // Or just return id and name (for group)
    } else {
        $('#container_' + new_id).empty(); // clear node contents
        return {new_id: new_id, name: name};
    }
}

function fn_promotion_add_group(id, zone)
{
    var $ = Tygh.$;
    var res = fn_promotion_add(id, true, 'condition');
    
    $.ceAjax('request', '<?php echo fn_url("promotions.dynamic?promotion_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&zone=",'A','rel');?>
' + zone + '&prefix=' + escape(res.name) + '&group=new&elm_id=' + res.new_id, {result_ids: 'container_' + res.new_id});
    
}

function fn_promotion_rebuild_mixed_data(items, value, id, element_id, condition_value, condition_value_name)
{
    var $ = Tygh.$;
    var opts = '';
    var first_variant = '';

    for (var k in items) {
        if (items[k]['is_group']) {
            for (var l in items[k]['items']) {
                first_variant = '';
                if (l == value) {
                    if (items[k]['items'][l]['variants']) {
                        var count = 0;
                        for (var m in items[k]['items'][l]['variants']) {
                            if (!first_variant) {
                                first_variant = m;
                            }
                            opts += '<option value="' + m + '"' + (m == condition_value ? ' selected="selected"' : '') + '>' + items[k]['items'][l]['variants'][m] + '</option>';
                            count++;
                        }
                        if (count < <?php echo htmlspecialchars(@constant('PRODUCT_FEATURE_VARIANTS_THRESHOLD'), ENT_QUOTES, 'UTF-8');?>
) {
                            $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                            $('#mixed_select_' + id).html(opts).show().prop('disabled', false);
                            $('#mixed_input_' + id).hide().prop('disabled', true);
                            $('#mixed_input_' + id + '_name').hide().prop('disabled', true);
                        } else {
                            $('#mixed_ajax_select_' + id).data('ajax_content', null);
                            $('#mixed_select_' + id).hide().prop('disabled', true);
                            $('#mixed_ajax_select_' + id).html('');
                            $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').show();
                            $('.cm-ajax-content-more', $('#scroller_mixed_ajax_select_' + id)).show();
                            $('#content_loader_mixed_ajax_select_' + id).attr('data-ca-target-url', '<?php echo fn_url("product_features.get_feature_variants_list?enter_other=N&feature_id=");?>
' + l);
                            $('#sw_mixed_ajax_select_' + id + '_wrap_').html(items[k]['items'][l]['variants'][first_variant]);
                            $('#mixed_input_' + id + '_name').hide().prop('disabled', false);
                            $('#mixed_input_' + id + '_name').val(items[k]['items'][l]['variants'][first_variant]);
                            $('#mixed_input_' + id).hide().prop('disabled', false);
                            $('#mixed_input_' + id).val(first_variant);
                            if (condition_value && element_id == l) {
                                $('#sw_mixed_ajax_select_' + id + '_wrap_').html(condition_value_name);
                                $('#mixed_input_' + id + '_name').val(condition_value_name);
                                $('#mixed_input_' + id).val(condition_value);
                            }
                        }
                    } else {
                        $('#mixed_input_' + id).val(element_id == l ? condition_value : '').show().prop('disabled', false);
                        $('#mixed_select_' + id).hide().prop('disabled', true);
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                        $('#mixed_input_' + id + '_name').val('').hide().prop('disabled', true);
                    }
                }
            }
        } else {
            if (k == value) {
                if (items[k]['variants']) {
                    var count = 0;
                    for (var m in items[k]['variants']) {
                        if (!first_variant) {
                            first_variant = m;
                        }
                        opts += '<option value="' + m + '"' + (m == condition_value ? ' selected="selected"' : '') + '>' + items[k]['variants'][m] + '</option>';
                        count++;
                    }
                    if (count < <?php echo htmlspecialchars(@constant('PRODUCT_FEATURE_VARIANTS_THRESHOLD'), ENT_QUOTES, 'UTF-8');?>
) {
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                        $('#mixed_select_' + id).html(opts).show().prop('disabled', false);
                        $('#mixed_input_' + id).hide().prop('disabled', true);
                        $('#mixed_input_' + id + '_name').hide().prop('disabled', true);
                    } else {
                        $('#mixed_ajax_select_' + id).data('ajax_content', null);
                        $('#mixed_select_' + id).hide().prop('disabled', true);
                        $('#mixed_ajax_select_' + id).html('');
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').show();
                        $('.cm-ajax-content-more', $('#scroller_mixed_ajax_select_' + id)).show();
                        $('#content_loader_mixed_ajax_select_' + id).attr('data-ca-target-url', '<?php echo fn_url("product_features.get_feature_variants_list?enter_other=N&feature_id=");?>
' + k);
                        $('#sw_mixed_ajax_select_' + id + '_wrap_').html(items[k]['variants'][first_variant]);
                        $('#mixed_input_' + id + '_name').hide().prop('disabled', false);
                        $('#mixed_input_' + id + '_name').val(items[k]['variants'][first_variant]);
                        $('#mixed_input_' + id).hide().prop('disabled', false);
                        $('#mixed_input_' + id).val(first_variant);
                        if (condition_value && element_id == k) {
                            $('#sw_mixed_ajax_select_' + id + '_wrap_').html(condition_value_name);
                            $('#mixed_input_' + id + '_name').val(condition_value_name);
                            $('#mixed_input_' + id).val(condition_value);
                        }
                    }
                } else {
                    $('#mixed_input_' + id).val(element_id == l ? condition_value : '').show().prop('disabled', false);
                    $('#mixed_select_' + id).hide().prop('disabled', true);
                    $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                    $('#mixed_input_' + id + '_name').val('').hide().prop('disabled', true);
                }
            }
        }
    }
}

//]]>
</script>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="promotion_form" class="promotion form-horizontal form-edit  <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php }?>" >
<input type="hidden" class="cm-no-hide-input" name="promotion_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" class="cm-no-hide-input" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" class="cm-no-hide-input" name="promotion_data[zone]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['promotion_data']->value['zone'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['zone']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div id="content_details">
<fieldset>
    <div class="control-group">
        <label for="elm_promotion_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="promotion_data[name]" id="elm_promotion_name" size="25" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_promotion_det_descr"><?php echo $_smarty_tpl->__("detailed_description");?>
:</label>
        <div class="controls">
        <textarea id="elm_promotion_det_descr" name="promotion_data[detailed_description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_data']->value['detailed_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_promotion_sht_descr"><?php echo $_smarty_tpl->__("short_description");?>
:</label>
        <div class="controls">
            <textarea id="elm_promotion_sht_descr" name="promotion_data[short_description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_data']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
    
    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"promotion_data[company_id]",'id'=>"elm_promotion_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['promotion_data']->value['company_id']), 0);?>

    <?php }?>
        
    <div class="control-group">
        <label class="control-label" for="elm_use_avail_period"><?php echo $_smarty_tpl->__("use_avail_period");?>
:</label>
        <div class="controls">
            <input type="checkbox" name="avail_period" id="elm_use_avail_period" <?php if ($_smarty_tpl->tpl_vars['promotion_data']->value['from_date']||$_smarty_tpl->tpl_vars['promotion_data']->value['to_date']) {?>checked="checked"<?php }?> value="Y" onclick="fn_activate_calendar(this);"/>
        </div>
    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("calendar_disable", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['promotion_data']->value['from_date']&&!$_smarty_tpl->tpl_vars['promotion_data']->value['to_date']) {?>disabled="disabled"<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <div class="control-group">
        <label class="control-label" for="elm_date_holder_from"><?php echo $_smarty_tpl->__("avail_from");?>
:</label>
        <div class="controls">
        <input type="hidden" name="promotion_data[from_date]" value="0" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_date_holder_from",'date_name'=>"promotion_data[from_date]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['promotion_data']->value['from_date'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>Smarty::$_smarty_vars['capture']['calendar_disable']), 0);?>

        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_date_holder_to"><?php echo $_smarty_tpl->__("avail_till");?>
:</label>
        <div class="controls">
        <input type="hidden" name="promotion_data[to_date]" value="0" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_date_holder_to",'date_name'=>"promotion_data[to_date]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['promotion_data']->value['to_date'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>Smarty::$_smarty_vars['capture']['calendar_disable']), 0);?>

        </div>
    </div>

    
    <script language="javascript">
    //<![CDATA[
    function fn_activate_calendar(el)
    {
        var $ = Tygh.$;
        var jelm = $(el);
        var checked = jelm.prop('checked');

        $('#elm_date_holder_from,#elm_date_holder_to').prop('disabled', !checked);
    }

    fn_activate_calendar(Tygh.$('#elm_use_avail_period'));
    //]]>
    </script>
    

    <div class="control-group">
        <label class="control-label" for="elm_promotion_priority"><?php echo $_smarty_tpl->__("priority");?>
</label>
        <div class="controls">
        <input type="text" name="promotion_data[priority]" id="elm_promotion_priority" size="25" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_data']->value['priority'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_promotion_stop"><?php echo $_smarty_tpl->__("stop_other_rules");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_promotions_update_stop_other_rules")), 0);?>
</label>
        <div class="controls">
        <input type="hidden" name="promotion_data[stop]" value="N" />
        <input type="checkbox" name="promotion_data[stop]" id="elm_promotion_stop" value="Y" <?php if ($_smarty_tpl->tpl_vars['promotion_data']->value['stop']=="Y") {?>checked="checked"<?php }?>/>
        </div>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"promotion_data[status]",'id'=>"elm_promotion_status",'obj'=>$_smarty_tpl->tpl_vars['promotion_data']->value,'hidden'=>true), 0);?>


</fieldset>
<!--content_details--></div>

<div id="content_conditions">

<?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"promotion_data[conditions]",'group'=>$_smarty_tpl->tpl_vars['promotion_data']->value['conditions'],'root'=>true,'no_ids'=>true,'zone'=>(($tmp = @$_smarty_tpl->tpl_vars['promotion_data']->value['zone'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['zone']->value : $tmp),'hide_add_buttons'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0);?>


<!--content_conditions--></div>

<div id="content_bonuses">

<?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/bonuses_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"promotion_data[bonuses]",'group'=>$_smarty_tpl->tpl_vars['promotion_data']->value['bonuses'],'zone'=>(($tmp = @$_smarty_tpl->tpl_vars['promotion_data']->value['zone'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['zone']->value : $tmp),'hide_add_buttons'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0);?>


<!--content_bonuses--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>

<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
    <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_second_button"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[promotions.update]",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'but_target_form'=>"promotion_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_promotion"), null, 0);?>
<?php } else { ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_promotion");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.":&nbsp;".((string)$_smarty_tpl->tpl_vars['promotion_data']->value['name']), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
