<?php /* Smarty version Smarty-3.1.15, created on 2014-05-04 14:22:31
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/upgrade_center/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1440571925536614e75b9136-89928707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca206c5764f8b2e05bf87ecf3ec7f1bcc0a74b4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/upgrade_center/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1440571925536614e75b9136-89928707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uc_filehash_failed' => 0,
    'installed_upgrades' => 0,
    'require_license_number' => 0,
    'config' => 0,
    'uc_settings' => 0,
    'packages' => 0,
    'package' => 0,
    'settings' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_536614e78b8b96_26821565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536614e78b8b96_26821565')) {function content_536614e78b8b96_26821565($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_formatfilesize')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.formatfilesize.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('note','text_uc_has_conflicts','view','license_number','apply','text_uc_license_number_required','upgrade','version','release_date','filesize','description','package_contents','install','upgrade_is_not_avail','update_period_expired','text_uc_upgrade_needed','file','text_no_upgrades_available','refresh_packages_list','settings','installed_upgrades','installed_upgrades'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php if (fn_allowed_for("ULTIMATE:FULL:TRIAL")) {?>
        <?php echo $_smarty_tpl->__("upgrade_center.upgrades_are_not_available_in_trial");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['uc_filehash_failed']->value) {?>
        <?php echo $_smarty_tpl->__("upgrade_center.filehash_check_failed");?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['installed_upgrades']->value['has_conflicts']==true) {?>
            <div class="notes">
                <h5><?php echo $_smarty_tpl->__("note");?>
:</h5>
                <?php echo $_smarty_tpl->__("text_uc_has_conflicts");?>
: <a class="tool-link" href="<?php echo htmlspecialchars(fn_url("upgrade_center.installed_upgrades"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view");?>
</a>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['require_license_number']->value==true) {?>
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="uc_license_form" class="form-horizontal form-edit">
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

                <div class="control-group">
                    <label for="elm_license_number" class="control-label"><?php echo $_smarty_tpl->__("license_number");?>
:</label>

                    <div class="controls">
                        <input type="text" name="settings_data[license_number]" id="elm_license_number" size="20"
                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uc_settings']->value['license_number'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[upgrade_center.update_settings]",'but_text'=>__("apply"),'but_role'=>"button_main"), 0);?>

                        <p class="muted"><?php echo $_smarty_tpl->__("text_uc_license_number_required");?>
</p>
                    </div>
                </div>
            </form>
        <?php } else { ?>

            <?php  $_smarty_tpl->tpl_vars["package"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["package"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["package"]->key => $_smarty_tpl->tpl_vars["package"]->value) {
$_smarty_tpl->tpl_vars["package"]->_loop = true;
?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
                    <?php echo $_smarty_tpl->__('upgrade_center');?>
 /
                    <span class="f-middle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
                    <div class="sidebar-row">
                        <h6><?php echo $_smarty_tpl->__("upgrade");?>
</h6>
                        <ul class="unstyled">
                            <li><?php echo $_smarty_tpl->__("version");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['to_version'], ENT_QUOTES, 'UTF-8');?>
</li>
                            <li><?php echo $_smarty_tpl->__("release_date");?>
: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['package']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])." ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</li>
                            <li><?php echo $_smarty_tpl->__("filesize");?>
: <?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['package']->value['size']);?>
</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="sidebar-row">
                        <h6><?php echo $_smarty_tpl->__("description");?>
</h6>
                        <p><?php echo $_smarty_tpl->tpl_vars['package']->value['description'];?>
</p>
                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <h4><?php echo $_smarty_tpl->__("package_contents");?>
</h4>
                <?php if ($_smarty_tpl->tpl_vars['package']->value['from_version']==@constant('PRODUCT_VERSION')) {?>
                    <?php if ($_smarty_tpl->tpl_vars['package']->value['is_avail']=='Y') {?>
                        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="uc_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['package_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <input type="hidden" name="package_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['package_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                            <input type="hidden" name="md5" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['md5'], ENT_QUOTES, 'UTF-8');?>
"/>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("install_btn", null, null); ob_start(); ?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[upgrade_center.get_upgrade]",'but_target_form'=>"uc_form_".((string)$_smarty_tpl->tpl_vars['package']->value['package_id']),'but_text'=>__("install")), 0);?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        </form>
                    <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['purchase_time_limit']=='Y') {?>
                        <span><?php echo $_smarty_tpl->__("upgrade_is_not_avail");?>
</span>
                    <?php } else { ?>
                        <span><?php echo $_smarty_tpl->__("update_period_expired");?>
</span>
                    <?php }?>
                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->__("text_uc_upgrade_needed",array("[to_version]"=>$_smarty_tpl->tpl_vars['package']->value['from_version'],"[your_version]"=>@constant('PRODUCT_VERSION')));?>
</p>
                <?php }?>
                <table class="table table-middle table-condensed">
                    <thead>
                    <th><?php echo $_smarty_tpl->__("file");?>
</th>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['package']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
?>
                        <tr>
                            <td title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value,120," ... ",true,true), ENT_QUOTES, 'UTF-8');?>

                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <?php }
if (!$_smarty_tpl->tpl_vars["package"]->_loop) {
?>
                <p><?php echo $_smarty_tpl->__("text_no_upgrades_available");?>
</p>
            <?php } ?>
        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("refresh_packages_list"),'href'=>"upgrade_center.refresh"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("settings"),'href'=>"settings.manage&section_id=Upgrade_center"));?>
</li>
        <li class="divider"></li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("installed_upgrades"),'href'=>"upgrade_center.installed_upgrades"));?>
 </li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php echo Smarty::$_smarty_vars['capture']['install_btn'];?>

    <?php if ($_smarty_tpl->tpl_vars['installed_upgrades']->value['has_upgrades']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"upgrade_center.installed_upgrades",'but_text'=>__("installed_upgrades"),'but_role'=>"link"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
