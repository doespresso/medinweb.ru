<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:20:37
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/pickers/pages/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91081532534243b5562611-84199729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ebcaa69ffd3fc718cd864f1cb3c67a5ff66e740' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/pickers/pages/picker.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91081532534243b5562611-84199729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data_id' => 0,
    'rnd' => 0,
    'view_mode' => 0,
    'start_pos' => 0,
    'item_ids' => 0,
    'multiple' => 0,
    'extra_url' => 0,
    'extra_var' => 0,
    'no_container' => 0,
    'but_text' => 0,
    'lang_add_pages' => 0,
    'display' => 0,
    'picker_for' => 0,
    'checkbox_name' => 0,
    'default_name' => 0,
    'except_id' => 0,
    'company_id' => 0,
    '_but_text' => 0,
    '_but_role' => 0,
    'prepend' => 0,
    'positions' => 0,
    'input_name' => 0,
    'p_id' => 0,
    'hide_link' => 0,
    'hide_delete_button' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'no_item_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534243b56f7bc9_63881962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534243b56f7bc9_63881962')) {function content_534243b56f7bc9_63881962($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('add_pages','add_pages','position_short','name','no_items'));
?>
<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data_id']->value)===null||$tmp==='' ? "pages_list" : $tmp), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["start_pos"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['start_pos']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if (($_smarty_tpl->tpl_vars['item_ids']->value)&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<div class="clearfix">
    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="choose-input">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_buttons", null, null); ob_start(); ?>
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
            <div class="pull-right">
                <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>choose-icon input-append<?php } else { ?>buttons-container<?php }?>"><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["lang_add_pages"] = new Smarty_variable($_smarty_tpl->__("add_pages"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? "<i class='icon-plus'></i> ".((string)$_smarty_tpl->tpl_vars['lang_add_pages']->value) : $tmp), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("add", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable("<i class='icon-plus'></i>", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("icon", null, 0);?>
                    <?php }?>
        
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("pages.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener add-on btn"), 0);?>

        
                <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
            </div>
    
            <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_pages") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
            </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php if (!$_smarty_tpl->tpl_vars['prepend']->value) {?>
            <?php echo Smarty::$_smarty_vars['capture']['add_buttons'];?>

            <?php $_smarty_tpl->_capture_stack[0][] = array("add_buttons", null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
    <?php }?>
<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <table width="100%" class="table table-middle">
        <thead>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
            <th width="100%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <?php } else { ?>
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&!$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>cm-display-radio pull-left<?php }?>">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <tr class="hidden">
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>">
    <?php }?>
    <input id="a<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?><?php echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </td>
        </tr>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
    <?php  $_smarty_tpl->tpl_vars["p_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p_id"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["p_id"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["p_id"]->key => $_smarty_tpl->tpl_vars["p_id"]->value) {
$_smarty_tpl->tpl_vars["p_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["p_id"]->index++;
 $_smarty_tpl->tpl_vars["p_id"]->first = $_smarty_tpl->tpl_vars["p_id"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["p_id"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']++;
?>
        <div class="input-append">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/pages/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('page_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'hide_input'=>true,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first'],'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration']+$_smarty_tpl->tpl_vars['start_pos']->value,'extra_class'=>"input-large"), 0);?>

            </div>
            <?php echo Smarty::$_smarty_vars['capture']['add_buttons'];?>

        </div>
    <?php } ?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="input-append">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/pages/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('page_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value), 0);?>

            </div>
            <?php echo Smarty::$_smarty_vars['capture']['add_buttons'];?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/pages/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('page_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."page_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'hide_input'=>true,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    </tbody>
    <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <tr class="no-items">
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>"><p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p></td>
    </tr>
    </tbody>
    </table>
    <?php } else { ?>
    </div>
    <?php }?>
<?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        </div>
    <?php }?>
</div>
<?php }} ?>
