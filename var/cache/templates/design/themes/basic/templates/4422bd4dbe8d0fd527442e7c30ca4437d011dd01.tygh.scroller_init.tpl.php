<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:56
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/scroller_init.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2093303191533e9b38d0b545-57203424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4422bd4dbe8d0fd527442e7c30ca4437d011dd01' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/scroller_init.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2093303191533e9b38d0b545-57203424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b38da3458_61043904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b38da3458_61043904')) {function content_533e9b38da3458_61043904($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('prev_page','next','prev_page','next'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

<script type="text/javascript">
//<![CDATA[
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 5 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        if (elm.length) {
            elm.owlCarousel({
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page']=="Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically']=="Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = @1000)===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                pagination: false
            });
        }
    });
}(Tygh, Tygh.$));
//]]>
</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scroller_init.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scroller_init.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

<script type="text/javascript">
//<![CDATA[
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 5 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        if (elm.length) {
            elm.owlCarousel({
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page']=="Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically']=="Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = @1000)===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                pagination: false
            });
        }
    });
}(Tygh, Tygh.$));
//]]>
</script><?php }?><?php }} ?>
