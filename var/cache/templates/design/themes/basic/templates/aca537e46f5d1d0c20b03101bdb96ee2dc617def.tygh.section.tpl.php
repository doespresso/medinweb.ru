<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 00:39:22
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1922780220533f187a0b0fe5-09003105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca537e46f5d1d0c20b03101bdb96ee2dc617def' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/section.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1922780220533f187a0b0fe5-09003105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'section_title' => 0,
    'id' => 0,
    'collapse' => 0,
    'class' => 0,
    'rnd' => 0,
    'section_body_class' => 0,
    'section_content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f187a169e53_13668269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f187a169e53_13668269')) {function content_533f187a169e53_13668269($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('open_action','hide','open_action','hide'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(sprintf("s_%s",md5($_smarty_tpl->tpl_vars['section_title']->value)), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php if ($_COOKIE[$_smarty_tpl->tpl_vars['id']->value]||$_smarty_tpl->tpl_vars['collapse']->value) {?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<div class="section-border<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div  class="section-title <?php if (!$_smarty_tpl->tpl_vars['collapse']->value) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['section_title']->value;?>
</span>
        <span class="section-switch section-switch-on"><?php echo $_smarty_tpl->__("open_action");?>
<i class="icon-down-open"></i></span>
        <span class="section-switch section-switch-off"><?php echo $_smarty_tpl->__("hide");?>
<i class="icon-up-open"></i></span>
    </div>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['section_body_class']->value)===null||$tmp==='' ? "section-body" : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>
</div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/section.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/section.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(sprintf("s_%s",md5($_smarty_tpl->tpl_vars['section_title']->value)), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php if ($_COOKIE[$_smarty_tpl->tpl_vars['id']->value]||$_smarty_tpl->tpl_vars['collapse']->value) {?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<div class="section-border<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div  class="section-title <?php if (!$_smarty_tpl->tpl_vars['collapse']->value) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['section_title']->value;?>
</span>
        <span class="section-switch section-switch-on"><?php echo $_smarty_tpl->__("open_action");?>
<i class="icon-down-open"></i></span>
        <span class="section-switch section-switch-off"><?php echo $_smarty_tpl->__("hide");?>
<i class="icon-up-open"></i></span>
    </div>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['section_body_class']->value)===null||$tmp==='' ? "section-body" : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>
</div>
</div><?php }?><?php }} ?>
