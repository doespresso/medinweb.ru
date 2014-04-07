<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:24
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/products/components/products_update_files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:512128824533e9cf8201d80-11309709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdaf5aefcdc3cbcde5a3d8f9159cd7588dec99fc' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/products/components/products_update_files.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '512128824533e9cf8201d80-11309709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'product_id' => 0,
    'expand_all' => 0,
    'hide_for_vendor' => 0,
    'files_tree' => 0,
    'folder' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf82d4fd3_90481617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf82d4fd3_90481617')) {function content_533e9cf82d4fd3_90481617($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('new_file','add_file','new_folder','add_folder','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','name','status','no_files','no_data'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['shared_product']=="Y"&&$_smarty_tpl->tpl_vars['product_data']->value['company_id']!=$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
    <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["skip_delete"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['product_id']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["product_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product_data']->value['product_id'], null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['expand_all']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["expand_all"] = new Smarty_variable("true", null, 0);?>
<?php }?>

<div class="items-container" id="product_files_list">
<?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
<div class="btn-toolbar clearfix">
    <div class="pull-right">
        <div class="pull-left shift-right">
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_files",'text'=>__("new_file"),'href'=>"products.update_file?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value),'link_text'=>__("add_file"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

        </div>
        <div class="pull-right">
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_folders",'text'=>__("new_folder"),'href'=>"products.update_folder?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value),'link_text'=>__("add_folder"),'act'=>"general",'icon'=>"icon-plus"), 0);?>
</div>
    </div>
</div>
<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['files_tree']->value) {?>
        <table width="100%" class="table table-middle table-tree">
            <thead>
            <tr>
                <th>
                    <div class="pull-left">
                        <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_cat" class="cm-combinations<?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="exicon-expand"> </span></span>
                        <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_cat" class="cm-combinations<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="exicon-collapse"> </span></span>
                    </div>
                    &nbsp;<?php echo $_smarty_tpl->__("name");?>

                </th>
                <th width="5%" class="center">&nbsp;</th>
                <th width="15%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
            </thead>
        </table>

        <?php  $_smarty_tpl->tpl_vars["folder"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["folder"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files_tree']->value['folders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["folder"]->key => $_smarty_tpl->tpl_vars["folder"]->value) {
$_smarty_tpl->tpl_vars["folder"]->_loop = true;
?>
        <table width="100%" class="table table-middle table-tree cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['folder']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
            <tbody>
            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/folder_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('folder'=>$_smarty_tpl->tpl_vars['folder']->value,'id'=>$_smarty_tpl->tpl_vars['folder']->value['folder_id'],'href'=>"products.update_folder?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&folder_id=".((string)$_smarty_tpl->tpl_vars['folder']->value['folder_id'])), 0);?>

            </tbody>

            <tbody id="group_folder_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['folder']->value['folder_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>">
                <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['folder']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/file_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_file'=>$_smarty_tpl->tpl_vars['file']->value,'level'=>1,'id'=>$_smarty_tpl->tpl_vars['file']->value['file_id'],'href'=>"products.update_file?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&file_id=".((string)$_smarty_tpl->tpl_vars['file']->value['file_id'])), 0);?>

                <?php }
if (!$_smarty_tpl->tpl_vars["file"]->_loop) {
?>
                    <tr class="multiple-table-row cm-row-status-d">
                        <td colspan="3">
                            <div class="row-status" style="padding-left: 35px;">
                                <?php echo $_smarty_tpl->__("no_files");?>

                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>

        <table width="100%" class="table table-middle table-tree">
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files_tree']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/file_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_file'=>$_smarty_tpl->tpl_vars['file']->value,'id'=>$_smarty_tpl->tpl_vars['file']->value['file_id'],'href'=>"products.update_file?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&file_id=".((string)$_smarty_tpl->tpl_vars['file']->value['file_id'])), 0);?>

                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--product_files_list--></div>
<?php }} ?>
