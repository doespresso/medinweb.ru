<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 21:05:04
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/sitemap/components/categories_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150874297953418940073bc8-97966568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a88118034ab711acd46728016936a2a20072592' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/sitemap/components/categories_tree.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '150874297953418940073bc8-97966568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'all_categories_tree' => 0,
    'category' => 0,
    'ul_subcategories' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534189401398e4_57066100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534189401398e4_57066100')) {function content_534189401398e4_57066100($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="sitemap-tree-section">
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['cat_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_categories_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['category']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['cat_key']->value = $_smarty_tpl->tpl_vars['category']->key;
 $_smarty_tpl->tpl_vars['category']->iteration++;
 $_smarty_tpl->tpl_vars['category']->last = $_smarty_tpl->tpl_vars['category']->iteration === $_smarty_tpl->tpl_vars['category']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["categories"]['last'] = $_smarty_tpl->tpl_vars['category']->last;
?>
   <?php if ($_smarty_tpl->tpl_vars['category']->value['level']=="0") {?>
       <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value=="started") {?>
       </ul>
            <?php $_smarty_tpl->tpl_vars["ul_subcategories"] = new Smarty_variable('', null, 0);?>
       <?php }?>  
       <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value!="started") {?>
       <ul>
               <li class="parent"><a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
" class="strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php $_smarty_tpl->tpl_vars["ul_subcategories"] = new Smarty_variable("started", null, 0);?>
        <?php }?>
   <?php } else { ?>
           <li style="padding-left: <?php if ($_smarty_tpl->tpl_vars['category']->value['level']=="1") {?>0px<?php } elseif ($_smarty_tpl->tpl_vars['category']->value['level']>"1") {?><?php echo smarty_function_math(array('equation'=>"x*y+0",'x'=>"5",'y'=>$_smarty_tpl->tpl_vars['category']->value['level']),$_smarty_tpl);?>
px<?php }?>;"><a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
   <?php }?>
   <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['last']) {?>
        </ul>
     <?php }?>
<?php } ?>
</div>
<div class="clear"></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/sitemap/components/categories_tree.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/sitemap/components/categories_tree.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="sitemap-tree-section">
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['cat_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_categories_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['category']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['cat_key']->value = $_smarty_tpl->tpl_vars['category']->key;
 $_smarty_tpl->tpl_vars['category']->iteration++;
 $_smarty_tpl->tpl_vars['category']->last = $_smarty_tpl->tpl_vars['category']->iteration === $_smarty_tpl->tpl_vars['category']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["categories"]['last'] = $_smarty_tpl->tpl_vars['category']->last;
?>
   <?php if ($_smarty_tpl->tpl_vars['category']->value['level']=="0") {?>
       <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value=="started") {?>
       </ul>
            <?php $_smarty_tpl->tpl_vars["ul_subcategories"] = new Smarty_variable('', null, 0);?>
       <?php }?>  
       <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value!="started") {?>
       <ul>
               <li class="parent"><a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
" class="strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php $_smarty_tpl->tpl_vars["ul_subcategories"] = new Smarty_variable("started", null, 0);?>
        <?php }?>
   <?php } else { ?>
           <li style="padding-left: <?php if ($_smarty_tpl->tpl_vars['category']->value['level']=="1") {?>0px<?php } elseif ($_smarty_tpl->tpl_vars['category']->value['level']>"1") {?><?php echo smarty_function_math(array('equation'=>"x*y+0",'x'=>"5",'y'=>$_smarty_tpl->tpl_vars['category']->value['level']),$_smarty_tpl);?>
px<?php }?>;"><a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
   <?php }?>
   <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['last']) {?>
        </ul>
     <?php }?>
<?php } ?>
</div>
<div class="clear"></div><?php }?><?php }} ?>
