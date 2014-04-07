<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:44
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/reward_points/hooks/products/options_advanced.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526222540533e9c58dec5c0-71806654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca2342d1877b82c01e8168dba1f2634200f1010' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/reward_points/hooks/products/options_advanced.post.tpl',
      1 => 1396611754,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1526222540533e9c58dec5c0-71806654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'dont_show_points' => 0,
    'show_price_values' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c58e43826_64329058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c58e43826_64329058')) {function content_533e9c58e43826_64329058($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&!$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_advanced.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/products/options_advanced.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&!$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }?><?php }} ?>
