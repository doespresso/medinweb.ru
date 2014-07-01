<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:43:23
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_unisender/hooks/checkout/extra_payment_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1972818932535e30cb7b6008-03586821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '200adbfc75f08bbb080e39c281d58d734f5224b8' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_unisender/hooks/checkout/extra_payment_info.pre.tpl',
      1 => 1396628605,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1972818932535e30cb7b6008-03586821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'unisender_page_mailing_lists' => 0,
    'addons' => 0,
    'page_mailing_lists' => 0,
    'tab_id' => 0,
    'list' => 0,
    'unisender_user_mailing_lists' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e30cb89be76_77151080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e30cb89be76_77151080')) {function content_535e30cb89be76_77151080($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_unisender_signup_for_subscriptions','text_unisender_signup_for_subscriptions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['unisender_page_mailing_lists']->value&&$_smarty_tpl->tpl_vars['addons']->value['rus_unisender']['unisender_show_at_checkout']=='Y') {?>
    <?php if ((!$_smarty_tpl->tpl_vars['page_mailing_lists']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("text_unisender_signup_for_subscriptions")), 0);?>

    <?php }?>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_unisender/func.js"),$_smarty_tpl);?>

    <div class="unisender-container" id="unisender_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unisender_page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <div class="select-field">
                <label><input type="checkbox" name="unisender_lists[]" <?php if ($_smarty_tpl->tpl_vars['unisender_user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"  class="checkbox cm-unisender-subscribe" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['title'], ENT_QUOTES, 'UTF-8');?>
</label>
            </div>
        <?php } ?>
    <!--unisender_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_unisender/hooks/checkout/extra_payment_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_unisender/hooks/checkout/extra_payment_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['unisender_page_mailing_lists']->value&&$_smarty_tpl->tpl_vars['addons']->value['rus_unisender']['unisender_show_at_checkout']=='Y') {?>
    <?php if ((!$_smarty_tpl->tpl_vars['page_mailing_lists']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("text_unisender_signup_for_subscriptions")), 0);?>

    <?php }?>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_unisender/func.js"),$_smarty_tpl);?>

    <div class="unisender-container" id="unisender_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unisender_page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <div class="select-field">
                <label><input type="checkbox" name="unisender_lists[]" <?php if ($_smarty_tpl->tpl_vars['unisender_user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"  class="checkbox cm-unisender-subscribe" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['title'], ENT_QUOTES, 'UTF-8');?>
</label>
            </div>
        <?php } ?>
    <!--unisender_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php }?><?php }} ?>
