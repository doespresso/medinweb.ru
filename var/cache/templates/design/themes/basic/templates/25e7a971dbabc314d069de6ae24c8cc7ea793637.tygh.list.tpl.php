<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 21:02:19
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/news_and_emails/views/news/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2921524585341889b0df0e5-92779792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25e7a971dbabc314d069de6ae24c8cc7ea793637' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/news_and_emails/views/news/list.tpl',
      1 => 1396611753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2921524585341889b0df0e5-92779792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'news' => 0,
    'n' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5341889b293061_90363748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5341889b293061_90363748')) {function content_5341889b293061_90363748($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('date_added','more_w_ellipsis','news','date_added','more_w_ellipsis','news'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="news">
<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
<div class="news-item">
<a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news_id'], ENT_QUOTES, 'UTF-8');?>
"></a>
<h1><span><?php echo $_smarty_tpl->__("date_added");?>
: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['n']->value['date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news'], ENT_QUOTES, 'UTF-8');?>

</h1>
<div class="news-content">
<?php if ($_smarty_tpl->tpl_vars['n']->value['separate']=="Y") {?>
    <a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a>
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"news:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"news:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['n']->value['description'];?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"news:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
</div>
</div>
<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("news");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/news_and_emails/views/news/list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/news_and_emails/views/news/list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="news">
<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
<div class="news-item">
<a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news_id'], ENT_QUOTES, 'UTF-8');?>
"></a>
<h1><span><?php echo $_smarty_tpl->__("date_added");?>
: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['n']->value['date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news'], ENT_QUOTES, 'UTF-8');?>

</h1>
<div class="news-content">
<?php if ($_smarty_tpl->tpl_vars['n']->value['separate']=="Y") {?>
    <a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a>
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"news:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"news:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['n']->value['description'];?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"news:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
</div>
</div>
<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("news");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php }?><?php }} ?>
