<?php /* Smarty version Smarty-3.1.15, created on 2014-04-09 18:19:37
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_exim_1c/views/1c/prices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1678587570534556f9637ac0-27328986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4e643c1c9227f73cfe8e2e1640dcbd51187b678' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_exim_1c/views/1c/prices.tpl',
      1 => 1396612050,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1678587570534556f9637ac0-27328986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'base_price_1c' => 0,
    'list_price_1c' => 0,
    'prices_data' => 0,
    '_key' => 0,
    'usergroup' => 0,
    'price' => 0,
    'usergroups' => 0,
    'default_usergroup_name' => 0,
    'new_key' => 0,
    'resul_test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534556f9886180_10936859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534556f9886180_10936859')) {function content_534556f9886180_10936859($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('base_price','list_price','usergroup','price','test','base_price','correct_1c_price','incorrect_1c_price','off_function_import_prices','no_data','save','1c_prices'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<div id="create_prices">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="create_prices" class="cm-ajax cm-comet" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <fieldset>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_exim_1c']['exim_1c_export_add_prices']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["usergroups"] = new Smarty_variable(fn_get_usergroups("C"), null, 0);?>
            
        <table class="table" width="100%">
            <tr>
                <td width="20%"><?php echo $_smarty_tpl->__("base_price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
) :</td>
                <td width="80%"><input type="text" name="base_price_1c" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_price_1c']->value, ENT_QUOTES, 'UTF-8');?>
" class="span9" /></td>
            </tr>
            <tr>
                <td width="20%"><?php echo $_smarty_tpl->__("list_price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
) :</td>
                <td width="80%"><input type="text" name="list_price_1c" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_price_1c']->value, ENT_QUOTES, 'UTF-8');?>
" class="span9" /></td>
            </tr>
        </table>
        
        <table class="table table-middle" width="100%">
            <thead class="cm-first-sibling">
                <tr>
                    <th width="15%"><?php echo $_smarty_tpl->__("usergroup");?>
&nbsp;CS-Cart</th>
                    <th width="70%"><?php echo $_smarty_tpl->__("price");?>
&nbsp;1C</th> 
                    <th width="15%"></th>  
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_smarty_tpl->tpl_vars["_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prices_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
 $_smarty_tpl->tpl_vars["_key"]->value = $_smarty_tpl->tpl_vars["price"]->key;
?>
                    <tr class="cm-row-item">
                        <td width="15%">
                            <select id="usergroup_id" name="prices_1c[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" class="span3">
                                <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = fn_get_default_usergroups(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']!='0') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['price']->value['usergroup_id']!=$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->tpl_vars["default_usergroup_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], null, 0);?>
                                        <?php }?>
                                    <?php }?>
                                <?php } ?>
                                <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['price']->value['usergroup_id']!=$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php }?>
                                <?php } ?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" selected="selected"><?php if ($_smarty_tpl->tpl_vars['default_usergroup_name']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_usergroup_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_get_usergroup_name($_smarty_tpl->tpl_vars['price']->value['usergroup_id']), ENT_QUOTES, 'UTF-8');?>
<?php }?></option>
                            </select>
                        </td>
                        <td width="70%"><input type="text" name="prices_1c[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][price_1c]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['price_1c'], ENT_QUOTES, 'UTF-8');?>
" class="span8" /></td>
                        <td width="15%"><?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('microformats'=>"cm-delete-row",'no_confirm'=>true), 0);?>
</td>
                    </tr>
                <?php } ?>
                <?php echo smarty_function_math(array('equation'=>"x+1",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['_key']->value)===null||$tmp==='' ? 0 : $tmp),'assign'=>"new_key"),$_smarty_tpl);?>

                <tr class="cm-row-item" id="box_add_price">
                    <td width="15%">
                        <select id="usergroup_id" name="prices_1c[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" class="span3">
                            <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = fn_get_default_usergroups(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']!='0') {?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php }?>
                            <?php } ?>
                            <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                    <td width="70%"><input type="text" name="prices_1c[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][price_1c]" class="span8" /></td>
                    <td width="15%"><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_price"), 0);?>
</td>
                </tr>
            </tbody>
        </table>
        <br />
        <br />
        <br />
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_exim_1c']['exim_1c_export_check_prices']=="Y") {?>
            <h2><?php echo $_smarty_tpl->__("test");?>
</h2>
            <table class="table table-middle">
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_smarty_tpl->tpl_vars["_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resul_test']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
 $_smarty_tpl->tpl_vars["_key"]->value = $_smarty_tpl->tpl_vars["price"]->key;
?>
                    <tr>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['price_1c'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['price']->value['price_1c']=="base") {?>(<?php echo $_smarty_tpl->__("base_price");?>
)<?php }?>&nbsp;</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['price']->value['valid']=="1") {?><?php echo $_smarty_tpl->__("correct_1c_price");?>
<?php } else { ?><?php echo $_smarty_tpl->__("incorrect_1c_price");?>
<?php }?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php }?>
    <?php } else { ?>
		<p class="no-items"><?php echo $_smarty_tpl->__("off_function_import_prices");?>
</p>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    </fieldset>
    </form>    
<!--create_prices--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_exim_1c']['exim_1c_export_add_prices']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save"),'but_name'=>"dispatch[1c.save_prices]",'but_role'=>"submit-link",'but_target_form'=>"create_prices"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("1c_prices"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>





<?php }} ?>
