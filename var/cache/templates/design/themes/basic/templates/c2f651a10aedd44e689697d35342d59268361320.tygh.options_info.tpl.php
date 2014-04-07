<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:30
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/options_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1638426546533e9d769f08d9-56537238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2f651a10aedd44e689697d35342d59268361320' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/options_info.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1638426546533e9d769f08d9-56537238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_options' => 0,
    'po' => 0,
    'has_option' => 0,
    'no_block' => 0,
    'product' => 0,
    'var' => 0,
    'file' => 0,
    'order_info' => 0,
    'filename' => 0,
    'settings' => 0,
    'inline_option' => 0,
    'fields_prefix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d76bcbae1_11179041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d76bcbae1_11179041')) {function content_533e9d76bcbae1_11179041($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('options','options'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
            <?php $_smarty_tpl->tpl_vars["has_option"] = new Smarty_variable(true, null, 0);?>
            <?php break 1?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        <div class="product-list-field clearfix">
            <label><?php echo $_smarty_tpl->__("options");?>
:</label>
        <?php }?>
            <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?><?php if (($_smarty_tpl->tpl_vars['po']->value['option_type']=="S"||$_smarty_tpl->tpl_vars['po']->value['option_type']=="R")&&!$_smarty_tpl->tpl_vars['po']->value['value']) {?><?php continue 1?><?php }?><?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?><?php $_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']], null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value, null, 0);?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array("options_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['var']->value['variant_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['var']->value['value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {?><?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["file"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["file"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->iteration++;
 $_smarty_tpl->tpl_vars["file"]->last = $_smarty_tpl->tpl_vars["file"]->iteration === $_smarty_tpl->tpl_vars["file"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["po_files"]['last'] = $_smarty_tpl->tpl_vars["file"]->last;
?><?php $_smarty_tpl->tpl_vars["filename"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['file']->value['name']), null, 0);?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("orders.get_custom_file?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&file=".((string)$_smarty_tpl->tpl_vars['file']->value['file'])."&filename=".((string)$_smarty_tpl->tpl_vars['filename']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],"40"), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_files']['last']) {?>, <?php }?><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y") {?><?php if (floatval($_smarty_tpl->tpl_vars['var']->value['modifier'])) {?>&nbsp;(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['var']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['var']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['options_content'])&&trim(Smarty::$_smarty_vars['capture']['options_content'])!='&nbsp;') {?><span class="product-options"><span class="product-options-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</span><span class="product-options-content"><?php echo Smarty::$_smarty_vars['capture']['options_content'];?>
<?php if ($_smarty_tpl->tpl_vars['inline_option']->value) {?>;<?php }?>&nbsp;</span><div class="clearfix"></div></span><?php }?><?php if ($_smarty_tpl->tpl_vars['fields_prefix']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?><?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        </div>
        <?php }?>
    <?php }?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/options_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/options_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
            <?php $_smarty_tpl->tpl_vars["has_option"] = new Smarty_variable(true, null, 0);?>
            <?php break 1?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        <div class="product-list-field clearfix">
            <label><?php echo $_smarty_tpl->__("options");?>
:</label>
        <?php }?>
            <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?><?php if (($_smarty_tpl->tpl_vars['po']->value['option_type']=="S"||$_smarty_tpl->tpl_vars['po']->value['option_type']=="R")&&!$_smarty_tpl->tpl_vars['po']->value['value']) {?><?php continue 1?><?php }?><?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?><?php $_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']], null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value, null, 0);?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array("options_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['var']->value['variant_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['var']->value['value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {?><?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["file"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["file"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->iteration++;
 $_smarty_tpl->tpl_vars["file"]->last = $_smarty_tpl->tpl_vars["file"]->iteration === $_smarty_tpl->tpl_vars["file"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["po_files"]['last'] = $_smarty_tpl->tpl_vars["file"]->last;
?><?php $_smarty_tpl->tpl_vars["filename"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['file']->value['name']), null, 0);?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("orders.get_custom_file?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&file=".((string)$_smarty_tpl->tpl_vars['file']->value['file'])."&filename=".((string)$_smarty_tpl->tpl_vars['filename']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],"40"), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_files']['last']) {?>, <?php }?><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y") {?><?php if (floatval($_smarty_tpl->tpl_vars['var']->value['modifier'])) {?>&nbsp;(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['var']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['var']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['options_content'])&&trim(Smarty::$_smarty_vars['capture']['options_content'])!='&nbsp;') {?><span class="product-options"><span class="product-options-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</span><span class="product-options-content"><?php echo Smarty::$_smarty_vars['capture']['options_content'];?>
<?php if ($_smarty_tpl->tpl_vars['inline_option']->value) {?>;<?php }?>&nbsp;</span><div class="clearfix"></div></span><?php }?><?php if ($_smarty_tpl->tpl_vars['fields_prefix']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?><?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        </div>
        <?php }?>
    <?php }?>
<?php }?><?php }?><?php }} ?>
