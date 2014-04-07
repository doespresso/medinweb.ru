<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:43:58
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/upgrade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1605938113533e9afe351305-30625654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a296b41d6a60d36ba83373e6cc595806d82a11b9' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/upgrade.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1605938113533e9afe351305-30625654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'next_version_info' => 0,
    'images_dir' => 0,
    'addon' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9afe471535_53168717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9afe471535_53168717')) {function content_533e9afe471535_53168717($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons','changes','next_step'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<div id="upgrade">
    
<?php if (!$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['license_key']) {?>

        <script type="text/javascript">
            Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                    Tygh.$('#rus_activate').trigger('click');

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
        </script>

        <p><?php echo $_smarty_tpl->__("rus_connect.activate_text");?>
</p>

        <a id="rus_activate" class="cm-dialog-opener cm-ajax btn btn-primary" data-ca-target-id="rus_activate_form" title="<?php echo $_smarty_tpl->__("rus_connect.activate_title");?>
" href="<?php echo htmlspecialchars(fn_url("rus_upgrade.activate"), ENT_QUOTES, 'UTF-8');?>
">Выполнить активацию</a>

<?php } else { ?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/rus_build_pack/views/rus_upgrade/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.install_subheader")), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['next_version_info']->value['addons_info']) {?>
            <p><?php echo $_smarty_tpl->__("rus_connect.install_text");?>
</p>

            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"collapsed",'title'=>__("rus_connect.install_subheader_instruction"),'target'=>"#collapsable_upgrade_instruction"), 0);?>


            <div id="collapsable_upgrade_instruction" class="collapse">
                <?php echo $_smarty_tpl->__("rus_connect.install_text_instruction");?>

            </div> 

            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" name="rus_upgrade" class="form-horizontal form-edit" enctype="multipart/form-data">
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.install_download_addons"),'target'=>"#collapsable_download_addons"), 0);?>


                <div id="collapsable_download_addons" class="in collapse">
                    <table class="table table-addons table-wizard">
                        <thead>
                        <tr>
                            <th class="left"></th>
                            <th width="75%"><?php echo $_smarty_tpl->__("addons");?>
</th>
                            <th width="15%" colspan="2"><?php echo $_smarty_tpl->__("rus_connect.new_version");?>
</th>
                        </tr>
                        </thead>
                        <?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['next_version_info']->value['addons_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["addon"]->key;
?>
                        <tr>
                            <td class="addon-icon">
                                <div class="bg-icon">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/rus_build_pack/simtechdev.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
                                </div>
                            </td>
                            <td width="65%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
                                    <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['addon']->value['tooltip']) {?>
                                    <br/> 
                                    <span class="row-status object-group-details"><?php echo $_smarty_tpl->__("changes");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['tooltip'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                </div>
                            </td>
                            <td width="10%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_version_info']->value['version_list'][$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            </td>
                            <td width="5%">
                                <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N">
                                <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                    <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y">
                                    <?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['addon']->value['type']));?>

                                </label>     
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>  

            <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[upgrade_center.upgrade_rus]",'but_target_form'=>"rus_upgrade",'but_text'=>__("next_step")), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            </form>
        <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['next_version_info']->value['notify']) {?>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_version_info']->value['notify'], ENT_QUOTES, 'UTF-8');?>
</p>
                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->__('text_no_upgrades_available');?>
</p>
                <?php }?>

        <?php }?>


<?php }?>

<!--upgrade--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_connect.install"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
