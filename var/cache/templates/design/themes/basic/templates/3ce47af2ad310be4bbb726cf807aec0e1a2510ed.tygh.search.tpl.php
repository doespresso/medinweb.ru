<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 13:03:02
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13694232255343bb46e29822-40444875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce47af2ad310be4bbb726cf807aec0e1a2510ed' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/search.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13694232255343bb46e29822-40444875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'ajax_class' => 0,
    'c_url' => 0,
    'sort_sign' => 0,
    'orders' => 0,
    'o' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5343bb471189f1_04720714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5343bb471189f1_04720714')) {function content_5343bb471189f1_04720714($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('search_options','id','status','customer','date','total','text_no_orders','orders','search_options','id','status','customer','date','total','text_no_orders','orders'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section'],'class'=>"search-form"), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table orders table-width">
<thead>
<tr>
    <th style="width: 7%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 14%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 44%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 20%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="date") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 15%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=total&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("total");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="total") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
<tr <?php echo smarty_function_cycle(array('values'=>",class=\"table-row\""),$_smarty_tpl);?>
>
    <td><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
    <td><?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'display'=>"view"), 0);?>
</td>
    <td>
        <ul class="no-markers">
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
            <li><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['o']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        </ul>
    </td>
    <td><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a></td>
    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0);?>
</td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars["o"]->_loop) {
?>
<tr>
    <td colspan="7"><p class="no-items"><?php echo $_smarty_tpl->__("text_no_orders");?>
</p></td>
</tr>
<?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("orders");?>
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
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section'],'class'=>"search-form"), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table orders table-width">
<thead>
<tr>
    <th style="width: 7%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 14%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 44%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 20%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="date") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
    <th style="width: 15%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=total&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("total");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="total") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
<tr <?php echo smarty_function_cycle(array('values'=>",class=\"table-row\""),$_smarty_tpl);?>
>
    <td><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
    <td><?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'display'=>"view"), 0);?>
</td>
    <td>
        <ul class="no-markers">
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
            <li><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['o']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        </ul>
    </td>
    <td><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a></td>
    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0);?>
</td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars["o"]->_loop) {
?>
<tr>
    <td colspan="7"><p class="no-items"><?php echo $_smarty_tpl->__("text_no_orders");?>
</p></td>
</tr>
<?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("orders");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
