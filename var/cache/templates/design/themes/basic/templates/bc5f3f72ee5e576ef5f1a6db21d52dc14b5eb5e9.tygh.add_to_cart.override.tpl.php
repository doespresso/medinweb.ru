<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 18:55:12
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/catalog_mode/hooks/buttons/add_to_cart.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138082244853416ad0199a85-58746766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5f3f72ee5e576ef5f1a6db21d52dc14b5eb5e9' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/catalog_mode/hooks/buttons/add_to_cart.override.tpl',
      1 => 1396611752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '138082244853416ad0199a85-58746766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'but_id' => 0,
    'but_role' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53416ad0217951_71205366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416ad0217951_71205366')) {function content_53416ad0217951_71205366($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('buy_now','buy_now'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (fn_catalog_mode_enabled('')=='Y') {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['buy_now_url']!='') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>__("buy_now"),'but_href'=>$_smarty_tpl->tpl_vars['product']->value['buy_now_url'],'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_name'=>''), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['add_to_cart_empty_buy_now_url']!='Y') {?>
		&nbsp;
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/catalog_mode/hooks/buttons/add_to_cart.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/catalog_mode/hooks/buttons/add_to_cart.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (fn_catalog_mode_enabled('')=='Y') {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['buy_now_url']!='') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>__("buy_now"),'but_href'=>$_smarty_tpl->tpl_vars['product']->value['buy_now_url'],'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_name'=>''), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['add_to_cart_empty_buy_now_url']!='Y') {?>
		&nbsp;
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
