<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:39:31
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/activate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1029563272533e9ae20878c7-15599185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028479c714a848a9c59d34c42a1ae65a254dabc5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/activate.tpl',
      1 => 1396612049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1029563272533e9ae20878c7-15599185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9ae21a9e32_04189577',
  'variables' => 
  array (
    'license_info' => 0,
    'addons' => 0,
    'config' => 0,
    'rus_register' => 0,
    'license_txt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9ae21a9e32_04189577')) {function content_533e9ae21a9e32_04189577($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('please_enter_license_here','close'));
?>
<?php if (!defined("AJAX_REQUEST")) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php }?>

<div id="rus_activate_form">
    <form name="activate-form"  method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit <?php if (defined("AJAX_REQUEST")) {?>cm-ajax cm-ajax-force<?php }?>">
        <input type="hidden" class="cm-no-hide-input" name="selected_section" value="content_license" />

        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['license_info']->value->status=="D") {?>
            <?php echo $_smarty_tpl->__("rus_connect.end_trial_text");?>

        <?php }?>
        <div id="content_license">

        <?php if (!fn_russian_pack_available()) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.activate_subheader")), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.activate_true_subheader")), 0);?>

            <p><?php echo $_smarty_tpl->__("rus_connect.activate_true_text");?>
</p>
        <?php }?>
            <input type="hidden" id="rus_register_store_name" name="rus_register[store_name]"  value="<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['store_name']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['store_name'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['http_host'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['http_path'], ENT_QUOTES, 'UTF-8');?>
<?php }?>"/>
            <input type="hidden" name="result_ids" value="rus_activate_form"/>

        <?php if (!$_smarty_tpl->tpl_vars['config']->value['demo_mode']) {?>
            <div class="control-group">
                <label class="control-label" for="elm_license_key"><?php echo $_smarty_tpl->__("rus_connect.license_key");?>
:</label>
                <div class="controls">
                    <input type="text" name="rus_register[license_key]" id="elm_license_key" size="10" value="<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['license_key']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['license_key'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rus_register']->value['license_key'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="input-long" placeholder="<?php echo $_smarty_tpl->__("please_enter_license_here");?>
"/>
                    <?php if (!empty($_smarty_tpl->tpl_vars['license_info']->value)&&$_smarty_tpl->tpl_vars['license_info']->value->status=='T') {?> (<?php echo $_smarty_tpl->__('rus_build_pack.active_to');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_info']->value->expiration, ENT_QUOTES, 'UTF-8');?>
)<?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['license_info']->value)&&$_smarty_tpl->tpl_vars['license_info']->value->status=='D') {?> (<?php echo $_smarty_tpl->__('rus_build_pack.end_tial_to');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_info']->value->expiration, ENT_QUOTES, 'UTF-8');?>
)<?php }?>
                </div>
            </div>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['license_key']) {?>
              <div class="control-group">
                  <div class="controls">
                      <?php echo $_smarty_tpl->__("rus_connect.activate_text");?>

                  </div>
              </div>
        <?php }?>
        <!--content_license--></div>
        <?php if (!$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['license_key']) {?>
            <div id="content_trial">
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.trial_subheader")), 0);?>

                <p><?php echo $_smarty_tpl->__("rus_connect.trial_text");?>
</p>
                <div class="control-group">
                    <label class="control-label" for="elm_email"><?php echo $_smarty_tpl->__("rus_connect.email_helpdesk");?>
:</label>
                    <div class="controls">
                        <input type="text" name="rus_register[email]" id="elm_email" size="10" value="" class="input-long" placeholder="<?php echo $_smarty_tpl->__("rus_connect.please_enter_email");?>
"/>
                    </div>
                </div>
            <!--content_trial--></div>
        <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


        <div class="control-group">
            <div class="controls">
                <textarea id="rus_build_license" name="rus_register[license_txt]" cols="23" rows="12" class="input-large" readonly="readonly" disabled="disabled"><?php if ($_smarty_tpl->tpl_vars['license_txt']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_txt']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></textarea>
            </div>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['config']->value['demo_mode']) {?>
            <div class="control-group">
                <div class="controls">
                    <label for="id_accept_terms" class="cm-check-agreement checkbox">
                        <input type="checkbox" id="id_accept_terms" name="rus_register[rus_accept_terms]" <?php if ($_smarty_tpl->tpl_vars['rus_register']->value['rus_accept_terms']=="Y"||$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['rus_accept_terms']=="Y") {?>checked="checked"<?php }?>  value="Y">
                        <?php echo $_smarty_tpl->__("rus_connect.terms_n_conditions");?>

                    </label>
                </div>
                <div class="controls">
                    <label for="help_us" class="checkbox">
                        <input id="help_us" type="checkbox" name="rus_register[rus_help_us]" <?php if ($_smarty_tpl->tpl_vars['rus_register']->value['rus_help_us']=="Y"||$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['rus_help_us']=="Y") {?>checked="checked"<?php }?> value="Y">
                        <?php echo $_smarty_tpl->__("rus_connect.help_us");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("rus_connect.help_us_tooltip")), 0);?>

                    </label>
                </div>
            </div>

            <?php if (!defined("AJAX_REQUEST")) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php }?>

            <?php if (defined("AJAX_REQUEST")) {?>
            <div class="buttons-container">
                <a class="btn pull-left cm-dialog-closer cm-tooltip"><?php echo $_smarty_tpl->__("close");?>
</a>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_meta'=>"btn btn-primary",'but_name'=>"dispatch[rus_upgrade.activate]",'but_target_form'=>"activate-form",'but_text'=>__("rus_connect.activate")), 0);?>


                <?php if (defined("AJAX_REQUEST")) {?>
            </div>
            <?php }?>

            <?php if (!defined("AJAX_REQUEST")) {?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>
        <?php }?>
    </form>
<!--rus_activate_form--></div>

<?php if (!defined("AJAX_REQUEST")) {?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.activate_title"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>


<?php }?><?php }} ?>
