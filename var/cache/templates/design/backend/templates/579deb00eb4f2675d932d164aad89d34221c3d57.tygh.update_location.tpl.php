<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:33:16
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/update_location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109703116053429b0ca7d133-89782904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '579deb00eb4f2675d932d164aad89d34221c3d57' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/update_location.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109703116053429b0ca7d133-89782904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location' => 0,
    'html_id' => 0,
    'dynamic_object_scheme' => 0,
    'dispatch_descriptions' => 0,
    'k' => 0,
    'v' => 0,
    'selected' => 0,
    'not_custom_dispatch' => 0,
    'start_position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53429b0cb845f8_06703544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53429b0cb845f8_06703544')) {function content_53429b0cb845f8_06703544($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.include_ext.php';
?><?php
fn_preload_lang_vars(array('general','dispatch','custom','name','page_title','ttc_page_title','meta_description','meta_keywords','default','tt_views_block_manager_update_location_default','position'));
?>
<?php if (!$_smarty_tpl->tpl_vars['location']->value['location_id']) {?>
    <?php $_smarty_tpl->tpl_vars["html_id"] = new Smarty_variable("0", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["html_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['location']->value['location_id'], null, 0);?>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class=" form-horizontal" name="location_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_update_form">
<div id="location_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="location_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="location_data[location_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="location_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value) {?>
                <li id="location_object_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type']);?>
</a></li>
            <?php }?>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_location_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_location_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <div class="control-group">
                    <label for="location_dispatch_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("dispatch");?>
: </label>
                    <div class="controls"><select id="location_dispatch_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_select" name="location_data[dispatch]" class="cm-select-with-input-key cm-reload-form">
                            <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dispatch_descriptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value['dispatch']==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable(1, null, 0);?><?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php if ($_smarty_tpl->tpl_vars['location']->value['dispatch']==$_smarty_tpl->tpl_vars['k']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars["not_custom_dispatch"] = new Smarty_variable("1", null, 0);?>
                                <?php }?>
                            <?php } ?>
                            <option value="" <?php if (!$_smarty_tpl->tpl_vars['selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
                        </select>
                        <input id="location_dispatch_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text<?php if ($_smarty_tpl->tpl_vars['not_custom_dispatch']->value) {?> input-text-disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['not_custom_dispatch']->value) {?>disabled<?php }?> name="location_data[dispatch]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
" type="text"></div>
                </div>
                <div class="control-group">
                    <label for="location_name" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
: </label>
                    <div class="controls">
                        <input id="location_name" type="text" name="location_data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_title" class="control-label"><?php echo $_smarty_tpl->__("page_title");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("ttc_page_title")), 0);?>
: </label>
                    <div class="controls">
                        <input id="location_title" type="text" name="location_data[title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_meta_descr" class="control-label"><?php echo $_smarty_tpl->__("meta_description");?>
: </label>
                    <div class="controls"><textarea id="location_meta_descr" name="location_data[meta_description]" class="span9" cols="55" rows="8"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea></div>
                </div>

                <div class="control-group">
                    <label for="location_meta_key" class="control-label"><?php echo $_smarty_tpl->__("meta_keywords");?>
 </label>
                    <div class="controls"><textarea id="location_meta_key" name="location_data[meta_keywords]" class="span9" cols="55" rows="8"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea></div>
                </div>

                <div class="control-group">
                    <label for="location_is_default" class="control-label"><?php echo $_smarty_tpl->__("default");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_block_manager_update_location_default")), 0);?>
</label>
                    <div class="controls">
                        <input type="hidden" name="location_data[is_default]" value="N">
                        <input type="checkbox" name="location_data[is_default]" value="Y" id="location_is_default" <?php if ($_smarty_tpl->tpl_vars['location']->value['is_default']) {?>checked="checked" disabled="disabled"<?php }?>>
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_position" class="control-label"><?php echo $_smarty_tpl->__("position");?>
: </label>
                    <div class="controls">
                        <input id="location_position" type="text" name="location_data[position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['position'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value) {?>
            <div id="content_location_object_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker'],'data_id'=>"location_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_object_ids",'input_name'=>"location_data[object_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['location']->value['object_ids'],'view_mode'=>"links",'params_array'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params'],'start_pos'=>$_smarty_tpl->tpl_vars['start_position']->value),$_smarty_tpl);?>

            </div>
        <?php }?>
    </div>
<!--location_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<div class="buttons-container">
    <?php if (!$_smarty_tpl->tpl_vars['location']->value['is_default']&&$_smarty_tpl->tpl_vars['location']->value['location_id']>0) {?>
        <div class="botton-picker-remove pull-left">
            <a class="cm-confirm btn cm-tooltip" href="<?php echo htmlspecialchars(fn_url("block_manager.delete_location?location_id=".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])), ENT_QUOTES, 'UTF-8');?>
" title="Remove current location">
                <i class="icon-trash"></i>
            </a>
        </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[block_manager.update_location]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['html_id']->value), 0);?>

</div>
</form>
<?php }} ?>
