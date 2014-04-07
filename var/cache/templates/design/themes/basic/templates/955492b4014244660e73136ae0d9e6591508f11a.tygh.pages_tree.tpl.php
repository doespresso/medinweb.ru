<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 21:05:03
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/pages/components/pages_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12282058885341893fe81c52-92960294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955492b4014244660e73136ae0d9e6591508f11a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/pages/components/pages_tree.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12282058885341893fe81c52-92960294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'root' => 0,
    'tree' => 0,
    'not_root' => 0,
    'page' => 0,
    'shift' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5341894001f7c5_37218105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5341894001f7c5_37218105')) {function content_5341894001f7c5_37218105($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['root']->value) {?>

<?php $_smarty_tpl->tpl_vars["not_root"] = new Smarty_variable("_", null, 0);?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_id']==$_REQUEST['page_id']) {?><?php $_smarty_tpl->tpl_vars["path"] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value['id_path'], null, 0);?><?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php echo smarty_function_math(array('equation'=>"x*10",'x'=>$_smarty_tpl->tpl_vars['page']->value['level'],'assign'=>"shift"),$_smarty_tpl);?>

    <li>
        <a href="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_LINK')) {?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['page']->value['link']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']) {?> target="_blank"<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['level']!="0") {?> style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
    </li>
<?php } ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/pages/components/pages_tree.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/pages/components/pages_tree.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['root']->value) {?>

<?php $_smarty_tpl->tpl_vars["not_root"] = new Smarty_variable("_", null, 0);?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_id']==$_REQUEST['page_id']) {?><?php $_smarty_tpl->tpl_vars["path"] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value['id_path'], null, 0);?><?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php echo smarty_function_math(array('equation'=>"x*10",'x'=>$_smarty_tpl->tpl_vars['page']->value['level'],'assign'=>"shift"),$_smarty_tpl);?>

    <li>
        <a href="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_LINK')) {?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['page']->value['link']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']) {?> target="_blank"<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['level']!="0") {?> style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
    </li>
<?php } ?><?php }?><?php }} ?>
