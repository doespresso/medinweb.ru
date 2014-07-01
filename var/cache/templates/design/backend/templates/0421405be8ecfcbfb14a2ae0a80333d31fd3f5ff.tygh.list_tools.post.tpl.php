<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:39:45
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_unisender/hooks/profiles/list_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106153418653429c91ac1a30-02262995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0421405be8ecfcbfb14a2ae0a80333d31fd3f5ff' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_unisender/hooks/profiles/list_tools.post.tpl',
      1 => 1396612050,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '106153418653429c91ac1a30-02262995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53429c91ad2c72_26153865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53429c91ad2c72_26153865')) {function content_53429c91ad2c72_26153865($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_selected_to_unisender'));
?>


<?php if ($_smarty_tpl->tpl_vars['search']->value['user_type']=="C") {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("add_selected_to_unisender"),'dispatch'=>"dispatch[unisender.add_selected]",'form'=>"userlist_form"));?>
</li>
<?php }?>
<?php }} ?>
