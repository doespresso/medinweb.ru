<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:51:09
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272778681533e9cad94b661-97975513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6d397fa8dbe1cee70f9454de548750d9604927' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/subheader.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '272778681533e9cad94b661-97975513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'anchor' => 0,
    'class' => 0,
    'extra' => 0,
    'title' => 0,
    'tooltip' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cada1d0f8_71138555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cada1d0f8_71138555')) {function content_533e9cada1d0f8_71138555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
<a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>
<h2 class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "subheader" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


    <?php if (trim($_smarty_tpl->tpl_vars['tooltip']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltip']->value), 0);?>

    <?php }?>
</h2><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/subheader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/subheader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
<a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>
<h2 class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "subheader" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


    <?php if (trim($_smarty_tpl->tpl_vars['tooltip']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltip']->value), 0);?>

    <?php }?>
</h2><?php }?><?php }} ?>
