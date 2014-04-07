<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 00:39:21
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/pickers/categories/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1391725539533f18797832a7-21090502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5baa372089860e328c2e3cdc83b6317ef5f2bb1' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/pickers/categories/js.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1391725539533f18797832a7-21090502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_id' => 0,
    'default_name' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'single_line' => 0,
    'clone' => 0,
    'holder' => 0,
    'first_item' => 0,
    'multiple' => 0,
    'hide_link' => 0,
    'position_field' => 0,
    'input_name' => 0,
    'position' => 0,
    'category' => 0,
    'hide_delete_button' => 0,
    'view_only' => 0,
    'display_input_id' => 0,
    'extra' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f18798a3b47_88892546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f18798a3b47_88892546')) {function content_533f18798a3b47_88892546($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['category_id']->value=="0") {?>
    <?php $_smarty_tpl->tpl_vars["category"] = new Smarty_variable($_smarty_tpl->tpl_vars['default_name']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["category"] = new Smarty_variable((($tmp = @fn_get_category_name($_smarty_tpl->tpl_vars['category_id']->value))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category".((string)$_smarty_tpl->tpl_vars['rdelim']->value) : $tmp), null, 0);?>
<?php }?>
<<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?> <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item no-padding<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['first_item']->value&&$_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>
<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_link']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-text-short<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />&nbsp;<?php }?><a href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>
    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
</strong>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
        <a onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'c'); return false;" class="icon-delete-big" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a>
    <?php }?>
<?php } else { ?>
    <input class="input-text cm-picker-value-description" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="category_name" readonly="readonly" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />
<?php }?>
</<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?>>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="pickers/categories/js.tpl" id="<?php echo smarty_function_set_id(array('name'=>"pickers/categories/js.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['category_id']->value=="0") {?>
    <?php $_smarty_tpl->tpl_vars["category"] = new Smarty_variable($_smarty_tpl->tpl_vars['default_name']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["category"] = new Smarty_variable((($tmp = @fn_get_category_name($_smarty_tpl->tpl_vars['category_id']->value))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category".((string)$_smarty_tpl->tpl_vars['rdelim']->value) : $tmp), null, 0);?>
<?php }?>
<<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?> <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item no-padding<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['first_item']->value&&$_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>
<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_link']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-text-short<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />&nbsp;<?php }?><a href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>
    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
</strong>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
        <a onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'c'); return false;" class="icon-delete-big" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a>
    <?php }?>
<?php } else { ?>
    <input class="input-text cm-picker-value-description" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="category_name" readonly="readonly" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />
<?php }?>
</<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?>>
<?php }?><?php }} ?>
