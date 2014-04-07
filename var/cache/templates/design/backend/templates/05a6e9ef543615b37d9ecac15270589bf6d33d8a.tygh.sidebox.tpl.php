<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:05
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193894326533e9c316d7348-69202457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05a6e9ef543615b37d9ecac15270589bf6d33d8a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/sidebox.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '193894326533e9c316d7348-69202457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c316e5788_42379172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c316e5788_42379172')) {function content_533e9c316e5788_42379172($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
