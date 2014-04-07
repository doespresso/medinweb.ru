<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:23
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267356050533e9cf7011ba3-44158494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9f27433ca84004421e0d7debae2b4dcfc40d6a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '267356050533e9cf7011ba3-44158494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf701fca7_59121746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf701fca7_59121746')) {function content_533e9cf701fca7_59121746($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
