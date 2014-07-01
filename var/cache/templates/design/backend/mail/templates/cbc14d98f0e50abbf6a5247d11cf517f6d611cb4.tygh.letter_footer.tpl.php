<?php /* Smarty version Smarty-3.1.15, created on 2014-05-04 22:43:05
         compiled from "/var/www/medinweb.ru/public/design/backend/mail/templates/common/letter_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92423205353668a39ca3433-22966017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc14d98f0e50abbf6a5247d11cf517f6d611cb4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/mail/templates/common/letter_footer.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '92423205353668a39ca3433-22966017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53668a39d1a2b8_73574767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53668a39d1a2b8_73574767')) {function content_53668a39d1a2b8_73574767($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('admin_text_letter_footer','admin_text_letter_footer'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><p>
    <?php echo $_smarty_tpl->__("admin_text_letter_footer",array("[company_name]"=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']));?>

</p>
</body>
</html><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/letter_footer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/letter_footer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><p>
    <?php echo $_smarty_tpl->__("admin_text_letter_footer",array("[company_name]"=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']));?>

</p>
</body>
</html><?php }?><?php }} ?>
