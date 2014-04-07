<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 16:19:02
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/data_feeds/views/data_feeds/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1644757143533ea336e94c64-71775126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4809d35074273ef68d5c5af3f7c91a460525a645' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/data_feeds/views/data_feeds/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1644757143533ea336e94c64-71775126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'datafeeds' => 0,
    'datafeed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ea337061207_52315542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ea337061207_52315542')) {function content_533ea337061207_52315542($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.notes.php';
?><?php
fn_preload_lang_vars(array('notice','notice','export_cron_hint','notice','name','export_by_cron','status','server','ftp','local_export','export_to_server','upload_to_ftp','edit','no_data','select_fields_to_edit','add_datafeed','data_feeds'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array('title'=>__("notice"))); $_block_repeat=true; echo smarty_block_notes(array('title'=>__("notice")), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <p><?php echo $_smarty_tpl->__("export_cron_hint");?>
:<br />
        <span>php /path/to/cart/<?php echo htmlspecialchars(fn_url('',"A","rel"), ENT_QUOTES, 'UTF-8');?>
 --dispatch=exim.cron_export --cron_password=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['data_feeds']['cron_password'], ENT_QUOTES, 'UTF-8');?>
</span>
    </p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array('title'=>__("notice")), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_datafeeds_form">

<?php if ($_smarty_tpl->tpl_vars['datafeeds']->value) {?>
<table class="table sortable table-middle">
<thead>
    <tr>
        <th width="5%" class="left"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="30%" nowrap="nowrap"><?php echo $_smarty_tpl->__("name");?>
</th>
        <th width="30%" nowrap="nowrap"><?php echo $_smarty_tpl->__("export_by_cron");?>
</th>
        <th width="20%" nowrap="nowrap">&nbsp;</th>
        <th width="15%" nowrap="nowrap" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['datafeed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datafeed']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datafeeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datafeed']->key => $_smarty_tpl->tpl_vars['datafeed']->value) {
$_smarty_tpl->tpl_vars['datafeed']->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['datafeed']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <td class="left">
        <input type="checkbox" name="datafeed_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
    </td>
    
    <td>
        <a href="<?php echo htmlspecialchars(fn_url("data_feeds.update?datafeed_id=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </td>

    <td class="nowrap">
        <select name="datafeed_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'], ENT_QUOTES, 'UTF-8');?>
][export_location]">
            <option value=""> -- </option>
            <option value="S" <?php if ($_smarty_tpl->tpl_vars['datafeed']->value['export_location']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
            <option value="F" <?php if ($_smarty_tpl->tpl_vars['datafeed']->value['export_location']=="F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ftp");?>
</option>
        </select>
    </td>
    
    <td class="nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>__("local_export"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=L"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>__("export_to_server"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=S"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>__("upload_to_ftp"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=F"));?>
</li>
            <li class="divider"></li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>"data_feeds.update?datafeed_id=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'],'status'=>$_smarty_tpl->tpl_vars['datafeed']->value['status'],'hidden'=>false,'object_id_name'=>"datafeed_id",'table'=>"data_feeds"), 0);?>

    </td>
    
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['datafeeds']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[data_feeds.m_delete]",'form'=>"manage_datafeeds_form"));?>
</li>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"select_fields_to_edit",'text'=>__("select_fields_to_edit"),'content'=>Smarty::$_smarty_vars['capture']['select_fields_to_edit']), 0);?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[data_feeds.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_datafeeds_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("add_datafeed");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"data_feeds.add",'prefix'=>"bottom",'title'=>$_tmp1,'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("data_feeds"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
