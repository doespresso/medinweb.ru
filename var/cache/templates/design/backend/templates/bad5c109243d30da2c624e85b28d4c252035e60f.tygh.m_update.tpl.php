<?php /* Smarty version Smarty-3.1.15, created on 2014-04-12 02:00:57
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/products/m_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182902400453486619863208-84553693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bad5c109243d30da2c624e85b28d4c252035e60f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/products/m_update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182902400453486619863208-84553693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filled_groups' => 0,
    'field_names' => 0,
    'field_key' => 0,
    'field_name' => 0,
    'type' => 0,
    'localizations' => 0,
    'field_groups' => 0,
    'field' => 0,
    'v' => 0,
    'name' => 0,
    'v_id' => 0,
    'v_name' => 0,
    'settings' => 0,
    'product_data' => 0,
    'layout' => 0,
    'item' => 0,
    'taxes' => 0,
    'tax' => 0,
    'all_product_features' => 0,
    'pf' => 0,
    'subfeature' => 0,
    'product' => 0,
    'products_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53486619d8b662_18134323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53486619d8b662_18134323')) {function content_53486619d8b662_18134323($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
fn_preload_lang_vars(array('override_product_data','vendor','track_with_options','track_without_options','dont_track','zpa_refuse','zpa_permit','zpa_ask_price','apply','vendor','track_with_options','track_without_options','dont_track','zpa_refuse','zpa_permit','zpa_ask_price','update_products'));
?>
<script type="text/javascript">
//<![CDATA[
    

    function fn_get_field_type (element) {
        if (Tygh.$(element).is('input[type=radio], input[type=checkbox], select')) {
            return 'elm-disabled';
        } else if (Tygh.$(element).is('div')){
            return '';
        } else {
            return 'input-text-disabled';
        }
    }

    (function($) {
        $(document).ready(function(){
            $('[id*=elements-switcher-]').click(function(){
                id = $(this).prop('id');
                id_template = /elements-switcher-(\S+)/i;
                id = 'field_' + id.match(id_template)[1];

                var checked = $(this).prop('checked');
                $('[id*=' + id + ']').each(function(index, element){
                    $(element).toggleClass(fn_get_field_type(element), !checked);
                    $(element).prop('disabled', !checked);
                    if (!checked) {
                        $(element).prop('checked', false);
                    }
                });
                $('#' + id + ' .correct-picker-but input').prop('disabled', !checked);
                $('#' + id + ' .correct-picker-but a').toggle(checked);
            });
            $('[id*=field_] .correct-picker-but a').hide();

            // Double scroll
            var elm_orig = $("#scrolled_div");
            var elm_scroller = $("#scrolled_div_top");

            var dummy = $("<div></div>");
            dummy.width(elm_orig.get(0).scrollWidth);
            dummy.height(24);
            elm_scroller.append(dummy);


            elm_scroller.scroll(function(){
                elm_orig.scrollLeft(elm_scroller.scrollLeft());
            });
            elm_orig.scroll(function(){
                elm_scroller.scrollLeft(elm_orig.scrollLeft());
            });
        });
    }(Tygh.$));
    
//]]>
</script>

<?php $_smarty_tpl->tpl_vars["all_categories_list"] = new Smarty_variable(fn_get_plain_categories_tree(0,false), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("extra_tools", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("override_product_data"),'but_onclick'=>"Tygh."."$"."('#override_box').toggle()",'but_role'=>"tool"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="override_box" class="hidden">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="override_form" class="form-horizontal form-edit" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("products.m_update"), ENT_QUOTES, 'UTF-8');?>
" />

<table>
<tr>
    <td>
        <div class="scroll-x scroll-border">
        <table class="table-fixed">
        <tr>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <th>&nbsp;</th>
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars["field_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["field_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_name"]->key => $_smarty_tpl->tpl_vars["field_name"]->value) {
$_smarty_tpl->tpl_vars["field_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["field_key"]->value = $_smarty_tpl->tpl_vars["field_name"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['field_key']->value=="company_id") {?>
            <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
            <?php } else { ?>
            <th><?php if (is_array($_smarty_tpl->tpl_vars['field_name']->value)) {?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_key']->value);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></th>
            <?php }?>
            <?php } ?>
        </tr>
        <tr >
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <td valign="top" class="pad">
            <?php if ($_smarty_tpl->tpl_vars['type']->value!="L"||$_smarty_tpl->tpl_vars['type']->value=="L"&&$_smarty_tpl->tpl_vars['localizations']->value) {?>
                <table>
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_groups']->value[$_smarty_tpl->tpl_vars['type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value]) {?>
                <tr>
                    <td valign="top" class="nowrap pad <?php if ($_smarty_tpl->tpl_vars['field']->value=="product") {?>strong<?php }?>"><label class="checkbox" for="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__"><input type="checkbox" name="" id="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" value="Y" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</label></td>
                    <td valign="top" class="pad">
                        <?php if ($_smarty_tpl->tpl_vars['type']->value=="A") {?>
                        <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="text" value="" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" disabled="disabled" />
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="B") {?>
                        <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="text" value=""  size="3" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" disabled="disabled" />
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="C") {?>
                        <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__h" type="hidden" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" disabled="disabled" />
                        <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="checkbox" class="elm-disabled" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" disabled="disabled" />
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="D") {?>
                        <textarea id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" rows="3" cols="40" disabled="disabled"></textarea>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="S") {?>
                        <select id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value['name'], ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                        <?php  $_smarty_tpl->tpl_vars['v_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v_name']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['name']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v_name']->key => $_smarty_tpl->tpl_vars['v_name']->value) {
$_smarty_tpl->tpl_vars['v_name']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v_name']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v_name']->value);?>
</option>
                        <?php } ?>
                        </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="T") {?>
                            <div class="correct-picker-but">
                            <?php if ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__date",'date_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>@constant('TIME'),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>" disabled=\"disabled\"",'date_meta'=>"input-text-disabled"), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="avail_since") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__date",'date_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>@constant('TIME'),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>" disabled=\"disabled\"",'date_meta'=>"input-text-disabled"), 0);?>

                            <?php }?>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="L") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'disabled'=>true,'id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__",'data_name'=>"override_products_data[localization]"), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="E") {?> 
                        <div class="clear" id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__">
                            <div class="correct-picker-but">
                                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"categories",'input_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[category_ids]",'radio_input_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[main_category]",'item_ids'=>'','hide_link'=>true,'display_input_id'=>"category_ids",'view_mode'=>"list"), 0);?>

                            </div>
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="W") {?> 
                            <select id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = fn_get_product_details_views($_smarty_tpl->tpl_vars['product_data']->value['product_id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                            </select>
                        <?php }?>
                    </td>
                </tr>
                <?php }?>
                <?php } ?>
                </table>
            <?php }?>
            </td>
            <?php } ?>


            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars["field"]->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <td valign="top" class="pad">
            <?php if ($_smarty_tpl->tpl_vars['field']->value!="localization"||$_smarty_tpl->tpl_vars['field']->value=="localization"&&$_smarty_tpl->tpl_vars['localizations']->value) {?>
                <table class="no-border">
                <tr>
                    <td valign="top" class="pad"><?php if ($_smarty_tpl->tpl_vars['field']->value!="main_pair"&&$_smarty_tpl->tpl_vars['field']->value!="features") {?><input type="checkbox" name="" value="Y" id="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" /><?php } else { ?>&nbsp;<?php }?></td>
                    <td valign="top" class="pad">
                    <?php if ($_smarty_tpl->tpl_vars['field']->value=="main_pair") {?>
                        <table width="420">
                        <tr>
                            <td><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"product_main",'image_object_type'=>"product",'image_type'=>"M",'no_thumbnail'=>true), 0);?>
</td>
                        </tr>
                        </table>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="tracking") {?>
                        <select    id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                            <option value="O"><?php echo $_smarty_tpl->__("track_with_options");?>
</option>
                            <option value="B"><?php echo $_smarty_tpl->__("track_without_options");?>
</option>
                            <option value="D"><?php echo $_smarty_tpl->__("dont_track");?>
</option>
                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="zero_price_action") {?>
                        <select id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                            <option value="R"><?php echo $_smarty_tpl->__("zpa_refuse");?>
</option>
                            <option value="P"><?php echo $_smarty_tpl->__("zpa_permit");?>
</option>
                            <option value="A"><?php echo $_smarty_tpl->__("zpa_ask_price");?>
</option>
                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="taxes") {?>
                        <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__h" type="hidden" name="override_products_data[tax_ids]" value="" disabled="disabled" />
                        <?php  $_smarty_tpl->tpl_vars["tax"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tax"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tax"]->key => $_smarty_tpl->tpl_vars["tax"]->value) {
$_smarty_tpl->tpl_vars["tax"]->_loop = true;
?>
                        <div class="select-field nowrap no-padding">
                            <label class="checkbox" for="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="override_products_data[tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
]" id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</label>
                        </div>
                        <?php } ?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="features") {?>
                        <?php if ($_smarty_tpl->tpl_vars['all_product_features']->value) {?>
                        <table>
                        <?php  $_smarty_tpl->tpl_vars["pf"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pf"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["pf"]->key => $_smarty_tpl->tpl_vars["pf"]->value) {
$_smarty_tpl->tpl_vars["pf"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['pf']->value['feature_type']!=="G") {?>
                        <tr>
                            <td><label class="checkbox" for="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pf']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_"><input type="checkbox" id="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pf']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_" />&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pf']->value['description'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</label></td>
                            <td>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>$_smarty_tpl->tpl_vars['pf']->value,'data_name'=>"override_products_data",'over'=>true), 0);?>

                            </td>
                        </tr>
                        <?php }?>
                        <?php } ?>
                        <?php  $_smarty_tpl->tpl_vars["pf"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pf"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["pf"]->key => $_smarty_tpl->tpl_vars["pf"]->value) {
$_smarty_tpl->tpl_vars["pf"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['pf']->value['subfeatures']) {?>
                        <tr>
                            <td colspan="2"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pf']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span></td>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars["subfeature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subfeature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pf']->value['subfeatures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subfeature"]->key => $_smarty_tpl->tpl_vars["subfeature"]->value) {
$_smarty_tpl->tpl_vars["subfeature"]->_loop = true;
?>
                        <tr>
                            <td class="nowrap"><label class="checkbox" for="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_"><input type="checkbox" id="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_"/>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                            <td>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>$_smarty_tpl->tpl_vars['subfeature']->value,'data_name'=>"override_products_data",'over'=>true), 0);?>

                            </td>
                        </tr>
                        <?php } ?>
                        <?php }?>
                        <?php } ?>
                        </table>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                        <div class="correct-picker-but">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value),'date_name'=>"override_products_data[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>@constant('TIME'),'extra'=>" disabled=\"disabled\"",'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="localization") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]",'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization']), 0);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="usergroup_ids") {?>
                        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."_",'name'=>"override_products_data[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'usergroups'=>fn_get_usergroups("C",@constant('DESCR_SL')),'usergroup_ids'=>'','input_extra'=>" disabled=\"disabled\"",'list_mode'=>true), 0);?>

                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="company_id") {?>
                        <div class="clear" id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__">
                            <div class="correct-picker-but">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('override_box'=>"Y"), 0);?>

                            </div>
                        </div>
                    <?php } else { ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields_inner")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields_inner"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="text" value="" name="override_products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" disabled="disabled" />
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields_inner"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php }?>
                    </td>
                </tr>
                </table>
            <?php }?>
            </td>
            <?php } ?>
        </tr>
        </table>
        </div>
    </td>
</tr>
</table>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("apply"),'but_name'=>"dispatch[products.m_override]",'but_role'=>"button_main"), 0);?>

</div>

</form>
</div>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="products_m_update_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("products.m_update"), ENT_QUOTES, 'UTF-8');?>
" />

<table>
<tr>
    <td>

        <div id="scrolled_div_top" class="scroll-x scroll-top"></div>
        <div id="scrolled_div" class="scroll-x scroll-border">
        <table class="table-fixed">
        <tr>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <th>&nbsp;</th>
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars["field_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_name"]->_loop = false;
 $_smarty_tpl->tpl_vars['field_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_name"]->key => $_smarty_tpl->tpl_vars["field_name"]->value) {
$_smarty_tpl->tpl_vars["field_name"]->_loop = true;
 $_smarty_tpl->tpl_vars['field_key']->value = $_smarty_tpl->tpl_vars["field_name"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['field_key']->value=="company_id") {?>
            <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
            <?php } else { ?>
            <th><?php if (is_array($_smarty_tpl->tpl_vars['field_name']->value)) {?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_key']->value);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></th>
            <?php }?>
            <?php } ?>
        </tr>
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
        <tr >
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <td valign="top" class="pad">
            <?php if ($_smarty_tpl->tpl_vars['type']->value!="L"||$_smarty_tpl->tpl_vars['type']->value=="L"&&$_smarty_tpl->tpl_vars['localizations']->value) {?>
                <table class="no-border">
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_groups']->value[$_smarty_tpl->tpl_vars['type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value]) {?>
                <tr>
                    <td valign="top" class="nowrap pad <?php if ($_smarty_tpl->tpl_vars['field']->value=="product") {?>strong<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
                    <td valign="top" class="pad nowrap">
                        <?php if ($_smarty_tpl->tpl_vars['type']->value=="A") {?>
                            <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]"/>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="B") {?>
                            <input type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-medium" size="5" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" />
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="C") {?>
                            <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                        <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value]=="Y") {?>checked="checked"<?php }?> />
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="D") {?>
                            <textarea class="input-xlarge" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" rows="3" cols="40"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="S") {?>
                            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value['name'], ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                <?php  $_smarty_tpl->tpl_vars['v_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v_name']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['name']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v_name']->key => $_smarty_tpl->tpl_vars['v_name']->value) {
$_smarty_tpl->tpl_vars['v_name']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v_name']->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value]==$_smarty_tpl->tpl_vars['v_id']->value) {?>selected="selection"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v_name']->value);?>
</option>
                                <?php } ?>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="T") {?>
                            <div class="correct-picker-but">
                            <?php if ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_timestamp_holder_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="avail_since") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_avail_holder_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            <?php }?>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="L") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization'],'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]"), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="E") {?> 
                            <div class="correct-picker-but">
                                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"categories",'input_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][category_ids]",'radio_input_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][main_category]",'item_ids'=>$_smarty_tpl->tpl_vars['product']->value['category_ids'],'main_category'=>$_smarty_tpl->tpl_vars['product']->value['main_category'],'hide_link'=>true,'display_input_id'=>"category_ids",'view_mode'=>"list"), 0);?>

                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="W") {?> 
                            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = fn_get_product_details_views($_smarty_tpl->tpl_vars['product_data']->value['product_id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['product']->value['details_layout']==$_smarty_tpl->tpl_vars['layout']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                            </select>
                        <?php }?>
                    </td>
                </tr>
                <?php }?>
                <?php } ?>
                </table>
            <?php }?>
            </td>
            <?php } ?>

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars["field"]->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value!="product_id"&&($_smarty_tpl->tpl_vars['field']->value!="localization"||$_smarty_tpl->tpl_vars['field']->value=="localization"&&$_smarty_tpl->tpl_vars['localizations']->value)) {?>
            <td valign="top" class="pad">
                    <?php if ($_smarty_tpl->tpl_vars['field']->value=="main_pair") {?>
                        <table width="420"><tr><td><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"product_main",'image_key'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'image_pair'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'image_object_type'=>"product",'image_type'=>"M",'no_thumbnail'=>true), 0);?>
</td></tr></table>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="tracking") {?>
                        <select    name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                            <option value="O" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']=="O") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("track_with_options");?>
</option>
                            <option value="B" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("track_without_options");?>
</option>
                            <option value="D" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("dont_track");?>
</option>
                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="zero_price_action") {?>
                        <select name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                            <option value="R" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_refuse");?>
</option>
                            <option value="P" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_permit");?>
</option>
                            <option value="A" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_ask_price");?>
</option>
                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="taxes") {?>
                        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][tax_ids]" value="" />
                        <?php  $_smarty_tpl->tpl_vars["tax"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tax"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tax"]->key => $_smarty_tpl->tpl_vars["tax"]->value) {
$_smarty_tpl->tpl_vars["tax"]->_loop = true;
?>
                        <div class="select-field nowrap">
                            <label class="checkbox" for="products_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
]" id="products_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tax']->value['tax_id'],$_smarty_tpl->tpl_vars['product']->value['tax_ids'])) {?>checked="checked"<?php }?>  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" />
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</label>
                        </div>
                        <?php } ?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="features") {?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_features']) {?>
                        <table >
                        <?php  $_smarty_tpl->tpl_vars["pf"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pf"]->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['product_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["pf"]->key => $_smarty_tpl->tpl_vars["pf"]->value) {
$_smarty_tpl->tpl_vars["pf"]->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars["pf"]->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['pf']->value['feature_type']!="G") {?>
                        <tr>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pf']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</td>
                            <td >
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>$_smarty_tpl->tpl_vars['pf']->value,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'pid'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);?>

                            </td>
                        </tr>
                        <?php }?>
                        <?php } ?>
                        <?php  $_smarty_tpl->tpl_vars["pf"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pf"]->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['product_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["pf"]->key => $_smarty_tpl->tpl_vars["pf"]->value) {
$_smarty_tpl->tpl_vars["pf"]->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars["pf"]->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['pf']->value['feature_type']=="G"&&$_smarty_tpl->tpl_vars['pf']->value['subfeatures']) {?>
                        <tr>
                            <td colspan="2"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pf']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span></td>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['subfeature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subfeature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pf']->value['subfeatures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subfeature']->key => $_smarty_tpl->tpl_vars['subfeature']->value) {
$_smarty_tpl->tpl_vars['subfeature']->_loop = true;
?>
                        <tr>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</td>
                            <td><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>$_smarty_tpl->tpl_vars['subfeature']->value,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'pid'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);?>
</td>
                        </tr>
                        <?php } ?>
                        <?php }?>
                        <?php } ?>
                        </table>
                        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][features_exist]" value="Y" />
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                        <div class="correct-picker-but">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"prod_date",'date_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['timestamp'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="localization") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]",'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization']), 0);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="usergroup_ids") {?>
                        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"product_ug_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'usergroups'=>fn_get_usergroups("C",@constant('DESCR_SL')),'usergroup_ids'=>$_smarty_tpl->tpl_vars['product']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>true), 0);?>

                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="company_id") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields_inner_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields_inner_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" />
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields_inner_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php }?>
            </td>
            <?php }?>
            <?php } ?>
        </tr>
        <?php } ?>
        </table>
        </div>
    </td>
</tr>
</table>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"products_m_update_form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("update_products"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'extra_tools'=>Smarty::$_smarty_vars['capture']['extra_tools'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
