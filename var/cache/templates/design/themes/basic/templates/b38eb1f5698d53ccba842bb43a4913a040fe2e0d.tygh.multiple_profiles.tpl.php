<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:42:49
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/profiles/components/multiple_profiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2133000679535e30a9c5c3e3-29614811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38eb1f5698d53ccba842bb43a4913a040fe2e0d' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/profiles/components/multiple_profiles.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2133000679535e30a9c5c3e3-29614811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
    'show_title' => 0,
    'hide_profile_select' => 0,
    'user_profiles' => 0,
    'up' => 0,
    'profile_id' => 0,
    'use_ajax' => 0,
    'config' => 0,
    'hide_profile_delete' => 0,
    'skip_create' => 0,
    'create_href' => 0,
    'hide_profile_name' => 0,
    'no_edit' => 0,
    'user_data' => 0,
    'profile_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e30aa0b52e4_43083910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e30aa0b52e4_43083910')) {function content_535e30aa0b52e4_43083910($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('select_profile','select_profile','or','create_profile','create_profile','profile_name','new','main','main','select_profile','select_profile','or','create_profile','create_profile','profile_name','new','main','main'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles']=="Y"&&$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>

<?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("select_profile")), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_profile_select']->value) {?>
<div class="control-group select-profile">
    <label><?php echo $_smarty_tpl->__("select_profile");?>
:</label>

    <?php  $_smarty_tpl->tpl_vars["up"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["up"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["up"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["up"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["up"]->key => $_smarty_tpl->tpl_vars["up"]->value) {
$_smarty_tpl->tpl_vars["up"]->_loop = true;
 $_smarty_tpl->tpl_vars["up"]->iteration++;
 $_smarty_tpl->tpl_vars["up"]->last = $_smarty_tpl->tpl_vars["up"]->iteration === $_smarty_tpl->tpl_vars["up"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["pfe"]['last'] = $_smarty_tpl->tpl_vars["up"]->last;
?>
        <?php if ($_smarty_tpl->tpl_vars['up']->value['profile_id']==$_smarty_tpl->tpl_vars['profile_id']->value) {?>
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['up']->value['profile_name'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php } else { ?>
        <a <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>class="cm-ajax"<?php }?> href="<?php echo htmlspecialchars(fn_url(fn_link_attach(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"profile","selected_section"),"profile_id=".((string)$_smarty_tpl->tpl_vars['up']->value['profile_id']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['up']->value['profile_name'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['pfe']['last']) {?>&nbsp;|&nbsp;<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['up']->value['profile_type']!="P"&&!$_smarty_tpl->tpl_vars['hide_profile_delete']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-confirm",'but_target_id'=>"checkout_steps,cart_items,checkout_totals",'but_role'=>"delete",'but_text'=>"&nbsp;",'but_href'=>"profiles.delete_profile?profile_id=".((string)$_smarty_tpl->tpl_vars['up']->value['profile_id'])), 0);?>

        <?php }?>
    <?php } ?>
    <?php if (!$_smarty_tpl->tpl_vars['skip_create']->value) {?>
        &nbsp;&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;&nbsp;<?php if ($_REQUEST['profile']=="new") {?><strong><?php echo $_smarty_tpl->__("create_profile");?>
</strong><?php } else { ?><a class="<?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?> cm-ajax<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['create_href']->value) {?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['create_href']->value), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url(fn_link_attach(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"profile_id","selected_section"),"profile=new")), ENT_QUOTES, 'UTF-8');?>
<?php }?>" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo $_smarty_tpl->__("create_profile");?>
</a><?php }?>
    <?php }?>
</div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_profile_name']->value) {?>
<div class="control-group">
    <label for="elm_profile_id" class="cm-required"><?php echo $_smarty_tpl->__("profile_name");?>
:</label>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['action']=="add_profile"||$_smarty_tpl->tpl_vars['no_edit']->value!="Y") {?>
        <?php $_smarty_tpl->tpl_vars["profile_name"] = new Smarty_variable($_smarty_tpl->__("new"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["profile_name"] = new Smarty_variable($_smarty_tpl->__("main"), null, 0);?>
    <?php }?>

    <input type="hidden" name="user_data[profile_id]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['profile_id']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="text" class="input-text" id="elm_profile_id" name="user_data[profile_name]" size="32" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['profile_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }?>

<?php } else { ?>
    <input type="hidden" id="profile_name" name="user_data[profile_name]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_name'])===null||$tmp==='' ? $_smarty_tpl->__("main") : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/multiple_profiles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/multiple_profiles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles']=="Y"&&$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>

<?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("select_profile")), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_profile_select']->value) {?>
<div class="control-group select-profile">
    <label><?php echo $_smarty_tpl->__("select_profile");?>
:</label>

    <?php  $_smarty_tpl->tpl_vars["up"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["up"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["up"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["up"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["up"]->key => $_smarty_tpl->tpl_vars["up"]->value) {
$_smarty_tpl->tpl_vars["up"]->_loop = true;
 $_smarty_tpl->tpl_vars["up"]->iteration++;
 $_smarty_tpl->tpl_vars["up"]->last = $_smarty_tpl->tpl_vars["up"]->iteration === $_smarty_tpl->tpl_vars["up"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["pfe"]['last'] = $_smarty_tpl->tpl_vars["up"]->last;
?>
        <?php if ($_smarty_tpl->tpl_vars['up']->value['profile_id']==$_smarty_tpl->tpl_vars['profile_id']->value) {?>
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['up']->value['profile_name'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php } else { ?>
        <a <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>class="cm-ajax"<?php }?> href="<?php echo htmlspecialchars(fn_url(fn_link_attach(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"profile","selected_section"),"profile_id=".((string)$_smarty_tpl->tpl_vars['up']->value['profile_id']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['up']->value['profile_name'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['pfe']['last']) {?>&nbsp;|&nbsp;<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['up']->value['profile_type']!="P"&&!$_smarty_tpl->tpl_vars['hide_profile_delete']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-confirm",'but_target_id'=>"checkout_steps,cart_items,checkout_totals",'but_role'=>"delete",'but_text'=>"&nbsp;",'but_href'=>"profiles.delete_profile?profile_id=".((string)$_smarty_tpl->tpl_vars['up']->value['profile_id'])), 0);?>

        <?php }?>
    <?php } ?>
    <?php if (!$_smarty_tpl->tpl_vars['skip_create']->value) {?>
        &nbsp;&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;&nbsp;<?php if ($_REQUEST['profile']=="new") {?><strong><?php echo $_smarty_tpl->__("create_profile");?>
</strong><?php } else { ?><a class="<?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?> cm-ajax<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['create_href']->value) {?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['create_href']->value), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url(fn_link_attach(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"profile_id","selected_section"),"profile=new")), ENT_QUOTES, 'UTF-8');?>
<?php }?>" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo $_smarty_tpl->__("create_profile");?>
</a><?php }?>
    <?php }?>
</div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_profile_name']->value) {?>
<div class="control-group">
    <label for="elm_profile_id" class="cm-required"><?php echo $_smarty_tpl->__("profile_name");?>
:</label>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['action']=="add_profile"||$_smarty_tpl->tpl_vars['no_edit']->value!="Y") {?>
        <?php $_smarty_tpl->tpl_vars["profile_name"] = new Smarty_variable($_smarty_tpl->__("new"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["profile_name"] = new Smarty_variable($_smarty_tpl->__("main"), null, 0);?>
    <?php }?>

    <input type="hidden" name="user_data[profile_id]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['profile_id']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="text" class="input-text" id="elm_profile_id" name="user_data[profile_name]" size="32" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['profile_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }?>

<?php } else { ?>
    <input type="hidden" id="profile_name" name="user_data[profile_name]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_name'])===null||$tmp==='' ? $_smarty_tpl->__("main") : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php }?><?php }} ?>
