<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:19:40
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2008491627534002ec803855-01015335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdd49735e45954da82b08e30a34e04131cbb39a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2008491627534002ec803855-01015335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_twigmo_location' => 0,
    'html_id' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534002ec835b73_17341778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534002ec835b73_17341778')) {function content_534002ec835b73_17341778($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_twigmo_location']->value) {?>
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header"><?php echo $_smarty_tpl->__('twgadmin_hide_header');?>
:</label>
        <div class="controls">
            <input type="hidden" name="block_data[properties][hide_header]" value="N">
            <input type="checkbox" class="checkbox" name="block_data[properties][hide_header]" value="Y" id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']&&$_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']=="Y") {?>checked="checked"<?php }?> >
        </div>
    </div>
<?php }?><?php }} ?>
