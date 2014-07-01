<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:21:15
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/static_data/components/multi_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1027752207534243db5458d7-60612743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a77c10bf6fee9e2344a884b31f567ddf482466' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/static_data/components/multi_list.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1027752207534243db5458d7-60612743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'header' => 0,
    'item' => 0,
    'section_data' => 0,
    'section' => 0,
    'owner_condition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534243db611a72_66003269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534243db611a72_66003269')) {function content_534243db611a72_66003269($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('position_short','name','status','position_short','expand_collapse_list','expand_collapse_list','name','status','expand_sublist_of_items','collapse_sublist_of_items','edit','delete'));
?>
<?php if (count($_smarty_tpl->tpl_vars['items']->value)==0) {?>
    <thead>
    <tr>
        <th class="left" width="5%"></th>
        <th width="10%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
        <th width="65%">
            &nbsp;<?php echo $_smarty_tpl->__("name");?>

        </th>
        <th width="10%">&nbsp;</th>
        <th width="10%" class="center"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
    </thead>
<?php }?>

<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
        <?php $_smarty_tpl->tpl_vars["header"] = new Smarty_variable('', null, 0);?>
        <thead>
        <tr>
            <th class="left" width="5%">
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </th>
            <th width="10%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
            <th width="65%">
                <div class="pull-left">
                <span class="hand cm-combinations cm-tooltip" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_item">
                    <span class="exicon-expand"></span>
                </span>
                <span class="hand cm-combinations hidden cm-tooltip" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_item">
                    <span class="exicon-collapse"></span>
                </span>
                </div>
                &nbsp;<?php echo $_smarty_tpl->__("name");?>

            </th>
            <th width="10%">&nbsp;</th>
            <th width="10%" class="center"><?php echo $_smarty_tpl->__("status");?>
</th>
        </tr>
        </thead>
    <?php }?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['item']->value['level']>0) {?>multiple-table-row<?php }?> cm-row-item cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['item']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <td class="left">
            <input type="checkbox" name="static_data_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item">
        </td>
        <td>
            <input type="text" name="static_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden">
        </td>
        <td>
        <span style="padding-left: <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['level'])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>
px;" class="table-elem">
            <?php if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?>
                <span class="hand cm-combination cm-tooltip" id="on_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
">
                    <span class="exicon-expand"></span>
                </span>
                <span class="hand cm-combination hidden cm-tooltip" id="off_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
">
                    <span class="exicon-collapse"></span>
                </span>
            <?php }?>
            <a class="cm-external-click" data-ca-external-click-id="<?php echo htmlspecialchars("opener_group".((string)$_smarty_tpl->tpl_vars['item']->value['param_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['descr'], ENT_QUOTES, 'UTF-8');?>
</a>
        </span>
        </td>
        <td class="nowrap">
            <div class="pull-right hidden-tools">
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <li><?php ob_start();?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['edit_title']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"edit",'text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['item']->value['descr']),'link_text'=>__("edit"),'id'=>"group".((string)$_smarty_tpl->tpl_vars['item']->value['param_id']),'link_class'=>"tool-link",'no_icon_link'=>true,'href'=>"static_data.update?param_id=".((string)$_smarty_tpl->tpl_vars['item']->value['param_id'])."&section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&".((string)$_smarty_tpl->tpl_vars['owner_condition']->value)), 0);?>
</li>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete"),'href'=>"static_data.delete?param_id=".((string)$_smarty_tpl->tpl_vars['item']->value['param_id'])."&section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&".((string)$_smarty_tpl->tpl_vars['owner_condition']->value),'class'=>"cm-confirm cm-ajax cm-delete-row",'data'=>array('data-ca-target-id'=>'static_data_list')));?>
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
        <td class="right">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['item']->value['param_id'],'status'=>$_smarty_tpl->tpl_vars['item']->value['status'],'hidden'=>true,'object_id_name'=>"param_id",'table'=>"static_data"), 0);?>

        </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?>
        <tbody id="item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden">
        <?php echo $_smarty_tpl->getSubTemplate ("views/static_data/components/multi_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['item']->value['subitems'],'header'=>false), 0);?>

        </tbody>
    <?php }?>
<?php } ?><?php }} ?>
