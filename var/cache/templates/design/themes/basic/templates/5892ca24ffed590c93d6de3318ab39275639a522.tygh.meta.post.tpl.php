<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 16:00:04
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/seo/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:352680095533e9ec40df817-47987135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5892ca24ffed590c93d6de3318ab39275639a522' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/seo/hooks/index/meta.post.tpl',
      1 => 1396611754,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '352680095533e9ec40df817-47987135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'languages' => 0,
    'language' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9ec41668c9_25353887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9ec41668c9_25353887')) {function content_533e9ec41668c9_25353887($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
<meta name="robots" content="noindex<?php if (@constant('HTTPS')===true) {?>,nofollow<?php }?>" />
<?php }?>

<?php if (sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
<?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
<link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="rtl" type="text/html" rel="alternate" charset="<?php echo htmlspecialchars(@constant('CHARSET'), ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code']))), ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
<meta name="robots" content="noindex<?php if (@constant('HTTPS')===true) {?>,nofollow<?php }?>" />
<?php }?>

<?php if (sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
<?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
<link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="rtl" type="text/html" rel="alternate" charset="<?php echo htmlspecialchars(@constant('CHARSET'), ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code']))), ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>
<?php }?><?php }?><?php }} ?>
