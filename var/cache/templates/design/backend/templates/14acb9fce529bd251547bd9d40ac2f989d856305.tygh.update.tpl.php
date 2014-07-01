<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:29:26
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/profile_fields/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1550952816535e2d86dd60e9-99129936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14acb9fce529bd251547bd9d40ac2f989d856305' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/profile_fields/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1550952816535e2d86dd60e9-99129936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'runtime' => 0,
    'hide_inputs' => 0,
    'id' => 0,
    'block_fields' => 0,
    'profile_fields_areas' => 0,
    'key' => 0,
    'd' => 0,
    '_show' => 0,
    '_required' => 0,
    '_colspan' => 0,
    'value_id' => 0,
    'value' => 0,
    'hide_multiple_buttons' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e2d870f6d57_71958669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e2d870f6d57_71958669')) {function content_535e2d870f6d57_71958669($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('general','variants','description','position','type','phone','zip_postal_code','checkbox','date','input_field','radiogroup','selectbox','textarea','email','states','country','address_type','section','contact_information','billing_address','shipping_address','contact_information','billing_address','shipping_address','user_class','show','required','position_short','description','new_profile_field','editing_profile_field'));
?>

<?php if ($_smarty_tpl->tpl_vars['field']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>



<script type="text/javascript">
//<![CDATA[
function fn_check_field_type(value, tab_id)
{
    Tygh.$('#' + tab_id).toggleBy(!(value == 'R' || value == 'S'));
}
//]]>
</script>


<?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']=="Y"||$_smarty_tpl->tpl_vars['field']->value['section']=="B") {?>
    <?php $_smarty_tpl->tpl_vars["block_fields"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_multiple_buttons"] = new Smarty_variable("hidden", null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_fields_form" class="form-horizontal form-edit  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="cm-j-tabs cm-track tabs">
    <ul class="nav nav-tabs">
        <li id="tab_new_profile<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['block_fields']->value||($_smarty_tpl->tpl_vars['field']->value['field_type']!="R"&&$_smarty_tpl->tpl_vars['field']->value['field_type']!="S")) {?>hidden<?php }?>"><a><?php echo $_smarty_tpl->__("variants");?>
</a></li>
    </ul>
</div>
<div class="cm-tabs-content">
    <div id="content_tab_new_profile<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="field_data[field_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="field_data[matching_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="field_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="field_data[field_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" />
        <div class="control-group">
            <label for="elm_field_description" class="control-label cm-required"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
            <input id="elm_field_description" class="input-large" type="text" name="field_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
            <div class="controls">
            <input class="input-text-short" id="elm_field_position" type="text" size="3" name="field_data[position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['position'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_type"><?php echo $_smarty_tpl->__("type");?>
:</label>
            <div class="controls">
                <?php if (strpos("AON",$_smarty_tpl->tpl_vars['field']->value['field_type'])===false) {?>
                    <select id="elm_field_type" name="field_data[field_type]" onchange="fn_check_field_type(this.value, 'tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>disabled="disabled"<?php }?>>
                        <option value="P" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("phone");?>
</option>
                        <option value="Z" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zip_postal_code");?>
</option>
                        <option value="C" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option>
                        <option value="D" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("date");?>
</option>
                        <option value="I" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="I") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("input_field");?>
</option>
                        <option value="R" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option>
                        <option value="S" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option>
                        <option value="T" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option>
                        <option value="E" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="E") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("email");?>
</option>
                    </select>
                <?php } else { ?>
                    <select id="elm_field_type" name="field_data[field_type]" disabled="disabled">
                        <option value="A" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("states");?>
</option>
                        <option value="O" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="O") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("country");?>
</option>
                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("address_type");?>
</option>
                    </select>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>
                <input type="hidden" name="field_data[field_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_section"><?php echo $_smarty_tpl->__("section");?>
:</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <input type="hidden" name="field_data[section]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['section'], ENT_QUOTES, 'UTF-8');?>
" />
                <span class="shift-input">
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['section']=="C") {?><?php echo $_smarty_tpl->__("contact_information");?>
<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['section']=="B"||$_smarty_tpl->tpl_vars['field']->value['section']=="S") {?><?php echo $_smarty_tpl->__("billing_address");?>
/<?php echo $_smarty_tpl->__("shipping_address");?>
<?php }?>
                </span>
            <?php } else { ?>
                <select id="elm_field_section" name="field_data[section]">
                    <option value="C"><?php echo $_smarty_tpl->__("contact_information");?>
</option>
                    <option value="BS"><?php echo $_smarty_tpl->__("billing_address");?>
/<?php echo $_smarty_tpl->__("shipping_address");?>
</option>
                </select>
            <?php }?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_user_class"><?php echo $_smarty_tpl->__("user_class");?>
:</label>
            <div class="controls">
                <input id="elm_field_user_class" class="input-large" type="text" name="field_data[class]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        
        <?php  $_smarty_tpl->tpl_vars["d"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["d"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields_areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["d"]->key => $_smarty_tpl->tpl_vars["d"]->value) {
$_smarty_tpl->tpl_vars["d"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["d"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["_show"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['key']->value)."_show", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["_required"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['key']->value)."_required", null, 0);?>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['d']->value);?>
 (<?php echo $_smarty_tpl->__("show");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("required");?>
):</label>
            <div class="controls">
                <input type="hidden" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y"&&$_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>Y<?php } else { ?>N<?php }?>" />
                <input type="checkbox" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-switch-availability checkbox" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>disabled="disabled"<?php }?> />&nbsp;

                <input type="hidden" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>Y<?php } else { ?>N<?php }?>" />
                <span id="req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>_email<?php }?>"><input type="checkbox" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="N"||$_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>disabled="disabled"<?php }?> class="checkbox" /></span>
            </div>
        </div>
        <?php } ?>
    <!--content_tab_new_profile<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="<?php if ($_smarty_tpl->tpl_vars['block_fields']->value||($_smarty_tpl->tpl_vars['field']->value['field_type']!="R"&&$_smarty_tpl->tpl_vars['field']->value['field_type']!="S")) {?>hidden<?php }?>" id="content_tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <table class="table table-middle">
        <tr id="field_values_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="no-border td-no-bg">
            <td colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">
                <table width="1" class="table">
                    <thead>
                        <tr class="cm-first-sibling">
                            <th style="width: 8%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                            <th style="width: 68%"><?php echo $_smarty_tpl->__("description");?>
</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                <?php if ($_smarty_tpl->tpl_vars['field']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["value_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["values"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["value_id"]->value = $_smarty_tpl->tpl_vars["value"]->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["values"]['iteration']++;
?>
                    <tr class="cm-first-sibling">
                        <td>
                            <input class="input-micro" size="3" type="text" name="field_data[values][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_id']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['values']['iteration'], ENT_QUOTES, 'UTF-8');?>
" />
                        </td>
                        <td>
                            <input class="span7" type="text" name="field_data[values][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_id']->value, ENT_QUOTES, 'UTF-8');?>
][description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" />
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>"Y"), 0);?>

                        </td>
                    </tr>
                    <?php } ?>
                <?php }?>
                <tr id="box_elm_values_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['hide_multiple_buttons']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_multiple_buttons']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                    <td><input class="input-micro" size="3" type="text" name="field_data[add_values][0][position]" /></td>
                    <td><input class="span7" type="text" name="field_data[add_values][0][description]" /></td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"elm_values_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>2), 0);?>
</td>
                </tr>
                </table>
            </td>
        </tr>
        </table>
    <!--content_tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profile_fields.update]",'but_target_form'=>"add_fields_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

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

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_profile_field"), null, 0);?>
<?php } else { ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_profile_field");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.":&nbsp;".((string)$_smarty_tpl->tpl_vars['field']->value['description']), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
