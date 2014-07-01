<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 09:33:01
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/sidebox_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124094965453438a0d38f0b4-37094268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bcf10a53ae2f2b6e37222490d65fdaea82b0c14' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/sidebox_dropdown.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '124094965453438a0d38f0b4-37094268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'iid' => 0,
    'items' => 0,
    'foreach_name' => 0,
    'separated' => 0,
    'childs' => 0,
    'item' => 0,
    'block' => 0,
    'item_id' => 0,
    'item_url' => 0,
    'name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53438a0d473889_18638781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53438a0d473889_18638781')) {function content_53438a0d473889_18638781($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->tpl_vars["foreach_name"] = new Smarty_variable("item_".((string)$_smarty_tpl->tpl_vars['iid']->value), null, 0);?><?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_element")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<li class="<?php if ($_smarty_tpl->tpl_vars['separated']->value&&!$_smarty_tpl->getVariable('smarty')->value['foreach'][$_smarty_tpl->tpl_vars['foreach_name']->value]['last']) {?>b-border <?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>dir<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><i class="icon-right-open"></i><i class="icon-left-open"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_childs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="hide-border">&nbsp;</div><ul><?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>true,'iid'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['item_id']->value]), 0);?>
</ul><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php $_smarty_tpl->tpl_vars["item_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } ?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/sidebox_dropdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/sidebox_dropdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->tpl_vars["foreach_name"] = new Smarty_variable("item_".((string)$_smarty_tpl->tpl_vars['iid']->value), null, 0);?><?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_element")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<li class="<?php if ($_smarty_tpl->tpl_vars['separated']->value&&!$_smarty_tpl->getVariable('smarty')->value['foreach'][$_smarty_tpl->tpl_vars['foreach_name']->value]['last']) {?>b-border <?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>dir<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><i class="icon-right-open"></i><i class="icon-left-open"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_childs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="hide-border">&nbsp;</div><ul><?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>true,'iid'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['item_id']->value]), 0);?>
</ul><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php $_smarty_tpl->tpl_vars["item_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } ?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>
