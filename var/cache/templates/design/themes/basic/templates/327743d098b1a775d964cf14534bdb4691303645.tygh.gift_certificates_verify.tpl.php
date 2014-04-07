<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:55:10
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1191806341533e9d9e416064-48910716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327743d098b1a775d964cf14534bdb4691303645' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl',
      1 => 1396611753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1191806341533e9d9e416064-48910716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d9e476b60_07965862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d9e476b60_07965862')) {function content_533e9d9e476b60_07965862($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('certificate_verification','enter_code','enter_code','go','gift_certificate_verification','certificate_verification','enter_code','enter_code','go','gift_certificate_verification'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="gift-validate code-input discount-coupon">
<form name="gift_certificate_verification_form" class="cm-ajax cm-form-dialog-opener cm-dialog-auto-size" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="gift_cert_verify" />
    <h4><?php echo $_smarty_tpl->__("certificate_verification");?>
</h4>
    <div class="control-group input-append">
        <label for="id_verify_code" class="cm-required hidden"><?php echo $_smarty_tpl->__("enter_code");?>
</label>
        <i class="icon-gift"></i><input type="text" name="verify_code" id="id_verify_code" value="<?php echo $_smarty_tpl->__("enter_code");?>
" class="input-text cm-hint" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"gift_certificates.verify",'alt'=>__("go")), 0);?>

    </div>
</form>
</div>

<div title="<?php echo $_smarty_tpl->__("gift_certificate_verification");?>
" id="gift_cert_verify">
<!--gift_cert_verify--></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="gift-validate code-input discount-coupon">
<form name="gift_certificate_verification_form" class="cm-ajax cm-form-dialog-opener cm-dialog-auto-size" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="gift_cert_verify" />
    <h4><?php echo $_smarty_tpl->__("certificate_verification");?>
</h4>
    <div class="control-group input-append">
        <label for="id_verify_code" class="cm-required hidden"><?php echo $_smarty_tpl->__("enter_code");?>
</label>
        <i class="icon-gift"></i><input type="text" name="verify_code" id="id_verify_code" value="<?php echo $_smarty_tpl->__("enter_code");?>
" class="input-text cm-hint" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"gift_certificates.verify",'alt'=>__("go")), 0);?>

    </div>
</form>
</div>

<div title="<?php echo $_smarty_tpl->__("gift_certificate_verification");?>
" id="gift_cert_verify">
<!--gift_cert_verify--></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
