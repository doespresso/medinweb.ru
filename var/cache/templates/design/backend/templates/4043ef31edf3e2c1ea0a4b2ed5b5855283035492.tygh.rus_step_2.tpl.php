<?php /* Smarty version Smarty-3.1.15, created on 2014-05-04 18:16:42
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/rus_step_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:427203774533e9bcaca2b32-56625173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4043ef31edf3e2c1ea0a4b2ed5b5855283035492' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/rus_step_2.tpl',
      1 => 1396612049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '427203774533e9bcaca2b32-56625173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9bcad97f70_88924981',
  'variables' => 
  array (
    'check_permissions' => 0,
    'check_permission_list' => 0,
    'c' => 0,
    'repo' => 0,
    'check_permission_result' => 0,
    'conflict_list' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9bcad97f70_88924981')) {function content_533e9bcad97f70_88924981($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_data','no_data','auto_set_permissions_via_ftp','export_to_ftp','text_uc_non_writable_files','no_data','version','status','active','disable','go_back','next_step'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <div>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" name="rus_upgrade" class="form-horizontal form-edit" enctype="multipart/form-data">
        <?php if ($_smarty_tpl->tpl_vars['check_permissions']->value=="Y") {?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"collapsed",'title'=>__("rus_connect.check_permissions_files"),'target'=>"#collapsable_files_instruction"), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['check_permission_list']->value) {?>
                <div id="collapsable_files_instruction" class="collapse">
                        <div class="row-fluid">
                                <div class="span6">
                                    <table class="table table-middle table-condensed">
                                        <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['check_permission_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
?>
                                            <tr>
                                                <td title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                    <span class="pull-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                                </td>
                                            </tr>
                                            <?php }
if (!$_smarty_tpl->tpl_vars["c"]->_loop) {
?>
                                            <tr>
                                                <td class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                        </div>
                </div>
            <?php }?>

            <div id="collapsable_files_instruction" class="collapse">
                    <p><?php echo $_smarty_tpl->__("rus_connect.conflict_addons_text_true");?>
</p>
                    <div class="row-fluid">
                            <div class="span6">
                                <table class="table table-middle table-condensed">
                                    <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['repo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
?>
                                        <tr>
                                            <td title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <span class="pull-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                            </td>
                                        </tr>
                                        <?php }
if (!$_smarty_tpl->tpl_vars["c"]->_loop) {
?>
                                        <tr>
                                            <td class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                    </div>
             </div>

        <?php } else { ?>

            <p><?php echo $_smarty_tpl->__("rus_connect.upgrade.not_writable");?>
:</p>
            <p><?php echo $_smarty_tpl->__("auto_set_permissions_via_ftp");?>
:</p>

            <?php ob_start();?><?php echo htmlspecialchars(fn_url("settings.manage&section_id=Upgrade_center"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_href'=>$_tmp1,'but_text'=>__("export_to_ftp")), 0);?>

            
            <?php if ($_smarty_tpl->tpl_vars['check_permission_result']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("text_uc_non_writable_files"),'target'=>"#collapsable_files_instruction"), 0);?>


                <div id="collapsable_files_instruction" class="in collapse">
                        <div class="row-fluid">
                                <div class="span6">
                                    <table class="table table-middle table-condensed">
                                        <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['check_permission_result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
?>
                                            <tr>
                                                <td title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                    <span class="pull-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                                </td>
                                            </tr>
                                            <?php }
if (!$_smarty_tpl->tpl_vars["c"]->_loop) {
?>
                                            <tr>
                                                <td class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                        </div>
                </div>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['conflict_list']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.conflict_addons_subheader"),'target'=>"#collapsable_download_addons"), 0);?>

                <div id="collapsable_download_addons" class="in collapse">
                    <p><?php echo $_smarty_tpl->__("rus_connect.conflict_addons_text");?>
</p>
                    <table class="table table-addons table-wizard">
                        <thead>
                        <tr>
                            <th width="80%"><?php echo $_smarty_tpl->__("rus_connect.deleted_addons");?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->__("version");?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
                        </tr>
                        </thead>
                        <?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['conflict_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["addon"]->key;
?>
                        <tr>
                            <td width="80%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
                                    <span class="row-status object-group-details"><?php echo $_smarty_tpl->__("rus_connect.backup_root");?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['backup_root'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            </td>
                            <td width="10%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['version'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            </td>
                            <td width="10%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php if ($_smarty_tpl->tpl_vars['addon']->value['status']=="A") {?><?php echo $_smarty_tpl->__("active");?>
<?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['status']=="D") {?><?php echo $_smarty_tpl->__("disable");?>
<?php }?></span>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>  
             <input type="hidden" name="check_conflict" value="Y">
        <?php } else { ?>
            <p><?php echo $_smarty_tpl->__("rus_connect.conflict_addons_done");?>
</p>
        <?php }?>
    </form>
    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?> 

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[rus_upgrade.clear_progress]",'but_target_form'=>"rus_upgrade",'but_text'=>__("go_back")), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['check_permissions']->value!="Y") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[upgrade_center.upgrade_rus.repeat_check_perm]",'but_target_form'=>"rus_upgrade",'but_text'=>__("rus_connect.button.repeat_check_perm")), 0);?>

            <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[upgrade_center.upgrade_rus.rus_step_3]",'but_target_form'=>"rus_upgrade",'but_text'=>__("next_step")), 0);?>

            <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.check_conflict_title"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
