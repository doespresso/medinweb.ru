<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 10:23:31
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/products/components/products_qty_discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42154682533fa1635d4134-36075047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4ede9029a527a0f3aa75aceb3d163c993c3cb' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/products/components/products_qty_discounts.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42154682533fa1635d4134-36075047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'price' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533fa1636eea09_13255397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533fa1636eea09_13255397')) {function content_533fa1636eea09_13255397($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_qty_discounts','quantity','price','text_qty_discounts','quantity','price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="qty-discounts-wrap">
    <p class="qty-discounts-label"><?php echo $_smarty_tpl->__("text_qty_discounts");?>
:</p>
    
    <table class="table qty-discounts">
    <tr>
        <td class="left valign"><?php echo $_smarty_tpl->__("quantity");?>
</td>
        <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
            <td class="center">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>
+&nbsp;</td>
        <?php } ?>
    </tr>
    <tr>
        <td class="left valign"><?php echo $_smarty_tpl->__("price");?>
</td>
        <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
            <td class="center">&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['price']->value['price']), 0);?>
&nbsp;</td>
        <?php } ?>
    </tr>
    </table>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/products_qty_discounts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/products_qty_discounts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="qty-discounts-wrap">
    <p class="qty-discounts-label"><?php echo $_smarty_tpl->__("text_qty_discounts");?>
:</p>
    
    <table class="table qty-discounts">
    <tr>
        <td class="left valign"><?php echo $_smarty_tpl->__("quantity");?>
</td>
        <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
            <td class="center">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>
+&nbsp;</td>
        <?php } ?>
    </tr>
    <tr>
        <td class="left valign"><?php echo $_smarty_tpl->__("price");?>
</td>
        <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
            <td class="center">&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['price']->value['price']), 0);?>
&nbsp;</td>
        <?php } ?>
    </tr>
    </table>
</div><?php }?><?php }} ?>
