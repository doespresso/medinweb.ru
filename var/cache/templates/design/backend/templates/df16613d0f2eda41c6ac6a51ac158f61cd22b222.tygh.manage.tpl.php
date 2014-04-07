<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:14:56
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/news_and_emails/views/news/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:662632252533ebe60a56813-43665830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df16613d0f2eda41c6ac6a51ac158f61cd22b222' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/news_and_emails/views/news/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '662632252533ebe60a56813-43665830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'n' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'settings' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ebe60b59db1_25658037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ebe60b59db1_25658037')) {function content_533ebe60b59db1_25658037($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('news','date','status','edit','delete','no_data','add_news','news'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="news_form" class="cm-hide-inputs">
<input type="hidden" name="fake" value="1" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>    
    <th width="1%">       
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"cm-no-hide-input"), 0);?>

    </th>
    <th width="40%" class="shift-left"><?php echo $_smarty_tpl->__("news");?>
</th>
    <th width="10%"><?php echo $_smarty_tpl->__("date");?>
</th>
    <th width="5%">&nbsp;</th>
    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
<tbody>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['n']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" valign="top" >
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['n']->value,"news"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable('', null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("text", null, 0);?>
    <?php }?>
    <td class="left <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="checkbox" name="news_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
        <a class="row-status" href="<?php echo htmlspecialchars(fn_url("news.update?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['n']->value), 0);?>

    </td>
    <td class="left nowrap <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
        <span><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['n']->value['date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
    </td>
    <td class="center nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>"news.update?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"news.delete?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])));?>
</li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools right">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <td class="right nowrap">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['n']->value['news_id'],'status'=>$_smarty_tpl->tpl_vars['n']->value['status'],'hidden'=>'','object_id_name'=>"news_id",'table'=>"news",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value),'display'=>$_smarty_tpl->tpl_vars['display']->value), 0);?>

    </td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"news.add",'prefix'=>"top",'title'=>__("add_news"),'hide_tools'=>true,'icon'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[news.m_delete]",'form'=>"news_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("news"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content_id'=>"manage_news"), 0);?>

<?php }} ?>
