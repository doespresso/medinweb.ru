<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:45:15
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/pages/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19749115515342497b4738a0-11934211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7679daaf83bcfddecdacf26b40046172108adbd3' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/pages/tabs_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19749115515342497b4738a0-11934211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342497b483085_70315965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342497b483085_70315965')) {function content_5342497b483085_70315965($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
