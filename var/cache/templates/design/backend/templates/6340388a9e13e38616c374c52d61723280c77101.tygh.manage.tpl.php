<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:35:26
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/themes/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16772136553429b8ea32767-76156770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6340388a9e13e38616c374c52d61723280c77101' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/themes/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16772136553429b8ea32767-76156770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'available_themes' => 0,
    'theme_name' => 0,
    'theme' => 0,
    'layout' => 0,
    'available_layout' => 0,
    'style' => 0,
    'styles_descr' => 0,
    'o' => 0,
    'is_default' => 0,
    'installed_theme' => 0,
    'runtime' => 0,
    'but_text' => 0,
    'splitted_themes' => 0,
    'repo_themes' => 0,
    'repo_theme' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53429b8ed00303_10517219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53429b8ed00303_10517219')) {function content_53429b8ed00303_10517219($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
?><?php
fn_preload_lang_vars(array('general','directory','name','description','theme_styles_and_layouts','layout','visual_editor','theme_no_styles_text','visual_editor','available_themes','remove_theme','layouts','active','activate','use_this_style','activate','no_themes_available','install','preview','install','no_themes_available','clone_theme','theme_information','name','directory','layouts','developer','upload_theme','upload_theme','clone_theme','themes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("upload_theme", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/themes/components/upload_theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="themes" id="themes_list">

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<div id="content_general">
    <?php $_smarty_tpl->tpl_vars['theme'] = new Smarty_variable($_smarty_tpl->tpl_vars['available_themes']->value['current'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['available_themes']->value['current']['theme_name'], null, 0);?>

    <div id="themes_manage" class="themes-current clearfix">
        <div class="row">

            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="clone_theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_form" class="cm-ajax cm-comet cm-form-dialog-closer form-horizontal form-edit ">
                    <input type="hidden" name="theme_data[theme_src]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="result_ids" value="themes_list,elm_sidebar">

                    <div class="add-new-object-group">
                        <div class="tabs cm-j-tabs">
                            <ul class="nav nav-tabs">
                                <li id="tab_clone_theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                            </ul>
                        </div>

                        <div class="cm-tabs-content" id="content_tab_clone_theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label cm-required" for="elm_theme_dir_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("directory");?>
</label>
                                    <div class="controls">
                                        <input type="text" id="elm_theme_dir_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" name="theme_data[theme_dest]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_clone" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="elm_theme_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
</label>
                                    <div class="controls">
                                        <input type="text" id="elm_theme_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" name="theme_data[title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="elm_theme_desc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
                                    <div class="controls">
                                        <textarea name="theme_data[description]" id="elm_theme_desc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="span9"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>

                    <div class="buttons-container">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[themes.clone]",'cancel_action'=>"close",'save'=>true), 0);?>

                    </div>

                </form>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php if ($_smarty_tpl->tpl_vars['theme']->value['screenshot']) {?>
            <div id="theme_image">
                <?php if ($_smarty_tpl->tpl_vars['theme']->value['styles'][$_smarty_tpl->tpl_vars['layout']->value['style_id']]['image']) {?>
                    <img class="span4 screenshot" width="250" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['styles'][$_smarty_tpl->tpl_vars['layout']->value['style_id']]['image'], ENT_QUOTES, 'UTF-8');?>
">
                <?php } else { ?>
                    <div class="no-image span4"><i class="glyph-image" title="No image"></i></div>
                <?php }?>

            <!--theme_image--></div>
        <?php }?>
        <div class="span8 theme-description" id="theme_description_container">
            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['layout']->value['style_name']) {?>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['style_name'], ENT_QUOTES, 'UTF-8');?>
<?php }?></h4>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"themes:current_theme_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"themes:current_theme_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['theme']->value['styles']) {?>
            <span class="muted"><?php echo $_smarty_tpl->__("theme_styles_and_layouts");?>
</span>
                <table class="table table-middle">
                    <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->__("layout");?>
</th>
                            <th><?php echo $_smarty_tpl->__("theme_editor.style");?>
</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['available_layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['available_layout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme']->value['layouts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['available_layout']->key => $_smarty_tpl->tpl_vars['available_layout']->value) {
$_smarty_tpl->tpl_vars['available_layout']->_loop = true;
?>
                            <tr>
                                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['available_layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
                                <td>
                                    <?php $_smarty_tpl->tpl_vars['styles_descr'] = new Smarty_variable(array(), null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_themes']->value['current']['styles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
                                        <?php $_smarty_tpl->createLocalArrayVariable('styles_descr', null, 0);
$_smarty_tpl->tpl_vars['styles_descr']->value[$_smarty_tpl->tpl_vars['style']->value['style_id']] = $_smarty_tpl->tpl_vars['style']->value['name'];?>
                                    <?php } ?>

                                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'],'status'=>$_smarty_tpl->tpl_vars['available_layout']->value['style_id'],'items_status'=>$_smarty_tpl->tpl_vars['styles_descr']->value,'update_controller'=>"themes.styles",'status_target_id'=>"theme_description_container,theme_image",'statuses'=>$_smarty_tpl->tpl_vars['available_themes']->value['current']['styles'],'btn_meta'=>mb_strtolower("btn-text o-status-".((string)$_smarty_tpl->tpl_vars['o']->value['status']), 'UTF-8'),'default_status_text'=>__('none')), 0);?>

                                </td>
                                <td class="right">
                                    <?php if ($_smarty_tpl->tpl_vars['available_layout']->value['is_default']) {?>
                                        <?php $_smarty_tpl->tpl_vars['is_default'] = new Smarty_variable('btn-small btn-primary', null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars['is_default'] = new Smarty_variable('btn-small', null, 0);?>
                                    <?php }?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id']),'but_text'=>__("visual_editor"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['is_default']->value,'but_target'=>"_blank"), 0);?>

                                </td>
                            <tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <div class="theme-no-styles">
                    <span class="muted"><?php echo $_smarty_tpl->__("theme_no_styles_text");?>
</span>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable",'but_text'=>__("visual_editor"),'but_role'=>"action",'but_meta'=>"btn-primary"), 0);?>

                </div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"themes:current_theme_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <!--theme_description_container--></div>
    </div>

    <div class="themes-available">
    <h4><?php echo $_smarty_tpl->__("available_themes");?>
</h4>

    <?php if ($_smarty_tpl->tpl_vars['available_themes']->value['installed']) {?>
    <?php  $_smarty_tpl->tpl_vars['installed_theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['installed_theme']->_loop = false;
 $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_themes']->value['installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['installed_theme']->key => $_smarty_tpl->tpl_vars['installed_theme']->value) {
$_smarty_tpl->tpl_vars['installed_theme']->_loop = true;
 $_smarty_tpl->tpl_vars['theme_name']->value = $_smarty_tpl->tpl_vars['installed_theme']->key;
?>
        <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value) {?>
            <div class="theme-subtitle">
                <a class="cm-confirm cm-tooltip btn pull-right btn-small" data-ce-tooltip-position="top" href="<?php echo htmlspecialchars(fn_url("themes.delete?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_theme");?>
"> <i class="icon-trash"></i> </a>
                <span class="label pull-right"><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['installed_theme']->value['layouts']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("layouts");?>
</span>
                <span class="label pull-right"><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['installed_theme']->value['styles']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("theme_editor.styles");?>
</span>
                <h4 id="anchor_<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['installed_theme']->value['title'],' ','_'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['theme']->value['theme_name']==$_smarty_tpl->tpl_vars['theme_name']->value) {?> <span class="label label-success"><?php echo $_smarty_tpl->__("active");?>
</span><?php }?></h4>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value['styles']) {?>
                <?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['installed_theme']->value['styles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
                    <div class="span4">
                        <div class="theme">
                            <div class="theme-title">
                               <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                            <div class="theme-use">
                                <?php if ($_smarty_tpl->tpl_vars['theme_name']->value!=$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']) {?>
                                    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->__("activate"), null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->__("use_this_style"), null, 0);?>
                                <?php }?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"themes.set?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)."&amp;style=".((string)$_smarty_tpl->tpl_vars['style']->value['style_id']),'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_role'=>"action",'but_meta'=>"btn-primary"), 0);?>

                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['style']->value['image']) {?>
                                <a id="image_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value['image'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer">
                                    <img class="screenshot" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="" width="250">
                                </a>
                            <?php } else { ?>
                                <div class="no-image"><i class="glyph-image" title="No image"></i></div>
                            <?php }?>
                        </div>
                    </div>
                <?php } ?>
                
            <?php } else { ?>
                <div class="span4">
                    <div class="theme">
                        <div class="theme-title">
                           <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['theme_name']->value!=$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']) {?>
                            <div class="theme-use">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"themes.set?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)."&amp;style=".((string)$_smarty_tpl->tpl_vars['style']->value['style_id']),'but_text'=>__("activate"),'but_role'=>"action",'but_meta'=>"btn-primary"), 0);?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value['screenshot']) {?>
                            <a id="image_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" alt="" width="250"></a>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        <?php }?>
        <!--/row--></div>
    <?php } ?>
    <?php } else { ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->__("no_themes_available");?>

        </div>
    <?php }?>
    </div>
</div>
</div>
<div id="content_theme_store">

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"themes:install_themes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"themes:install_themes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['available_themes']->value['repo']) {?>

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['available_themes']->value['repo'],'size'=>3,'assign'=>"splitted_themes",'simple'=>true),$_smarty_tpl);?>

    <div class="themes-available">
    <?php  $_smarty_tpl->tpl_vars["repo_themes"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["repo_themes"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["repo_themes"]->key => $_smarty_tpl->tpl_vars["repo_themes"]->value) {
$_smarty_tpl->tpl_vars["repo_themes"]->_loop = true;
?>
    <div class="row">
    <?php  $_smarty_tpl->tpl_vars["repo_theme"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["repo_theme"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['repo_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["repo_theme"]->key => $_smarty_tpl->tpl_vars["repo_theme"]->value) {
$_smarty_tpl->tpl_vars["repo_theme"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_name"]->value = $_smarty_tpl->tpl_vars["repo_theme"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['repo_theme']->value) {?>
            <div class="span4">
                <div class="theme">

                    <div class="theme-title">
                       <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['repo_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>

                    <div class="theme-use">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"themes.install?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value),'but_text'=>__("install"),'but_role'=>"action",'but_meta'=>"btn-primary cm-comet cm-ajax",'but_target_id'=>"themes_list"), 0);?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['repo_theme']->value['screenshot']) {?>
                    <a id="image_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['repo_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['repo_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" alt="" width="250"></a>
                    <?php }?>

                    <div class="theme-actions">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>

                            <?php if ($_smarty_tpl->tpl_vars['repo_theme']->value['screenshot']) {?>
                            <li><a id="image_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['repo_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><?php echo $_smarty_tpl->__("preview");?>
</a></li>
                            <?php }?>

                            
                            <li><a class="cm-comet cm-ajax" data-ca-target-id="themes_list" href="<?php echo htmlspecialchars(fn_url("themes.install?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="themes_list"><?php echo $_smarty_tpl->__("install");?>
</a></li>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'placement'=>"right"));?>

                    </div>
                </div>
            </div>
        <?php }?>
    <?php } ?>
    </div>
    <?php } ?>
    <?php } else { ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->__("no_themes_available");?>

        </div>
    <?php }?>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"themes:install_themes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['available_themes']->value['current']['theme_name'], null, 0);?>
    <div class="hidden" id="content_elm_clone_theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone_theme");?>
">
        <?php echo Smarty::$_smarty_vars['capture']['add_new_picker'];?>

    </div>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>

<!--themes_list--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="container themes-side">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"themes:options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"themes:options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="sidebar-row clearfix">
            <h6><?php echo $_smarty_tpl->__("theme_information");?>
</h6>
            <div class="row-fluid">
                <div class="span7 muted"><?php echo $_smarty_tpl->__("name");?>
</div>
                <div class="span5 right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
            <div class="row-fluid">
                <div class="span7 muted" title="/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['theme_name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("directory");?>
</div>
                <div class="span5 right"><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("template_editor.manage"), ENT_QUOTES, 'UTF-8');?>
">/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['theme_name'], ENT_QUOTES, 'UTF-8');?>
</a></div>
            </div>
            <div class="row-fluid">
                <div class="span7 muted"><?php echo $_smarty_tpl->__("layouts");?>
</div>
                <div class="span5 right"><a href="<?php echo htmlspecialchars(fn_url("block_manager.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['theme']->value['layouts']), ENT_QUOTES, 'UTF-8');?>
</a></div>
            </div>
            <div class="row-fluid">
                <div class="span7 muted"><?php echo $_smarty_tpl->__("theme_editor.styles");?>
</div>
                <div class="span5 right"><a href="#anchor_<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme']->value['title'],' ','_'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['theme']->value['styles']), ENT_QUOTES, 'UTF-8');?>
</a> </div>
            </div>
            <div class="row-fluid">
                <div class="span7 muted" ><?php echo $_smarty_tpl->__("developer");?>
</div>
                <div class="span5 right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['developer'], ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"themes:options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"themes:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"themes:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ((fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])||(fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"upload_theme",'text'=>__("upload_theme"),'title'=>__("upload_theme"),'content'=>Smarty::$_smarty_vars['capture']['upload_theme'],'act'=>"general",'link_class'=>"cm-dialog-auto-size",'icon'=>"icon-plus",'link_text'=>''), 0);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"themes:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>__("clone_theme"),'target_id'=>"content_elm_clone_theme_".((string)$_smarty_tpl->tpl_vars['theme_name']->value)));?>
</li>
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

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php ob_start();?><?php echo $_smarty_tpl->__("themes");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
