<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:50
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/tabs/components/product_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:952498790533e9c5e5f86f2-49265650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '882be2ea113cc22b659ca4d0f7bc6b50323cce95' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/tabs/components/product_tabs.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '952498790533e9c5e5f86f2-49265650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tabs' => 0,
    'tab' => 0,
    'tab_id' => 0,
    'tab_content_capture' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c5e708c98_26221752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c5e708c98_26221752')) {function content_533e9c5e708c98_26221752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_render_block')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.render_block.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars["tab"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tab"]->_loop = false;
 $_smarty_tpl->tpl_vars["tab_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tab"]->key => $_smarty_tpl->tpl_vars["tab"]->value) {
$_smarty_tpl->tpl_vars["tab"]->_loop = true;
 $_smarty_tpl->tpl_vars["tab_id"]->value = $_smarty_tpl->tpl_vars["tab"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup']!="Y"&&$_smarty_tpl->tpl_vars['tab']->value['status']=="A") {?>
            <?php $_smarty_tpl->tpl_vars["tab_content_capture"] = new Smarty_variable("tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value), null, 0);?>

            <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view"),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='T') {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_tab_id'=>$_smarty_tpl->tpl_vars['tab']->value['html_id']), 0);?>

                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value])) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab']=="N") {?>
                    <h1 class="tab-list-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
                <?php }?>
            <?php }?>

            <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="wysiwyg-content">
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>

            </div>
        <?php }?>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>

<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['tabsbox'];?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/tabs/components/product_tabs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/tabs/components/product_tabs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars["tab"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tab"]->_loop = false;
 $_smarty_tpl->tpl_vars["tab_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tab"]->key => $_smarty_tpl->tpl_vars["tab"]->value) {
$_smarty_tpl->tpl_vars["tab"]->_loop = true;
 $_smarty_tpl->tpl_vars["tab_id"]->value = $_smarty_tpl->tpl_vars["tab"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup']!="Y"&&$_smarty_tpl->tpl_vars['tab']->value['status']=="A") {?>
            <?php $_smarty_tpl->tpl_vars["tab_content_capture"] = new Smarty_variable("tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value), null, 0);?>

            <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view"),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='T') {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_tab_id'=>$_smarty_tpl->tpl_vars['tab']->value['html_id']), 0);?>

                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value])) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab']=="N") {?>
                    <h1 class="tab-list-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
                <?php }?>
            <?php }?>

            <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="wysiwyg-content">
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>

            </div>
        <?php }?>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>

<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['tabsbox'];?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
