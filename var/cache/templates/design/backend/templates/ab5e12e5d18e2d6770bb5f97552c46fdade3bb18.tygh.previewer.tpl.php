<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:35:26
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180920286453429b8ed151b0-74756485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab5e12e5d18e2d6770bb5f97552c46fdade3bb18' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/previewer.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180920286453429b8ed151b0-74756485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53429b8ed1d354_66586085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53429b8ed1d354_66586085')) {function content_53429b8ed1d354_66586085($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
