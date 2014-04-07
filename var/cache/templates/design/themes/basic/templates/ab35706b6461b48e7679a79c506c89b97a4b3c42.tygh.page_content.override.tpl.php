<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 20:50:40
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/form_builder/hooks/pages/page_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:923769846534185e05f3eb6-09613530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab35706b6461b48e7679a79c506c89b97a4b3c42' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/form_builder/hooks/pages/page_content.override.tpl',
      1 => 1396611753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '923769846534185e05f3eb6-09613530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page' => 0,
    'form_submit_const' => 0,
    'continue_url' => 0,
    'element' => 0,
    'var' => 0,
    'element_id' => 0,
    'form_values' => 0,
    'splitted_variants' => 0,
    'variants' => 0,
    'elm_id' => 0,
    'settings' => 0,
    'countries' => 0,
    'code' => 0,
    '_country' => 0,
    'country' => 0,
    '_state' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534185e0b0c718_59783041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534185e0b0c718_59783041')) {function content_534185e0b0c718_59783041($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('continue','select','select_country','select_state','submit','continue','select','select_country','select_state','submit'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_FORM')) {?>
    <?php if ($_REQUEST['sent']=="Y") {?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:form_sent")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:form_sent"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
        
        <?php $_smarty_tpl->tpl_vars["form_submit_const"] = new Smarty_variable(@constant('FORM_SUBMIT'), null, 0);?>
        <p><?php echo $_smarty_tpl->tpl_vars['page']->value['form']['general'][$_smarty_tpl->tpl_vars['form_submit_const']->value];?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:form_sent"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <p class="center">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("continue"),'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0);?>

        </p>
    <?php } else { ?>

    <?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>

    <p>&nbsp;</p>

<div class="form-wrap form-wrap-default">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="forms_form" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="page_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php  $_smarty_tpl->tpl_vars["element"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["element"]->_loop = false;
 $_smarty_tpl->tpl_vars["element_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page']->value['form']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["element"]->key => $_smarty_tpl->tpl_vars["element"]->value) {
$_smarty_tpl->tpl_vars["element"]->_loop = true;
 $_smarty_tpl->tpl_vars["element_id"]->value = $_smarty_tpl->tpl_vars["element"]->key;
?>

    <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_SEPARATOR')) {?>
    <hr style="width: 100%" />
    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_HEADER')) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['element']->value['description']), 0);?>


    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']!=@constant('FORM_IP_ADDRESS')&&$_smarty_tpl->tpl_vars['element']->value['element_type']!=@constant('FORM_REFERER')) {?>
        <div class="control-group">
            <label for="<?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_FILE')) {?>type_<?php echo htmlspecialchars(md5("fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['element']->value['required']=="Y") {?>cm-required<?php }?><?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_EMAIL')) {?> cm-email<?php }?><?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_PHONE')) {?> cm-phone<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_MULTIPLE_CB')) {?>cm-multiple-checkboxes<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>

            <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_SELECT')) {?>
                <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                <option label="" value="">- <?php echo $_smarty_tpl->__("select");?>
 -</option>
                <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_RADIO')) {?>
                <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["rd"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["rd"]['iteration']++;
?>
                <input class="radio" <?php if ((!$_smarty_tpl->tpl_vars['form_values']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['rd']['iteration']==1)||($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id'])) {?>checked="checked"<?php }?> type="radio" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                <?php } ?>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_CHECKBOX')) {?>
                <input type="hidden" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]=="Y") {?>checked="checked"<?php }?> type="checkbox" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" />
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_MULTIPLE_SB')) {?>
                <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" multiple="multiple" >
                <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_MULTIPLE_CB')) {?>
                <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['element']->value['variants'],'size'=>"4",'assign'=>"splitted_variants"),$_smarty_tpl);?>

                <table id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="no-border">
                <?php  $_smarty_tpl->tpl_vars['variants'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variants']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variants']->key => $_smarty_tpl->tpl_vars['variants']->value) {
$_smarty_tpl->tpl_vars['variants']->_loop = true;
?>
                <tr>
                    <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['var']->value) {?>
                            <label>
                                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id']) {?>checked="checked"<?php }?> id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>

                            </label>
                            <?php }?>
                    </td>
                    <?php } ?>
                </tr>
                <?php } ?>
                </table>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_INPUT')) {?>
                <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="50" type="text" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_TEXTAREA')) {?>
                <textarea id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-textarea" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" cols="67" rows="10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_DATE')) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_name'=>"form_values[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]",'date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['element']->value['element_id']),'date_val'=>$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]), 0);?>

            
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_EMAIL')||$_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_NUMBER')||$_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_PHONE')) {?>
                
                
                <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_EMAIL')) {?>
                <input type="hidden" name="customer_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
                <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="50" type="text" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_COUNTRIES')) {?>

                <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['elm_id']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
                <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" class="cm-country cm-location-billing">
                    <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                    <?php $_smarty_tpl->tpl_vars["countries"] = new Smarty_variable(fn_get_simple_countries(1), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_STATES')) {?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


                <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['elm_id']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_state'] : $tmp), null, 0);?>
                <select class="cm-state cm-location-billing" id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                </select>
                <input type="text" class="cm-state cm-location-billing input-text hidden" id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_FILE')) {?>
                <?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), 0);?>

            <?php }?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:form_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:form_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
    <?php } ?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"use_for_form_builder"), 0);?>


    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_text'=>__("submit"),'but_name'=>"dispatch[pages.send_form]"), 0);?>

    </div>

    </form>
</div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:page_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:page_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/form_builder/hooks/pages/page_content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/form_builder/hooks/pages/page_content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_FORM')) {?>
    <?php if ($_REQUEST['sent']=="Y") {?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:form_sent")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:form_sent"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
        
        <?php $_smarty_tpl->tpl_vars["form_submit_const"] = new Smarty_variable(@constant('FORM_SUBMIT'), null, 0);?>
        <p><?php echo $_smarty_tpl->tpl_vars['page']->value['form']['general'][$_smarty_tpl->tpl_vars['form_submit_const']->value];?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:form_sent"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <p class="center">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("continue"),'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0);?>

        </p>
    <?php } else { ?>

    <?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>

    <p>&nbsp;</p>

<div class="form-wrap form-wrap-default">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="forms_form" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="page_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php  $_smarty_tpl->tpl_vars["element"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["element"]->_loop = false;
 $_smarty_tpl->tpl_vars["element_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page']->value['form']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["element"]->key => $_smarty_tpl->tpl_vars["element"]->value) {
$_smarty_tpl->tpl_vars["element"]->_loop = true;
 $_smarty_tpl->tpl_vars["element_id"]->value = $_smarty_tpl->tpl_vars["element"]->key;
?>

    <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_SEPARATOR')) {?>
    <hr style="width: 100%" />
    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_HEADER')) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['element']->value['description']), 0);?>


    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']!=@constant('FORM_IP_ADDRESS')&&$_smarty_tpl->tpl_vars['element']->value['element_type']!=@constant('FORM_REFERER')) {?>
        <div class="control-group">
            <label for="<?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_FILE')) {?>type_<?php echo htmlspecialchars(md5("fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['element']->value['required']=="Y") {?>cm-required<?php }?><?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_EMAIL')) {?> cm-email<?php }?><?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_PHONE')) {?> cm-phone<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_MULTIPLE_CB')) {?>cm-multiple-checkboxes<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>

            <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_SELECT')) {?>
                <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                <option label="" value="">- <?php echo $_smarty_tpl->__("select");?>
 -</option>
                <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_RADIO')) {?>
                <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["rd"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["rd"]['iteration']++;
?>
                <input class="radio" <?php if ((!$_smarty_tpl->tpl_vars['form_values']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['rd']['iteration']==1)||($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id'])) {?>checked="checked"<?php }?> type="radio" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                <?php } ?>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_CHECKBOX')) {?>
                <input type="hidden" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]=="Y") {?>checked="checked"<?php }?> type="checkbox" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" />
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_MULTIPLE_SB')) {?>
                <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" multiple="multiple" >
                <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_MULTIPLE_CB')) {?>
                <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['element']->value['variants'],'size'=>"4",'assign'=>"splitted_variants"),$_smarty_tpl);?>

                <table id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="no-border">
                <?php  $_smarty_tpl->tpl_vars['variants'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variants']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variants']->key => $_smarty_tpl->tpl_vars['variants']->value) {
$_smarty_tpl->tpl_vars['variants']->_loop = true;
?>
                <tr>
                    <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['var']->value) {?>
                            <label>
                                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]==$_smarty_tpl->tpl_vars['var']->value['element_id']) {?>checked="checked"<?php }?> id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>

                            </label>
                            <?php }?>
                    </td>
                    <?php } ?>
                </tr>
                <?php } ?>
                </table>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_INPUT')) {?>
                <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="50" type="text" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_TEXTAREA')) {?>
                <textarea id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-textarea" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" cols="67" rows="10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_DATE')) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_name'=>"form_values[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]",'date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['element']->value['element_id']),'date_val'=>$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]), 0);?>

            
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_EMAIL')||$_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_NUMBER')||$_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_PHONE')) {?>
                
                
                <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_EMAIL')) {?>
                <input type="hidden" name="customer_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
                <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="50" type="text" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_COUNTRIES')) {?>

                <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['elm_id']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
                <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" class="cm-country cm-location-billing">
                    <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                    <?php $_smarty_tpl->tpl_vars["countries"] = new Smarty_variable(fn_get_simple_countries(1), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_STATES')) {?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


                <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['elm_id']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_state'] : $tmp), null, 0);?>
                <select class="cm-state cm-location-billing" id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                </select>
                <input type="text" class="cm-state cm-location-billing input-text hidden" id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="form_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type']==@constant('FORM_FILE')) {?>
                <?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), 0);?>

            <?php }?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:form_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:form_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
    <?php } ?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"use_for_form_builder"), 0);?>


    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_text'=>__("submit"),'but_name'=>"dispatch[pages.send_form]"), 0);?>

    </div>

    </form>
</div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:page_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:page_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php }?><?php }?><?php }} ?>
