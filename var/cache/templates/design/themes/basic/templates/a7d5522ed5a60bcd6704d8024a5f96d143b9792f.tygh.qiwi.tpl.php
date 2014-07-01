<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:46:11
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/components/payments/qiwi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331581474535e317382eae6-35865841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7d5522ed5a60bcd6704d8024a5f96d143b9792f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/components/payments/qiwi.tpl',
      1 => 1396612049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1331581474535e317382eae6-35865841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e3173898207_89451498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e3173898207_89451498')) {function content_535e3173898207_89451498($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('phone','phone'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/rus_build_pack/jquery.inputmask-multi.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/rus_build_pack/input_mask.js"),$_smarty_tpl);?>


<div class="qiwi">
    <div class="control-group">
        <label for="qiwi_phone_number" class="control-label cm-required"><?php echo $_smarty_tpl->__("phone");?>
</label>
        <div class="controls">
            <input id="qiwi_phone_number" size="35" type="text" name="payment_info[phone]" value="<?php echo htmlspecialchars(fn_russian_pack_normalize_phone($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']), ENT_QUOTES, 'UTF-8');?>
" class="input-big cm-mask" />
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/qiwi.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/qiwi.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/rus_build_pack/jquery.inputmask-multi.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/rus_build_pack/input_mask.js"),$_smarty_tpl);?>


<div class="qiwi">
    <div class="control-group">
        <label for="qiwi_phone_number" class="control-label cm-required"><?php echo $_smarty_tpl->__("phone");?>
</label>
        <div class="controls">
            <input id="qiwi_phone_number" size="35" type="text" name="payment_info[phone]" value="<?php echo htmlspecialchars(fn_russian_pack_normalize_phone($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']), ENT_QUOTES, 'UTF-8');?>
" class="input-big cm-mask" />
        </div>
    </div>
</div>
<?php }?><?php }} ?>
