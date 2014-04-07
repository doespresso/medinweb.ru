<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:56:16
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/categories/components/categories_tree_simple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040321937533ec810d11884-52615755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb5e7291919d618e171b0867c5e379a593fda27' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/categories/components/categories_tree_simple.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2040321937533ec810d11884-52615755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'random' => 0,
    'rnd_value' => 0,
    'parent_id' => 0,
    'categories_tree' => 0,
    'cur_cat' => 0,
    'header' => 0,
    'display' => 0,
    'show_all' => 0,
    'expand_all' => 0,
    'runtime' => 0,
    'category' => 0,
    'level' => 0,
    'shift' => 0,
    '_shift' => 0,
    'comb_id' => 0,
    'cat_id' => 0,
    'path' => 0,
    'except_id' => 0,
    'checkbox_name' => 0,
    '_except_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'title_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ec8112896f6_64777145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ec8112896f6_64777145')) {function content_533ec8112896f6_64777145($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','categories','products','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','disabled','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','disabled'));
?>

<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd_value"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["random"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['random']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rnd_value']->value : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
<div class="hidden" id="cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['random']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<?php  $_smarty_tpl->tpl_vars['cur_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cur_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cur_cat']->key => $_smarty_tpl->tpl_vars['cur_cat']->value) {
$_smarty_tpl->tpl_vars['cur_cat']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["cat_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("cat_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."_".((string)$_smarty_tpl->tpl_vars['random']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["title_id"] = new Smarty_variable("category_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id']), null, 0);?>

<table width="100%" class="table table-tree table-middle">
<?php if ($_smarty_tpl->tpl_vars['header']->value&&!$_smarty_tpl->tpl_vars['parent_id']->value) {?>
<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_variable('', null, 0);?>
<thead>
<tr>
    <th>
    <?php if ($_smarty_tpl->tpl_vars['display']->value!="radio") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    </th>
    <th width="84%">
        <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
        <div class="pull-left">
            <span id="on_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-cat <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="exicon-expand"> </span></span>
            <span id="off_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-cat <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="exicon-collapse"> </span></span>
        </div>
        <?php }?>
        <?php echo $_smarty_tpl->__("categories");?>

    </th>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <th class="right"><?php echo $_smarty_tpl->__("products");?>
</th>
    <?php }?>
</tr>
</thead>
<?php }?>

<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['cur_cat']->value['disabled']) {?>
<?php $_smarty_tpl->tpl_vars["level"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cur_cat']->value['level'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<tr class="<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['level']>0) {?> multiple-table-row <?php }?>cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['category']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>

    <td width="<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['level']>0) {?>4% <?php }?>">&nbsp;</td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
            <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_math(array('equation'=>"x+21",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php }?>
        <span class="nowrap" style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
        <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
            <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
            <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])||$_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="exicon-expand"></span></span>
            <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['except_id']->value) {?>
                <?php $_smarty_tpl->tpl_vars["_except_id"] = new Smarty_variable("&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value), null, 0);?>
            <?php }?>
            <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if ((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value]))) {?>hidden<?php }?>" onclick="if (!$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().length) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&random=".((string)$_smarty_tpl->tpl_vars['random']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value).((string)$_smarty_tpl->tpl_vars['_except_id']->value),'A','rel');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"><span class="exicon-expand"> </span></span>
            <?php }?>
            <span title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (!isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])&&(!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value)) {?>hidden<?php }?>"><span class="exicon-collapse"></span></span>
        <?php }?>
        <span id="category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['status']=="N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?>
        </span>
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <td class="right">&nbsp;</td>
    <?php }?>
</tr>
<?php } else { ?>

<?php $_smarty_tpl->tpl_vars["level"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cur_cat']->value['level'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['category']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
       <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>

    <td class="left first-column" width="1%">
        <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['company_categories']) {?>
            &nbsp;
            <?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("comp_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['company_id'])."_".((string)$_smarty_tpl->tpl_vars['random']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["title_id"] = new Smarty_variable("c_company_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['company_id']), null, 0);?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
            <input type="radio" id="input_cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
            <?php } else { ?>
            <input type="checkbox" id="input_cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
            <?php }?>
        <?php }?>
    </td>
    <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
        <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_math(array('equation'=>"x+21",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

    <?php }?>
        <td class="nowrap" style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
                <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
                <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])||$_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="exicon-expand"></span></span>
                <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['except_id']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["_except_id"] = new Smarty_variable("&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value), null, 0);?>
                <?php }?>
                <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if ((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value]))) {?>hidden<?php }?>" onclick="if (!Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().length) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&random=".((string)$_smarty_tpl->tpl_vars['random']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value).((string)$_smarty_tpl->tpl_vars['_except_id']->value),'A','rel');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"><span class="exicon-expand"></span></span>
                <?php }?>
                <span title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (!isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])&&(!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value)) {?>hidden<?php }?>"><span class="exicon-collapse"></span></span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['company_categories']) {?>
                <span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
                <label id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="inline-label" for="input_cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</label>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['status']=="N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?>
        </td>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <td class="right">
        <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['company_categories']) {?>
            &nbsp;
        <?php } else { ?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['product_count'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;&nbsp;
        <?php }?>
    </td>
    <?php }?>
</tr>
<?php }?>
</table>

<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
    <div<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> class="hidden"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories_tree'=>$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories'],'parent_id'=>false), 0);?>

    <?php }?>
    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['random']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>

<?php }} ?>
