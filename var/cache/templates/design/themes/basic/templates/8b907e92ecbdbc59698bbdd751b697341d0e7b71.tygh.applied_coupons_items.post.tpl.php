<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:30
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2046362498533e9d76752c81-13955172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b907e92ecbdbc59698bbdd751b697341d0e7b71' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl',
      1 => 1396611753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2046362498533e9d76752c81-13955172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'ugc_key' => 0,
    'ugc' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d767ca1f7_47788763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d767ca1f7_47788763')) {function content_533e9d767ca1f7_47788763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('gift_certificate','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']) {?>
    <?php  $_smarty_tpl->tpl_vars["ugc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ugc"]->_loop = false;
 $_smarty_tpl->tpl_vars["ugc_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ugc"]->key => $_smarty_tpl->tpl_vars["ugc"]->value) {
$_smarty_tpl->tpl_vars["ugc"]->_loop = true;
 $_smarty_tpl->tpl_vars["ugc_key"]->value = $_smarty_tpl->tpl_vars["ugc"]->key;
?>
        <li>
        <span class="strong"><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
        <span><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['ugc_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ugc_key']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ugc']->value['cost']), 0);?>
)<?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('code'=>$_smarty_tpl->tpl_vars['ugc_key']->value,'additional_ids'=>",payment-methods",'r_url'=>rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])), 0);?>
</span>
        </li>
    <?php } ?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']) {?>
    <?php  $_smarty_tpl->tpl_vars["ugc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ugc"]->_loop = false;
 $_smarty_tpl->tpl_vars["ugc_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ugc"]->key => $_smarty_tpl->tpl_vars["ugc"]->value) {
$_smarty_tpl->tpl_vars["ugc"]->_loop = true;
 $_smarty_tpl->tpl_vars["ugc_key"]->value = $_smarty_tpl->tpl_vars["ugc"]->key;
?>
        <li>
        <span class="strong"><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
        <span><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['ugc_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ugc_key']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ugc']->value['cost']), 0);?>
)<?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('code'=>$_smarty_tpl->tpl_vars['ugc_key']->value,'additional_ids'=>",payment-methods",'r_url'=>rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])), 0);?>
</span>
        </li>
    <?php } ?>
<?php }?>
<?php }?><?php }} ?>
