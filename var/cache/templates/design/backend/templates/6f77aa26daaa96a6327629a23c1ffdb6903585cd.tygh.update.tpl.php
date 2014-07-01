<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:59:33
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/news_and_emails/views/news/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213746409353424cd5d2d757-15574597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f77aa26daaa96a6327629a23c1ffdb6903585cd' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/news_and_emails/views/news/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '213746409353424cd5d2d757-15574597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news_data' => 0,
    'allow_save' => 0,
    'id' => 0,
    'settings' => 0,
    'show_save_btn' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53424cd5f22f03_99872577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53424cd5f22f03_99872577')) {function content_53424cd5f22f03_99872577($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('name','description','date','show_on_separate_page','editing_news','new_news'));
?>
<?php if ($_smarty_tpl->tpl_vars['news_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['news_data']->value['news_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['news_data']->value,"news"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_save_btn'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_save']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['show_save_btn'] = clone $_smarty_tpl->tpl_vars['show_save_btn']; $_ptr = $_ptr->parent; }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="news_update_form" class="form-horizontal form-edit <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>">
<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="news_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" class="cm-no-hide-input" name="selected_section" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['selected_section'])===null||$tmp==='' ? "detailed" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<div id="content_detailed">
<fieldset>
    <div class="control-group">
        <label for="elm_news_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
        <div class="controls">
            <input type="text" name="news_data[news]" id="elm_news_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news_data']->value['news'], ENT_QUOTES, 'UTF-8');?>
" size="40" class="input-large" />
        </div>
    </div>

    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->tpl_vars["zero_company_id_name_lang_var"] = new Smarty_variable("none", null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"news_data[company_id]",'id'=>"elm_news_company_id",'selected'=>$_smarty_tpl->tpl_vars['news_data']->value['company_id'],'disable_company_picker'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0);?>


    <div class="control-group">
        <label class="control-label" for="elm_news_description"><?php echo $_smarty_tpl->__("description");?>
</label>
        <div class="controls">
            <textarea id="elm_news_description" name="news_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_news_date"><?php echo $_smarty_tpl->__("date");?>
</label>
        <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_news_date",'date_name'=>"news_data[date]",'date_val'=>$_smarty_tpl->tpl_vars['news_data']->value['date'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_news_separate"><?php echo $_smarty_tpl->__("show_on_separate_page");?>
</label>
        <div class="controls">
        <input type="hidden" name="news_data[separate]" value="N" />
        <input type="checkbox" name="news_data[separate]" id="elm_news_separate" value="Y" <?php if ($_smarty_tpl->tpl_vars['news_data']->value['separate']=="Y") {?>checked="checked"<?php }?> />
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_from'=>$_smarty_tpl->tpl_vars['news_data']->value['localization'],'data_name'=>"news_data[localization]"), 0);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"news_and_emails:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"news_and_emails:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"news_and_emails:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"news_data[status]",'id'=>"elm_news_status",'obj_id'=>$_smarty_tpl->tpl_vars['news_data']->value['news_id'],'obj'=>$_smarty_tpl->tpl_vars['news_data']->value), 0);?>

</fieldset>
</div>

<div id="content_addons">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"news:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"news:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"news:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"news_and_emails:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"news_and_emails:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"news_and_emails:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[news.update]",'but_role'=>"submit-link",'but_target_form'=>"news_update_form"), 0);?>

<?php } else { ?>
    <?php if (!$_smarty_tpl->tpl_vars['show_save_btn']->value) {?>
        <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars["hide_second_button"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[news.update]",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'but_role'=>"submit-link",'but_target_form'=>"news_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"news_and_emails:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"news_and_emails:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"news_and_emails:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_news");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['news_data']->value['news']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_news"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
