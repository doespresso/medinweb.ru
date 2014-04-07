<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:53
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43742442533e9b35e4acc0-09363471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28fefaaf108760f97ddce9593a33c99d1f99f88' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/container.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '43742442533e9b35e4acc0-09363471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b35e5c258_60406266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b35e5c258_60406266')) {function content_533e9b35e5c258_60406266($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
