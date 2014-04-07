<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 19:16:47
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/languages/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1296515884533eccdf5c58b4-48198096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f811cb3c875a24538d6c9c7fb7c581b84f5cca13' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/languages/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1296515884533eccdf5c58b4-48198096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_data' => 0,
    'id' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'hidden' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533eccdf6943b9_19612998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eccdf6943b9_19612998')) {function content_533eccdf6943b9_19612998($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','language_code','name','country','tt_views_languages_update_country','clone_from','po_file','install'));
?>
<?php if ($_smarty_tpl->tpl_vars['lang_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang_data']->value['lang_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable("0", null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_language_form" class="form-horizontal<?php if (!fn_allow_save_object('',"languages")) {?> cm-hide-inputs<?php }?>">
    <input type="hidden" name="selected_section" value="languages" />
    <input type="hidden" name="lang_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content">
        <div id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>
                <div class="control-group">
                    <label for="elm_to_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("language_code");?>
:</label>
                    <div class="controls">
                        <input id="elm_to_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="language_data[lang_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_data']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" size="6" maxlength="2">
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_lang_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input id="elm_lang_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="language_data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" maxlength="64">
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_lang_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("country");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_languages_update_country")), 0);?>
:</label>
                    <div class="controls">
                        <select id="elm_lang_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="language_data[country_code]">
                            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['lang_data']->value['country_code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <?php if (fn_allowed_for("ULTIMATE:FREE")) {?>
                    <?php $_smarty_tpl->tpl_vars['hidden'] = new Smarty_variable(false, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['hidden'] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj'=>$_smarty_tpl->tpl_vars['lang_data']->value,'display'=>"radio",'input_name'=>"language_data[status]",'hidden'=>$_smarty_tpl->tpl_vars['hidden']->value), 0);?>


                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <div class="control-group">
                    <label for="elm_from_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("clone_from");?>
:</label>
                    <div class="controls">
                        <select name="language_data[from_lang_code]" id="elm_from_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = fn_get_translation_languages(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <?php }?>

            </fieldset>
        </div>
    </div>

    <?php if (fn_allow_save_object('',"languages")) {?>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        </div>
    <?php }?>

    </form>
<?php } else { ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_language_form" class="form-horizontal<?php if (!fn_allow_save_object('',"languages")) {?> cm-hide-inputs<?php }?>" enctype="multipart/form-data">

        <div class="control-group">
            <label for="po_file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("po_file");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"language_data[po_file]"), 0);?>

            </div>
        </div>

        <?php if (fn_allow_save_object('',"languages")) {?>
            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.install_from_po]",'but_text'=>__("install"),'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

            </div>
        <?php }?>
    </form>
<?php }?>

<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
