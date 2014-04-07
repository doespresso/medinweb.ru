<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 15:59:47
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/categories/categories_text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:660751714534141b3f39714-77897605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f672c05e92d1898c38ba2e8c3e7abb5dc460312b' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/categories/categories_text_links.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '660751714534141b3f39714-77897605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'category' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534141b412faf6_91268693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534141b412faf6_91268693')) {function content_534141b412faf6_91268693($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<ul class="text-links">
    <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>
    <li class="level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['category']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> active<?php }?>"><a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <?php } ?>
</ul>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/categories/categories_text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<ul class="text-links">
    <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>
    <li class="level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['category']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> active<?php }?>"><a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <?php } ?>
</ul>
<?php }?><?php }?><?php }} ?>
