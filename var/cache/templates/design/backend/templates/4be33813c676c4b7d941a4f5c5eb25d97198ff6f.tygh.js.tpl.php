<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:02:37
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/banners/pickers/banners/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020623270534293ddeeed51-49488409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be33813c676c4b7d941a4f5c5eb25d97198ff6f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/banners/pickers/banners/js.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1020623270534293ddeeed51-49488409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_id' => 0,
    'default_name' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'clone' => 0,
    'holder' => 0,
    'position_field' => 0,
    'input_name' => 0,
    'position' => 0,
    'banner' => 0,
    'hide_delete_button' => 0,
    'view_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534293de005a42_01061471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534293de005a42_01061471')) {function content_534293de005a42_01061471($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['banner_id']->value=="0") {?>
    <?php $_smarty_tpl->tpl_vars["banner"] = new Smarty_variable($_smarty_tpl->tpl_vars['default_name']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["banner"] = new Smarty_variable((($tmp = @fn_get_banner_name($_smarty_tpl->tpl_vars['banner_id']->value))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."banner".((string)$_smarty_tpl->tpl_vars['rdelim']->value) : $tmp), null, 0);?>
<?php }?>

<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?>
        <td>
            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-text-short" <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>disabled="disabled"<?php }?> />
        </td>
    <?php }?>
    <td><a href="<?php echo htmlspecialchars(fn_url("banners.update?banner_id=".((string)$_smarty_tpl->tpl_vars['banner_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value, ENT_QUOTES, 'UTF-8');?>
</a></td>
    <td>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <li><a onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'b'); return false;"><?php echo $_smarty_tpl->__("delete");?>
</a></li>
            <?php }?>
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
</tr><?php }} ?>
