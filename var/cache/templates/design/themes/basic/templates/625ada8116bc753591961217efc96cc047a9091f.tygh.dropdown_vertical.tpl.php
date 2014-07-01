<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 09:33:01
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/menu/dropdown_vertical.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43987443853438a0d323f13-70897284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625ada8116bc753591961217efc96cc047a9091f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/menu/dropdown_vertical.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '43987443853438a0d323f13-70897284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53438a0d389220_61572081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53438a0d389220_61572081')) {function content_53438a0d389220_61572081($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="clearfix">
    <ul id="vmenu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown dropdown-vertical<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation']=="Y") {?> rtl<?php }?>">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0);?>

    </ul>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/dropdown_vertical.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/dropdown_vertical.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<div class="clearfix">
    <ul id="vmenu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown dropdown-vertical<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation']=="Y") {?> rtl<?php }?>">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0);?>

    </ul>
</div><?php }?><?php }} ?>
