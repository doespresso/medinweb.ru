<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 19:16:47
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/languages/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916256075533eccdf43b7c2-09642804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d0bc6a527721cb6faff28e38dc9b1f429f43a51' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/languages/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1916256075533eccdf43b7c2-09642804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'langs' => 0,
    'language' => 0,
    'countries' => 0,
    'lang_id' => 0,
    'c_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533eccdf5b6ad5_68549552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eccdf5b6ad5_68549552')) {function content_533eccdf5b6ad5_68549552($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('language_code','name','country','status','edit','delete','clone','export','update_translation','update_translation','editing_language','loading','new_language','add_language','on_site_text_editing','languages'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

        <div id="content_languages">

            <?php $_smarty_tpl->_capture_stack[0][] = array("add_language", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/languages/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('lang_data'=>array()), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="languages_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
                <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

                <table class="table table-middle">
                <thead>
                    <tr class="cm-first-sibling">
                        <th width="3" class="left">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
                        <th><?php echo $_smarty_tpl->__("language_code");?>
</th>
                        <th><?php echo $_smarty_tpl->__("name");?>
</th>
                        <th><?php echo $_smarty_tpl->__("country");?>
</th>
                        <th>&nbsp;</th>
                        <th class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                    </tr>
                </thead>
                <?php if (count($_smarty_tpl->tpl_vars['langs']->value)==1) {?>
                    <?php $_smarty_tpl->tpl_vars["disable_change"] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
                <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <td class="left">
                        <input type="checkbox" name="lang_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code']==@constant('DEFAULT_LANGUAGE')) {?>disabled="disabled"<?php }?> class="checkbox cm-item"></td>
                    <td>
                        <input type="hidden" name="update_language[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
][lang_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>$_smarty_tpl->tpl_vars['language']->value['lang_code'],'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id']));?>

                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td>
                        <i class="flag flag-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['language']->value['country_code']), ENT_QUOTES, 'UTF-8');?>
"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['language']->value['country_code']], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td class="nowrap right">
                        <div class="hidden-tools">
                            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>__("edit"),'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'id'=>"opener_group_".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id']));?>
</li>

                                <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code']!=@constant('DEFAULT_LANGUAGE')) {?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"languages.delete_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])));?>
</li>
                                <?php }?>

                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-language-name",'text'=>__("clone"),'href'=>"languages.clone_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])));?>
</li>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("export"),'href'=>"languages.export_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])));?>
</li>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>__("update_translation"),'title'=>__("update_translation"),'href'=>"languages.update_translation?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'id'=>"opener_group_".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables",'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables",'prefix'=>((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables"));?>
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
                    <?php $_smarty_tpl->_capture_stack[0][] = array("popups", null, null); ob_start(); ?>
                        <?php echo Smarty::$_smarty_vars['capture']['popups'];?>

                        <div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php ob_start();?><?php echo $_smarty_tpl->__("editing_language");?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['language']->value['name']), ENT_QUOTES, 'UTF-8');?>
"></div>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <td class="right">
                        <?php $_smarty_tpl->tpl_vars["lang_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['lang_id'], null, 0);?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['lang_id']->value,'prefix'=>"lng",'status'=>$_smarty_tpl->tpl_vars['language']->value['status'],'hidden'=>"Y",'object_id_name'=>"lang_id",'table'=>"languages",'update_controller'=>"languages",'st_result_ids'=>"content_languages"), 0);?>

                    </td>

                </tr>
                <?php } ?>
                </tbody>
                </table>

            </form>

            <?php $_smarty_tpl->_capture_stack[0][] = array("delete_button", null, null); ob_start(); ?>
                <li class="cm-tab-tools" id="tools_languages_delete_buttons">
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[languages.m_delete]",'form'=>"languages_form"));?>

                </li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <!--content_languages--></div>

        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <div class="hidden" id="content_available_languages">
                <p class="no-items"><?php echo $_smarty_tpl->__("loading");?>
</p>
            </div>
        <?php }?>

        <?php echo Smarty::$_smarty_vars['capture']['popups'];?>


    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_language",'text'=>__("new_language"),'title'=>__("add_language"),'content'=>Smarty::$_smarty_vars['capture']['add_language'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("on_site_text_editing"),'href'=>fn_url("customization.update_mode?type=translation&status=enable&return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)),'target'=>"_blank"));?>
</li>
            <?php echo Smarty::$_smarty_vars['capture']['delete_button'];?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php echo Smarty::$_smarty_vars['capture']['add_button'];?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("languages"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>


<script type="text/javascript">
    (function($, _){
        $(document).ready(function(){
            $('.cm-language-name').click(function(){
                var lang_code = prompt(_.tr('enter_new_lang_code'));

                if (lang_code == null || lang_code.length == 0) {
                    // Customer hit Cancel button or did not enter lang_code
                    return false;
                }

                var href = $.attachToUrl($(this).attr('href'), 'lang_code=' + lang_code);
                $(this).attr('href', href);
            });
        });
    }(Tygh.$, Tygh));
</script>
<?php }} ?>
