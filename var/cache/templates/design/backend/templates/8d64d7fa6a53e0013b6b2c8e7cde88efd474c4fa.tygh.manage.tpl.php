<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:29:04
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/profile_fields/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:694500463535e2d70a5d3a7-32291325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d64d7fa6a53e0013b6b2c8e7cde88efd474c4fa' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/profile_fields/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '694500463535e2d70a5d3a7-32291325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_inputs' => 0,
    'profile_fields_areas' => 0,
    'profile_fields' => 0,
    'd' => 0,
    'section' => 0,
    '_colspan' => 0,
    's_title' => 0,
    'fields' => 0,
    'field' => 0,
    'key' => 0,
    '_show' => 0,
    '_required' => 0,
    'custom_fields' => 0,
    'update_link_text' => 0,
    'extra_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e2d710b1c42_14816145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e2d710b1c42_14816145')) {function content_535e2d710b1c42_14816145($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('edit','view','position_short','description','type','show','required','contact_information','billing_address','shipping_address','checkbox','input_field','radiogroup','selectbox','textarea','date','email','zip_postal_code','phone','country','state','address_type','delete','no_items','add_field','profile_fields'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["update_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
<?php if (fn_check_form_permissions('')) {?>
    <?php $_smarty_tpl->tpl_vars["update_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="fields_form"  class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php echo smarty_function_math(array('equation'=>"x + 5",'assign'=>"_colspan",'x'=>sizeof($_smarty_tpl->tpl_vars['profile_fields_areas']->value)),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th><?php echo $_smarty_tpl->__("position_short");?>
</th>
    <th><?php echo $_smarty_tpl->__("description");?>
</th>
    <th><?php echo $_smarty_tpl->__("type");?>
</th>
    <?php  $_smarty_tpl->tpl_vars["d"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["d"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields_areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["d"]->key => $_smarty_tpl->tpl_vars["d"]->value) {
$_smarty_tpl->tpl_vars["d"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["d"]->key;
?>
    <th class="center">
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['d']->value);?>
<br /><?php echo $_smarty_tpl->__("show");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("required");?>

    </th>
    <?php } ?>
    <th>&nbsp;</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['fields']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value!="E") {?>
    <tr>
        <td colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-header">
            <?php if ($_smarty_tpl->tpl_vars['section']->value=="C") {?><?php $_smarty_tpl->tpl_vars["s_title"] = new Smarty_variable($_smarty_tpl->__("contact_information"), null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="B") {?><?php $_smarty_tpl->tpl_vars["s_title"] = new Smarty_variable($_smarty_tpl->__("billing_address"), null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="S") {?><?php $_smarty_tpl->tpl_vars["s_title"] = new Smarty_variable($_smarty_tpl->__("shipping_address"), null, 0);?>
            <?php }?>
            <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_title']->value, ENT_QUOTES, 'UTF-8');?>
</h5>
        </td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
    <tr>
        <td class="center">
        <?php if ($_smarty_tpl->tpl_vars['section']->value!="B"&&$_smarty_tpl->tpl_vars['field']->value['is_default']!="Y") {?>
            <?php $_smarty_tpl->tpl_vars["extra_fields"] = new Smarty_variable(true, null, 0);?>
            <?php $_smarty_tpl->tpl_vars["custom_fields"] = new Smarty_variable(true, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['matching_id']) {?>
                <input type="hidden" name="matches[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <input type="checkbox" name="field_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
        <?php }?>
        </td>
        <td><input class="input-micro input-hidden" type="text" size="3" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['position'], ENT_QUOTES, 'UTF-8');?>
" /></td>
        <td>
            <a href="<?php echo htmlspecialchars(fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])), ENT_QUOTES, 'UTF-8');?>
"  data-ct-field-section="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a>
        </td>
        <td class="nowrap">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {?><?php echo $_smarty_tpl->__("checkbox");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="I") {?><?php echo $_smarty_tpl->__("input_field");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="R") {?><?php echo $_smarty_tpl->__("radiogroup");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S") {?><?php echo $_smarty_tpl->__("selectbox");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="T") {?><?php echo $_smarty_tpl->__("textarea");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {?><?php echo $_smarty_tpl->__("date");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="E") {?><?php echo $_smarty_tpl->__("email");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {?><?php echo $_smarty_tpl->__("zip_postal_code");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="P") {?><?php echo $_smarty_tpl->__("phone");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="O") {?><a href="<?php echo htmlspecialchars(fn_url("countries.manage"), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("country");?>
&nbsp;&rsaquo;&rsaquo;</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="A") {?><a href="<?php echo htmlspecialchars(fn_url("states.manage"), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("state");?>
&nbsp;&rsaquo;&rsaquo;</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="N") {?><?php echo $_smarty_tpl->__("address_type");?>

            <?php }?>
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][section]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][matching_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
" />


        </td>

        <?php  $_smarty_tpl->tpl_vars["d"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["d"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields_areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["d"]->key => $_smarty_tpl->tpl_vars["d"]->value) {
$_smarty_tpl->tpl_vars["d"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["d"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["_show"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['key']->value)."_show", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["_required"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['key']->value)."_required", null, 0);?>
        <td class="center">
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>
                <input type="radio" name="fields_data[email][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-switch-availability" />
            <?php } else { ?>
                <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-switch-availability" />
            <?php }?>
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>Y<?php } else { ?>N<?php }?>" />
            <span id="req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>_email<?php }?>">
                <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y"||$_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="N"||$_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>disabled="disabled"<?php }?> />
            </span>
        </td>
        <?php } ?>
        <td class="nowrap">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete"),'class'=>"cm-confirm",'href'=>"profile_fields.delete?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])));?>
</li>
                <?php }?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['update_link_text']->value,'href'=>fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']))));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <div class="hidden-tools">
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>
    </tr>
    
    <?php $_smarty_tpl->tpl_vars["custom_fields"] = new Smarty_variable(false, null, 0);?>
    <?php } ?>
    <?php }?>
<?php } ?>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</table>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"profile_fields.add",'prefix'=>"top",'title'=>__("add_field"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['extra_fields']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[profile_fields.m_delete]",'form'=>"fields_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profile_fields.m_update]",'but_role'=>"submit-link",'but_target_form'=>"fields_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("profile_fields"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
