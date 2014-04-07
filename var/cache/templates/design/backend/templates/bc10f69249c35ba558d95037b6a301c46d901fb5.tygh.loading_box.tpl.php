<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:42:39
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:942768740533e9aaf4f5006-55910148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc10f69249c35ba558d95037b6a301c46d901fb5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/loading_box.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '942768740533e9aaf4f5006-55910148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9aaf4f9468_72755231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9aaf4f9468_72755231')) {function content_533e9aaf4f9468_72755231($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_overlay" class="ajax-overlay"></div>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>
