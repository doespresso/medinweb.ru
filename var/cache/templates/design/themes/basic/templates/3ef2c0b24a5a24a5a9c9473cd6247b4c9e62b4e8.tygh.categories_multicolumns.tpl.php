<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 15:58:27
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/categories/components/categories_multicolumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1465340335534141630a2a16-63015048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ef2c0b24a5a24a5a9c9473cd6247b4c9e62b4e8' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/categories/components/categories_multicolumns.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1465340335534141630a2a16-63015048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'categories' => 0,
    'columns' => 0,
    'splitted_categories' => 0,
    'scats' => 0,
    'category' => 0,
    'cell_width' => 0,
    'settings' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5341416316f214_59390862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5341416316f214_59390862')) {function content_5341416316f214_59390862($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['categories']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "3" : $tmp),'assign'=>"splitted_categories"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "3" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>


<table class="table-width subcategories">
<?php  $_smarty_tpl->tpl_vars["scats"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["scats"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["scats"]->key => $_smarty_tpl->tpl_vars["scats"]->value) {
$_smarty_tpl->tpl_vars["scats"]->_loop = true;
?>
    <tr>
        <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <td class="center valign-top <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>with-image<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                    <p class="margin-bottom">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
" class="strong">
                        <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height']), 0);?>

                        <?php }?>
                        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</strong>
                        </a>
                    </p>
                </td>
            <?php } else { ?>
                <td style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">&nbsp;</td>
            <?php }?>
        <?php } ?>
    </tr>
<?php } ?>
</table>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/components/categories_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/components/categories_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['categories']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "3" : $tmp),'assign'=>"splitted_categories"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "3" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>


<table class="table-width subcategories">
<?php  $_smarty_tpl->tpl_vars["scats"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["scats"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["scats"]->key => $_smarty_tpl->tpl_vars["scats"]->value) {
$_smarty_tpl->tpl_vars["scats"]->_loop = true;
?>
    <tr>
        <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <td class="center valign-top <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>with-image<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                    <p class="margin-bottom">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
" class="strong">
                        <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height']), 0);?>

                        <?php }?>
                        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</strong>
                        </a>
                    </p>
                </td>
            <?php } else { ?>
                <td style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">&nbsp;</td>
            <?php }?>
        <?php } ?>
    </tr>
<?php } ?>
</table>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
