<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:23
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/products/components/products_update_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054269753533e9cf7894436-19318036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4548dad838a0022acfa925f0ba528b479f93f5d' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/products/components/products_update_options.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1054269753533e9cf7894436-19318036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global_options' => 0,
    'option_' => 0,
    'product_options' => 0,
    'product_data' => 0,
    'except_title' => 0,
    'has_inventory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf79546d5_37201520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf79546d5_37201520')) {function content_533e9cf79546d5_37201520($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('global_options','vendor','apply_as_link','apply','add_global_option','add_global_option','forbidden_combinations','allowed_combinations','forbidden_combinations','allowed_combinations','option_combinations','text_options_no_inventory','note','option_combinations'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("extra", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['global_options']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_global_option", null, null); ob_start(); ?>
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="apply_global_option" class="form-horizontal form-edit">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_REQUEST['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="selected_section" value="options" />

                <div class="control-group">
                    <label class="control-label" for="global_option_id"><?php echo $_smarty_tpl->__("global_options");?>
</label>
                    <div class="controls">
                        <select name="global_option[id]" id="global_option_id">
                            <?php  $_smarty_tpl->tpl_vars["option_"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option_"]->_loop = false;
 $_smarty_tpl->tpl_vars["id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['global_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option_"]->key => $_smarty_tpl->tpl_vars["option_"]->value) {
$_smarty_tpl->tpl_vars["option_"]->_loop = true;
 $_smarty_tpl->tpl_vars["id"]->value = $_smarty_tpl->tpl_vars["option_"]->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['option_']->value['company_id']) {?> (<?php echo $_smarty_tpl->__("vendor");?>
: <?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['option_']->value['company_id']), ENT_QUOTES, 'UTF-8');?>
)<?php }?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="global_option_link"><?php echo $_smarty_tpl->__("apply_as_link");?>
</label>
                    <div class="controls">
                        <input type="hidden" name="global_option[link]" value="N" />
                        <input type="checkbox" name="global_option[link]" id="global_option_link" value="Y"/>
                    </div>
                </div>

                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("apply"),'but_name'=>"dispatch[products.apply_global_option]",'cancel_action'=>"close"), 0);?>

                </div>

            </form>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="pull-right shift-left">
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_global_option",'text'=>__("add_global_option"),'content'=>Smarty::$_smarty_vars['capture']['add_global_option'],'link_text'=>__("add_global_option"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

        </div>
    <?php }?>

    <div class="pull-left">
        <?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['product_data']->value['exceptions_type']=="F") {?>
                    <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("forbidden_combinations"), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("allowed_combinations"), null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['except_title']->value,'but_href'=>"product_options.exceptions?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_meta'=>"btn",'but_role'=>"text"), 0);?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['product_data']->value['exceptions_type']=="F") {?>
                    <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("forbidden_combinations"), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("allowed_combinations"), null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['except_title']->value,'but_meta'=>"btn cm-promo-popup",'but_role'=>"text"), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['has_inventory']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("option_combinations"),'but_href'=>"product_options.inventory?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_meta'=>"btn",'but_role'=>"text"), 0);?>

            <?php } else { ?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("notes_picker", null, null); ob_start(); ?>
                    <?php echo $_smarty_tpl->__("text_options_no_inventory");?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"button",'id'=>"content_option_combinations",'text'=>__("note"),'content'=>Smarty::$_smarty_vars['capture']['notes_picker'],'link_text'=>__("option_combinations"),'but_href'=>"product_options.inventory?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_role'=>"text",'extra_act'=>"notes"), 0);?>

            <?php }?>
        <?php }?>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product_options/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>"product",'extra'=>Smarty::$_smarty_vars['capture']['extra'],'product_id'=>$_REQUEST['product_id'],'view_mode'=>"embed"), 0);?>
<?php }} ?>
