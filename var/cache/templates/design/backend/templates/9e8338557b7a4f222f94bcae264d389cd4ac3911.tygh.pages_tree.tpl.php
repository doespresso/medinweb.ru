<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 20:22:49
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/pages/components/pages_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1943597617533edc59e3e562-56575299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e8338557b7a4f222f94bcae264d389cd4ac3911' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/pages/components/pages_tree.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1943597617533edc59e3e562-56575299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkbox_name' => 0,
    'parent_id' => 0,
    'expand_all' => 0,
    'combination_suffix' => 0,
    'pages_tree' => 0,
    'page' => 0,
    'header' => 0,
    'hide_header' => 0,
    'display' => 0,
    'picker' => 0,
    'hide_show_all' => 0,
    'search' => 0,
    'hide_delete_button' => 0,
    'dispatch' => 0,
    'except_id' => 0,
    'except_url' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'come_from' => 0,
    'page_types' => 0,
    'pt' => 0,
    '_href' => 0,
    'allow_save' => 0,
    'multi_level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533edc5a202a97_89564374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533edc5a202a97_89564374')) {function content_533edc5a202a97_89564374($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('position_short','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','name','status','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','edit','delete','no_data'));
?>
<?php if (!$_smarty_tpl->tpl_vars['checkbox_name']->value) {?><?php $_smarty_tpl->tpl_vars["checkbox_name"] = new Smarty_variable("page_ids", null, 0);?><?php }?>

<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><div <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?>class="hidden"<?php }?> id="page<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>
<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['page']->value,"pages"), null, 0);?>
<?php }?>

<table width="100%" class="table table-tree table-middle table-nobg">
<?php if ($_smarty_tpl->tpl_vars['header']->value&&!$_smarty_tpl->tpl_vars['hide_header']->value) {?>
<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_variable('', null, 0);?>
<thead>
<tr>
    <th class="left" width="3%">
    <?php if ($_smarty_tpl->tpl_vars['display']->value!="radio") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    </th>
    <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
    <th class="left" width="7%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
    <?php }?>
    <th width="70%" class="left">
        <?php if (!$_smarty_tpl->tpl_vars['hide_show_all']->value&&!$_smarty_tpl->tpl_vars['search']->value['paginate']) {?>    
            <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_page<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combinations-pages<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>" ><span class="exicon-expand "></span></span>
            <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_page<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combinations-pages<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>" ><span class="exicon-collapse "></span></span>
        <?php }?>
        <?php echo $_smarty_tpl->__("name");?>

    </th>
    <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value) {?><th width="10%">&nbsp;</th><?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
        <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
    <?php }?>
</tr>
</thead>
<?php }?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['page']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['level']>0&&!$_smarty_tpl->tpl_vars['search']->value['paginate']) {?>class="multiple-table-row"<?php }?>>
    <td class="left" width="3%">
        <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
        <?php } else { ?>
        <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
        <?php }?>
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
    <td width="7%">
        <input type="text" name="pages_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" maxlength="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" />
        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <input type="hidden" name="pages_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
][company_id]" size="3" maxlength="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" />
        <?php }?>
    </td>
    <?php }?>
    <td class="row-status" width="70%">
        <div class="text-over" <?php if (!$_smarty_tpl->tpl_vars['search']->value['paginate']) {?>style="padding-left: <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['page']->value['level'])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>
px;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['page']->value['subpages']||$_smarty_tpl->tpl_vars['page']->value['has_children']) {?><?php $_smarty_tpl->tpl_vars["_dispatch"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['dispatch']->value)===null||$tmp==='' ? "pages.manage" : $tmp), null, 0);?><?php if ($_smarty_tpl->tpl_vars['except_id']->value) {?><?php $_smarty_tpl->tpl_vars["except_url"] = new Smarty_variable("&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value), null, 0);?><?php }?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_page<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-pages<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['expand_all']->value&&!$_smarty_tpl->tpl_vars['hide_show_all']->value) {?>hidden<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value['has_children']) {?>onclick="Tygh.$.ceAjax('request', '<?php echo fn_url(((string)$_smarty_tpl->tpl_vars['_dispatch']->value)."?parent_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])."&get_tree=multi_level".((string)$_smarty_tpl->tpl_vars['except_url']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&combination_suffix=".((string)$_smarty_tpl->tpl_vars['combination_suffix']->value),'A','rel');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'page<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"<?php }?>><span class="exicon-expand"></span></span><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_page<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-pages<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||$_smarty_tpl->tpl_vars['hide_show_all']->value) {?>hidden<?php }?>"><span class="exicon-collapse"></span> </span><?php } elseif (!$_smarty_tpl->tpl_vars['search']->value['paginate']) {?><span style="padding-left: 14px;">&nbsp;</span><?php }?><?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?><a href="<?php echo htmlspecialchars(fn_url("pages.update?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value)), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['status']=="N") {?>class="manage-root-item-disabled"<?php }?> id="page_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><label class="inline-label" for="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" id="page_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
<?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?></a><?php } else { ?></label><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']) {?><?php $_smarty_tpl->tpl_vars["pt"] = new Smarty_variable($_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['page']->value['page_type']], null, 0);?><span class="muted"> (<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['pt']->value['single']);?>
)</span><?php }?><div class="shift-left"><?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['page']->value), 0);?>
</div></div>
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
    <td width="10%">
        <input type="hidden" name="pages_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
][parent_id]" size="3" maxlength="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['parent_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['get_tree']) {?>
                <?php $_smarty_tpl->tpl_vars["multi_level"] = new Smarty_variable("&multi_level=Y", null, 0);?>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
                <?php $_smarty_tpl->tpl_vars["_href"] = new Smarty_variable("pages.update?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value), null, 0);?>
            <?php }?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>$_smarty_tpl->tpl_vars['_href']->value));?>
</li>
            <?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['allow_save']->value||!fn_allowed_for("ULTIMATE")) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete"),'class'=>"confirm",'href'=>"pages.delete?page_type=".((string)$_smarty_tpl->tpl_vars['page']->value['page_type'])."&page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id']).((string)$_smarty_tpl->tpl_vars['multi_level']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value)));?>
</li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value) {?>
    <td width="10%" class="nowrap right">
        <?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['allow_save']->value||!fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'status'=>$_smarty_tpl->tpl_vars['page']->value['status'],'hidden'=>true,'object_id_name'=>"page_id",'table'=>"pages",'popup_additional_class'=>"dropleft"), 0);?>

        <?php }?>
    </td>
    <?php }?>
</tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['page']->value['subpages']||$_smarty_tpl->tpl_vars['page']->value['has_children']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pages_tree'=>$_smarty_tpl->tpl_vars['page']->value['subpages'],'parent_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id']), 0);?>

<?php }?>
<?php }
if (!$_smarty_tpl->tpl_vars['page']->_loop) {
?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_show_all']->value) {?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--page<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?><?php }} ?>
