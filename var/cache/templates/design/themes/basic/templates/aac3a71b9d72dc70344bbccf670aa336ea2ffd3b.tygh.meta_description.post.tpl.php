<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 18:55:04
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_loginza/hooks/index/meta_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24529331553416ac838ce25-74201665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aac3a71b9d72dc70344bbccf670aa336ea2ffd3b' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_loginza/hooks/index/meta_description.post.tpl',
      1 => 1396612053,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '24529331553416ac838ce25-74201665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53416ac83ce831_29442589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416ac83ce831_29442589')) {function content_53416ac83ce831_29442589($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><meta name='loginza-verification' content=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['meta_content'], ENT_QUOTES, 'UTF-8');?>
 /><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_loginza/hooks/index/meta_description.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_loginza/hooks/index/meta_description.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><meta name='loginza-verification' content=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['meta_content'], ENT_QUOTES, 'UTF-8');?>
 /><?php }?><?php }} ?>