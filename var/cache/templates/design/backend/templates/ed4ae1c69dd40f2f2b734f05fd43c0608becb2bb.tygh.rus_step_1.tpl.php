<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:47:13
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/rus_step_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1404032933533e9bc189f706-21018734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4ae1c69dd40f2f2b734f05fd43c0608becb2bb' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/rus_step_1.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1404032933533e9bc189f706-21018734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reload' => 0,
    'check_list' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9bc192f944_56045338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9bc192f944_56045338')) {function content_533e9bc192f944_56045338($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('status','successful','error','go_back','log_action_update','next_step'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    
    <div>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" name="rus_upgrade" class="form-horizontal form-edit" enctype="multipart/form-data">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.check_install_subheader"),'target'=>"#collapsable_download_addons"), 0);?>

            <div id="collapsable_download_addons" class="in collapse">
                <?php if ($_smarty_tpl->tpl_vars['reload']->value=="Y") {?>
                <p><?php echo $_smarty_tpl->__("rus_connect.check_install_text");?>
</p>
                <?php } else { ?>
                <p><?php echo $_smarty_tpl->__("rus_connect.check_install_true");?>
</p>
                <?php }?>
                   <table class="table table-addons table-wizard">
                        <thead>
                        <tr>
                            <th width="80%"><?php echo $_smarty_tpl->__("rus_connect.download_addons");?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
                        </tr>
                        </thead>
                        <?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['check_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["addon"]->key;
?>
                        <tr>
                            <td width="80%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
                                    <span class="row-status object-group-details"><?php echo $_smarty_tpl->__("rus_connect.install_dir");?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['install_src_dir'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            </td>
                            <td width="10%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php if ($_smarty_tpl->tpl_vars['addon']->value['check_download']=="Y") {?><?php echo $_smarty_tpl->__("successful");?>
<?php } else { ?><?php echo $_smarty_tpl->__("error");?>
<?php }?></span>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
            </div>  
         <input type="hidden" name="check_conflict" value="Y">
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

            <?php if ($_smarty_tpl->tpl_vars['reload']->value=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[upgrade_center.upgrade_rus.reload]",'but_target_form'=>"rus_upgrade",'but_text'=>__("log_action_update")), 0);?>

            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[upgrade_center.upgrade_rus.rus_step_2]",'but_target_form'=>"rus_upgrade",'but_text'=>__("next_step")), 0);?>

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

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.check_install"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
