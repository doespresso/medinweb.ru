<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 17:46:18
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/selectable_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17171201025343fdaad9b0a4-31746482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '247d5c90f41b9ff683075a0ea8f04a53d1d85ee3' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/selectable_box.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17171201025343fdaad9b0a4-31746482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'disable_input' => 0,
    'selected_fields' => 0,
    'field_id' => 0,
    'fields' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'field_name' => 0,
    'item' => 0,
    'html_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5343fdaaf01cf0_45783866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5343fdaaf01cf0_45783866')) {function content_5343fdaaf01cf0_45783866($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('selected_fields','available_fields'));
?>
<table width="100%">
    <tr>
        <td class="center">
            <h4 class="nobold"><?php echo $_smarty_tpl->__("selected_fields");?>
</h4>
        </td>
        <td></td>
        <td class="center">
            <h4 class="nobold"><?php echo $_smarty_tpl->__("available_fields");?>
</h4>
        </td>
    </tr>
</table>

<hr>

<table width="100%">
    <tr>
        <td width="48%">
            <p>
                <label for="left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-all hidden"></label>
                <select class="input-full" id="left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]" multiple="multiple" size="10" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                    <?php if (is_array($_smarty_tpl->tpl_vars['selected_fields']->value)) {?>
                        <?php  $_smarty_tpl->tpl_vars["active"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["active"]->_loop = false;
 $_smarty_tpl->tpl_vars["field_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selected_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["active"]->key => $_smarty_tpl->tpl_vars["active"]->value) {
$_smarty_tpl->tpl_vars["active"]->_loop = true;
 $_smarty_tpl->tpl_vars["field_id"]->value = $_smarty_tpl->tpl_vars["active"]->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['field_id']->value], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    <?php }?>
                </select>
            </p>
            <p>
                <a onclick="Tygh.$('#left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('up');" class="icon-chevron-up"></a>
                <a onclick="Tygh.$('#left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('down');" class="icon-chevron-down"></a>
            </p>
        </td>
        <td width="4%" class="center chevron-icons">
            <a onclick="Tygh.$('#right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').moveOptions('#left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="icon-chevron-left"></a>
            <br>
            <a onclick="Tygh.$('#left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').moveOptions('#right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
check_required: true, message: Tygh.tr('error_exim_layout_missed_fields')<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);" class="icon-chevron-right"></a>
        </td>
        <td width="48%" valign="top">
            <select class="input-full" name="right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" id="right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" multiple="multiple" size="10" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                <?php  $_smarty_tpl->tpl_vars["field_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["field_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_name"]->key => $_smarty_tpl->tpl_vars["field_name"]->value) {
$_smarty_tpl->tpl_vars["field_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["field_id"]->value = $_smarty_tpl->tpl_vars["field_name"]->key;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['selected_fields']->value[$_smarty_tpl->tpl_vars['field_id']->value]) {?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php }?>
                <?php } ?>
            </select>
            <div class="controls">
                <div class="right update-for-all">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['item']->value['update_for_all'],'object_id'=>$_smarty_tpl->tpl_vars['item']->value['object_id'],'name'=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]",'hide_element'=>$_smarty_tpl->tpl_vars['html_id']->value), 0);?>

                </div>
            </div>
        </td>
    </tr>
</table><?php }} ?>
