<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:23
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:938553659533e9cf77472b9-87220542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13c31facee6d9a8d48417a6585d24e885ce96e1a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '938553659533e9cf77472b9-87220542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf774fec0_99381825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf774fec0_99381825')) {function content_533e9cf774fec0_99381825($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button hidden">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
