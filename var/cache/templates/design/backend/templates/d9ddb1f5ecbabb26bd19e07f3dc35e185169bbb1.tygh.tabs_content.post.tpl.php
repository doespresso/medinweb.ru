<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:23
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1231132951533e9cf7363fd9-19043054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ddb1f5ecbabb26bd19e07f3dc35e185169bbb1' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1231132951533e9cf7363fd9-19043054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf7370921_86356806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf7370921_86356806')) {function content_533e9cf7370921_86356806($_smarty_tpl) {?><div class="hidden" id="content_required_products">

<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('positions'=>'','input_name'=>"required_products",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'type'=>"links",'placement'=>"right"), 0);?>


</div><?php }} ?>
