<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:48:29
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180504190753429e9d00b260-05542897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6d17e4c2a651b568c3441009785a5f4231cd8a0' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/colorpicker.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180504190753429e9d00b260-05542897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cp_id' => 0,
    'cp_name' => 0,
    'cp_value' => 0,
    'cp_storage' => 0,
    'cp_class' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53429e9d06a501_31615113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53429e9d06a501_31615113')) {function content_53429e9d06a501_31615113($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="input-prepend">
    <?php $_smarty_tpl->tpl_vars['cp_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cp_id']->value)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) : $tmp), null, 0);?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/colorpicker.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/colorpicker.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="input-prepend">
    <?php $_smarty_tpl->tpl_vars['cp_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cp_id']->value)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) : $tmp), null, 0);?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
</div><?php }?><?php }} ?>
