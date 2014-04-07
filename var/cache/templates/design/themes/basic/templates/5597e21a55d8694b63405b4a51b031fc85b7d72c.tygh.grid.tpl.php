<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:53
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:727086725533e9b35096463-49014267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5597e21a55d8694b63405b4a51b031fc85b7d72c' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/grid.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '727086725533e9b35096463-49014267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'parent_grid' => 0,
    'grid' => 0,
    'fluid_width' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b350e7de3_44420642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b350e7de3_44420642')) {function content_533e9b350e7de3_44420642($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
    <?php }?>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
    <div class="span<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" >
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?><?php }} ?>
