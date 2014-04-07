<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:45
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/views/discussion/components/rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195528735533e9c59a62120-76784412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1b759e2941090609c527697ed63525573edcb4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/views/discussion/components/rate.tpl',
      1 => 1396611752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195528735533e9c59a62120-76784412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'rate_id' => 0,
    'val' => 0,
    'item_rate_id' => 0,
    'rate_name' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c59ac9905_60088623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c59ac9905_60088623')) {function content_533e9c59ac9905_60088623($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="clearfix cm-field-container">
    <fieldset class="rating" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars["title"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["title"]->_loop = false;
 $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable;
 $_from = fn_get_discussion_ratings(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["title"]->key => $_smarty_tpl->tpl_vars["title"]->value) {
$_smarty_tpl->tpl_vars["title"]->_loop = true;
 $_smarty_tpl->tpl_vars["val"]->value = $_smarty_tpl->tpl_vars["title"]->key;
?>
        <?php $_smarty_tpl->tpl_vars['item_rate_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate_id']->value)."_".((string)$_smarty_tpl->tpl_vars['val']->value), null, 0);?>
        <input type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
" /><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</label>
        <?php } ?>
    </fieldset>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/rate.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/rate.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="clearfix cm-field-container">
    <fieldset class="rating" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars["title"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["title"]->_loop = false;
 $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable;
 $_from = fn_get_discussion_ratings(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["title"]->key => $_smarty_tpl->tpl_vars["title"]->value) {
$_smarty_tpl->tpl_vars["title"]->_loop = true;
 $_smarty_tpl->tpl_vars["val"]->value = $_smarty_tpl->tpl_vars["title"]->key;
?>
        <?php $_smarty_tpl->tpl_vars['item_rate_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate_id']->value)."_".((string)$_smarty_tpl->tpl_vars['val']->value), null, 0);?>
        <input type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
" /><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</label>
        <?php } ?>
    </fieldset>
</div><?php }?><?php }} ?>
