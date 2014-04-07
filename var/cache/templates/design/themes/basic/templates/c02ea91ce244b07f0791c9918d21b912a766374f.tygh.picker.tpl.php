<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 00:39:21
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/pickers/categories/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252251341533f18792cb505-31373733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c02ea91ce244b07f0791c9918d21b912a766374f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/pickers/categories/picker.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '252251341533f18792cb505-31373733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'data_id' => 0,
    'rnd' => 0,
    'view_mode' => 0,
    'item_ids' => 0,
    'multiple' => 0,
    'extra_var' => 0,
    'no_item_text' => 0,
    'input_id' => 0,
    'input_name' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'hide_link' => 0,
    'hide_delete_button' => 0,
    'positions' => 0,
    'c_id' => 0,
    'extra_url' => 0,
    'no_container' => 0,
    'but_text' => 0,
    'display' => 0,
    'picker_for' => 0,
    'checkbox_name' => 0,
    'default_name' => 0,
    'except_id' => 0,
    '_but_text' => 0,
    '_but_role' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f1879774746_49276565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f1879774746_49276565')) {function content_533f1879774746_49276565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('no_items','add_categories','choose_category','add_categories','no_items','add_categories','choose_category','add_categories'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data_id']->value)===null||$tmp==='' ? "categories_list" : $tmp), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value=='') {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(null, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&$_smarty_tpl->tpl_vars['multiple']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['extra_var']->value&&$_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <p id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item" class="no-items<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p>
    <?php }?>

    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&!$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>cm-display-radio float-left<?php }?>">
    <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>c<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?><?php echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_ids']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('category_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0);?>

        <?php }?>

        <?php  $_smarty_tpl->tpl_vars["c_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c_id"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c_id"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c_id"]->key => $_smarty_tpl->tpl_vars["c_id"]->value) {
$_smarty_tpl->tpl_vars["c_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_id"]->index++;
 $_smarty_tpl->tpl_vars["c_id"]->first = $_smarty_tpl->tpl_vars["c_id"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["c_id"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']++;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('category_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first'],'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration']), 0);?>

        <?php }
if (!$_smarty_tpl->tpl_vars["c_id"]->_loop) {
?>
            <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('category_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value), 0);?>

            <?php }?>
        <?php } ?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value==true) {?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("checkbox", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("radio", null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_url"] = new Smarty_variable("&get_tree=multi_level", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>float-left<?php } else { ?>buttons-container picker<?php }?>"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_categories") : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("add", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("choose_category"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("submit", null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>"categories.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener",'but_rel'=>"nofollow"), 0);?>


    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>

    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_categories") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="pickers/categories/picker.tpl" id="<?php echo smarty_function_set_id(array('name'=>"pickers/categories/picker.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data_id']->value)===null||$tmp==='' ? "categories_list" : $tmp), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value=='') {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(null, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&$_smarty_tpl->tpl_vars['multiple']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['extra_var']->value&&$_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <p id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item" class="no-items<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p>
    <?php }?>

    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&!$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>cm-display-radio float-left<?php }?>">
    <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>c<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?><?php echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_ids']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('category_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0);?>

        <?php }?>

        <?php  $_smarty_tpl->tpl_vars["c_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c_id"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c_id"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c_id"]->key => $_smarty_tpl->tpl_vars["c_id"]->value) {
$_smarty_tpl->tpl_vars["c_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_id"]->index++;
 $_smarty_tpl->tpl_vars["c_id"]->first = $_smarty_tpl->tpl_vars["c_id"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["c_id"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']++;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('category_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first'],'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration']), 0);?>

        <?php }
if (!$_smarty_tpl->tpl_vars["c_id"]->_loop) {
?>
            <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('category_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value), 0);?>

            <?php }?>
        <?php } ?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value==true) {?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("checkbox", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("radio", null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_url"] = new Smarty_variable("&get_tree=multi_level", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>float-left<?php } else { ?>buttons-container picker<?php }?>"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_categories") : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("add", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("choose_category"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("submit", null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>"categories.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener",'but_rel'=>"nofollow"), 0);?>


    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>

    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_categories") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>

<?php }?><?php }?><?php }} ?>
