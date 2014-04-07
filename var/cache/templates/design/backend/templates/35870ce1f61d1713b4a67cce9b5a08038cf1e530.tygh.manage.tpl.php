<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 19:24:44
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/template_editor/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2097697065533ecebca6ce73-41007121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35870ce1f61d1713b4a67cce9b5a08038cf1e530' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/template_editor/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2097697065533ecebca6ce73-41007121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'rel_path' => 0,
    'edit_file' => 0,
    'id' => 0,
    'config' => 0,
    'current_url' => 0,
    'dev_modes' => 0,
    'theme_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ecebcbe2760_45451010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ecebcbe2760_45451010')) {function content_533ecebcbe2760_45451010($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_style')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.style.php';
?><?php
fn_preload_lang_vars(array('text_restore_question','nothing_selected','open_file_or_create_new','new_file','create_file','could_not_open_file','select_file','upload','name','name','change_permissions','on_site_template_editing','restore_from_repository','change_permissions','download','rename','delete','rebuild_cache_automatically','rebuild_cache_automatically_tooltip','theme','new_file','create_file','new_folder','create_folder','upload_file','upload_file','create','template_editor'));
?>
<?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/template_editor_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/design_mode.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/bootstrap_switch/js/bootstrapSwitch.js"),$_smarty_tpl);?>


<?php echo smarty_function_style(array('src'=>"lib/bootstrap_switch/stylesheets/bootstrapSwitch.css"),$_smarty_tpl);?>


<script type="text/javascript">
    //<![CDATA[
    (function (_, $) {
        _.tr({
            text_restore_question : '<?php echo strtr($_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_enter_filename : '<?php echo $_smarty_tpl->__(strtr("text_enter_filename", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )));?>
',
            text_are_you_sure_to_delete_file : '<?php echo $_smarty_tpl->__(strtr("text_are_you_sure_to_delete_file", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )));?>
'
        });

        _.template_editor.company_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
';
        _.template_editor.rel_path = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rel_path']->value, ENT_QUOTES, 'UTF-8');?>
';
        <?php if ($_smarty_tpl->tpl_vars['edit_file']->value) {?>
        _.template_editor.edit_file = '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['edit_file']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
';
        <?php }?>
    }(Tygh, Tygh.$));
    //]]>
</script>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div id="error_box" class="hidden">
    <div align="center" class="notification-e">
        <div id="error_status"></div>
    </div>
</div>

<div id="status_box" class="hidden">
    <div class="notification-n" align="center">
        <div id="status"></div>
    </div>
</div>

<!--Editor-->
<div class="te-content cm-te-content">
    <div id="template_text"></div>
    <div id="template_image"></div>
</div>

<div class="cm-te-messages">
    <div class="te-not-selected empty-text">
        <h2><?php echo $_smarty_tpl->__("nothing_selected");?>
</h2>
    </div>
    <div class="te-empty-folder empty-text">
        <h2><?php echo $_smarty_tpl->__("open_file_or_create_new");?>
</h2>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_file",'text'=>__("new_file"),'content'=>Smarty::$_smarty_vars['capture']['add_new_file'],'link_text'=>__("create_file"),'act'=>"general",'link_class'=>"btn-primary",'icon'=>"icon-plus icon-white"), 0);?>

    </div>
    <div class="te-unknown-file empty-text">
        <h2><?php echo $_smarty_tpl->__("could_not_open_file");?>
</h2>
    </div>
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_capture_stack[0][] = array("upload_file", null, null); ob_start(); ?>
        <form name="upload_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit">
        <div class="control-group">
            <label for="type_<?php echo htmlspecialchars(md5("uploaded_data[0]"), ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("select_file");?>
</label>
            <div class="controls">
                <input type="hidden" name="fake" value="1" />
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"uploaded_data[0]"), 0);?>

                <input type="hidden" name="path" id="upload_path" />
            </div>
        </div>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("upload"),'but_name'=>"dispatch[template_editor.upload_file]",'but_meta'=>"cm-te-upload-file",'cancel_action'=>"close"), 0);?>

        </div>
        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_folder", null, null); ob_start(); ?>
        <form name="add_folder_form" class="form-horizontal cm-form-highlight form-edit">
        <div class="control-group">
            <label for="new_folder" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" class="span9" name="new_folder" id="new_folder" value="" size="30" />
            </div>
        </div>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'but_meta'=>"cm-te-create-folder cm-dialog-closer"), 0);?>

        </div>
        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_file", null, null); ob_start(); ?>
        <form name="add_file_form" class="form-horizontal cm-form-highlight form-edit">
        <div class="control-group">
            <label for="new_file" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <input type="text" class="span9" name="new_file" id="new_file" value="" size="30" />
            </div>
        </div>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'but_meta'=>"cm-dialog-closer cm-te-create-file"), 0);?>

        </div>
        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>   
</div>

<?php if (!defined("IS_WINDOWS")) {?>
    <div class="hidden" title="<?php echo $_smarty_tpl->__("change_permissions");?>
" id="content_chmod">
        <?php echo $_smarty_tpl->getSubTemplate ("views/template_editor/components/chmod.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
        <li class="cm-te-onsite-editing"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("on_site_template_editing"),'href'=>fn_url("customization.update_mode?type=design&status=enable&return_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)),'target'=>"_blank"));?>
</li>
        <li class="divider"></li>
        <li class="cm-te-restore"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("restore_from_repository")));?>
</li>
        <?php if (!defined("IS_WINDOWS")) {?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"chmod",'link_text'=>__("change_permissions"),'act'=>"link",'link_class'=>"cm-te-perms"), 0);?>
</li>
        <?php }?>
        <li class="cm-te-getfile"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("download")));?>
</li>
        <li class="cm-te-rename"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("rename")));?>
</li>
        <li class="cm-te-delete"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete")));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"ce-te-actions"));?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-te-save-file btn-primary disabled",'but_role'=>"submit",'but_onclick'=>"fn_save_template();"), 0);?>

    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row">
        <ul class="unstyled list-with-btns">
            <li>
                <div class="list-description">
                    <?php echo $_smarty_tpl->__("rebuild_cache_automatically");?>
 <i class="cm-tooltip icon-question-sign" title="<?php echo $_smarty_tpl->__("rebuild_cache_automatically_tooltip");?>
"></i>
                </div>
                <div class="switch switch-mini cm-switch-change list-btns" id="rebuild_cache_automatically">
                    <input type="checkbox" name="compile_check" value="1" <?php if ($_smarty_tpl->tpl_vars['dev_modes']->value['compile_check']) {?>checked="checked"<?php }?>/>
                </div>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        //<![CDATA[
        (function (_, $) {
            $(_.doc).on('switch-change', '.cm-switch-change', function (e, data) {

                var value = data.value;
                $.ceAjax('request', fn_url("template_editor.update_dev_mode"), {
                    data: {
                        dev_mode: data.el.prop('name'),
                        state: value ? 1 : 0
                    }
                });
            });
        }(Tygh, Tygh.$));
        //]]>
    </script>

    <hr>
    <div class="sidebar-row te-file-wrapper">
        <h6><?php echo $_smarty_tpl->__("theme");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <!--file tree-->
        <div id="filelist" class="cm-te-file-tree nested-list nested-list-folders"></div>
        <!--#file tree-->
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li class="cm-te-create-file"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_file",'text'=>__("new_file"),'content'=>Smarty::$_smarty_vars['capture']['add_new_file'],'link_text'=>__("create_file"),'act'=>"edit",'no_icon_link'=>"true"), 0);?>
</li>
        <li class="cm-te-create-folder"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_folder",'text'=>__("new_folder"),'content'=>Smarty::$_smarty_vars['capture']['add_new_folder'],'link_text'=>__("create_folder"),'act'=>"edit",'no_icon_link'=>"true"), 0);?>
</li>
        <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"upload_file",'text'=>__("upload_file"),'content'=>Smarty::$_smarty_vars['capture']['upload_file'],'link_text'=>__("upload_file"),'act'=>"edit",'no_icon_link'=>"true"), 0);?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"main",'tool_meta'=>"cm-te-create",'hide_actions'=>true,'tools_list'=>Smarty::$_smarty_vars['capture']['tools_list'],'display'=>"inline",'title'=>__("create"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->__("template_editor");?>
<span class="muted f-small cm-te-path te-path"></span>
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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
