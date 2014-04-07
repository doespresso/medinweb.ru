<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 02:47:04
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/database/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1540845632533f3668e0b016-27053052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4edf396d6802a69481341c894029d2ad5de45bbd' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/database/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1540845632533f3668e0b016-27053052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_tables' => 0,
    'tbl' => 0,
    'config' => 0,
    'backup_files' => 0,
    'name' => 0,
    'file' => 0,
    'link_text' => 0,
    'database_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f3669159397_50887154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f3669159397_50887154')) {function content_533f3669159397_50887154($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.notes.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('multiple_selectbox_notice','select_tables','select_all','unselect_all','backup_schema','backup_data','compress_dump','backup_filename','text_backup_filename','text_backup_management_notice','upload','type','filename','date','filesize','bytes','download','delete','no_data','current_database_size','bytes','logs','backup','restore','optimize_database','database'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>


<div id="content_backup"> 
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="backup_form" class="form-horizontal form-edit cm-ajax">
<input type="hidden" name="selected_section" value="backup" />
<input type="hidden" name="result_ids" value="database_management,tools_restore,tools_restore_delete" />

<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="control-group">
    <label for="dbdump_tables" class="control-label"><?php echo $_smarty_tpl->__("select_tables");?>
:</label>
    <div class="controls">
        <select name="dbdump_tables[]" id="dbdump_tables" multiple="multiple" size="10">
            <?php  $_smarty_tpl->tpl_vars['tbl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tbl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->key => $_smarty_tpl->tpl_vars['tbl']->value) {
$_smarty_tpl->tpl_vars['tbl']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tbl']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['config']->value['table_prefix']==''||strpos($_smarty_tpl->tpl_vars['tbl']->value,$_smarty_tpl->tpl_vars['config']->value['table_prefix'])===0) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tbl']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
        <p><a onclick="Tygh.$('#dbdump_tables').selectOptions(true); return false;" class="underlined"><?php echo $_smarty_tpl->__("select_all");?>
</a> / <a onclick="Tygh.$('#dbdump_tables').selectOptions(false); return false;" class="underlined"><?php echo $_smarty_tpl->__("unselect_all");?>
</a></p>
    </div>
</div>

<div class="control-group">
    <label for="dbdump_filename" class="control-label">
        Backup options:
    </label>
    <div class="controls">
        <label for="dbdump_schema" class="checkbox">
            <input type="checkbox" name="dbdump_schema" id="dbdump_schema" value="Y" checked="checked" >
            <?php echo $_smarty_tpl->__("backup_schema");?>

        </label>
        <label for="dbdump_data" class="checkbox">
            <input type="checkbox" name="dbdump_data" id="dbdump_data" value="Y" checked="checked">
            <?php echo $_smarty_tpl->__("backup_data");?>

        </label>
        <input type="hidden" name="dbdump_compress" value="N" />
        <label for="dbdump_compress" class="checkbox">
            <input type="checkbox" name="dbdump_compress" id="dbdump_compress" value="Y" checked="checked">
            <?php echo $_smarty_tpl->__("compress_dump");?>

        </label>
    </div>
</div>

<div class="control-group">
    <label for="dbdump_filename" class="control-label"><?php echo $_smarty_tpl->__("backup_filename");?>
:</label>
    <div class="controls">
        <input type="text" name="dbdump_filename" id="dbdump_filename" size="30" value="dump_<?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%m%d%Y"), ENT_QUOTES, 'UTF-8');?>
.sql" class="input-text">
        <p class="muted"><?php echo $_smarty_tpl->__("text_backup_filename");?>
</p>
    </div>
</div>
</form>
</div>



<div id="content_restore">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="upload_data" class="cm-ajax" enctype="multipart/form-data">
    <input type="hidden" name="selected_section" value="restore" />
    <input type="hidden" name="result_ids" value="content_restore,tools_restore,tools_restore_delete" />

    <fieldset>
    
    <p><?php echo $_smarty_tpl->__("text_backup_management_notice");?>
</p>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"sql_dump[0]",'allowed_ext'=>"tgz,sql"), 0);?>

    
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("upload"),'but_name'=>"dispatch[database.upload]"), 0);?>

    </div>
    </fieldset>
    </form>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="restore_form" class="cm-ajax" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="selected_section" value="restore" />
    <input type="hidden" name="result_ids" value="database_management,tools_restore,tools_restore_delete" />
    <fieldset>
    <?php if ($_smarty_tpl->tpl_vars['backup_files']->value) {?>
    <table class="table">
    <thead>
        <tr>
            <th>
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
            <th class="center"><?php echo $_smarty_tpl->__("type");?>
</th>
            <th><?php echo $_smarty_tpl->__("filename");?>
</th>
            <th><?php echo $_smarty_tpl->__("date");?>
</th>
            <th><?php echo $_smarty_tpl->__("filesize");?>
</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backup_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
    <tr>
        <td>
            <input type="checkbox" name="backup_files[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" /></td>
        <td class="center">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['type'], ENT_QUOTES, 'UTF-8');?>
]</td>
        <td>
            <a href="<?php echo htmlspecialchars(fn_url("database.getfile?file=".((string)$_smarty_tpl->tpl_vars['name']->value)), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</span></a></td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['create'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td>
            <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['file']->value['size']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("bytes");?>
</td>
        <td class="nowrap">
            <div class="hidden-tools">
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("download"),'href'=>"database.getfile?file=".((string)$_smarty_tpl->tpl_vars['name']->value)));?>
</li>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>(($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("delete") : $tmp),'href'=>"database.delete?backup_file=".((string)$_smarty_tpl->tpl_vars['name']->value)));?>
</li>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>
    </tr>
    <?php } ?>
    </table>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    </fieldset>
    </form>

<!--content_restore--></div>



<div id="content_maintenance">

    <p><?php echo $_smarty_tpl->__("current_database_size");?>
: <span><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['database_size']->value), ENT_QUOTES, 'UTF-8');?>
</span> <?php echo $_smarty_tpl->__("bytes");?>
</p>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-comet" name="mainainance_form">
    <input type="hidden" name="selected_section" value="maintenance" />
    <input type="hidden" name="result_ids" value="database_management" />
</form>

</div>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("logs"),'href'=>"logs.manage"));?>
</li>
        <li class="cm-tab-tools" id="tools_restore_delete">
            <?php if ($_smarty_tpl->tpl_vars['backup_files']->value) {?>
                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[database.m_delete]",'form'=>"restore_form"));?>

            <?php }?>
        <!--tools_restore_delete--></li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <div class="cm-tab-tools pull-right shift-left" id="tools_backup">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("backup"),'but_name'=>"dispatch[database.backup]",'but_target_form'=>"backup_form",'but_meta'=>"cm-comet",'but_role'=>"submit-link"), 0);?>

    </div>

    <div class="cm-tab-tools pull-right shift-left" id="tools_restore">
        <?php if ($_smarty_tpl->tpl_vars['backup_files']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("restore"),'but_name'=>"dispatch[database.restore]",'but_meta'=>"cm-process-items cm-confirm cm-comet",'but_target_form'=>"restore_form",'but_role'=>"submit-link"), 0);?>

        <?php }?>
    <!--tools_restore--></div>

    <div class="cm-tab-tools pull-right shift-left" id="tools_maintenance">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("optimize_database"),'but_name'=>"dispatch[database.optimize]",'but_target_form'=>"mainainance_form",'but_role'=>"submit-link"), 0);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("database"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'box_id'=>"database_management",'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
