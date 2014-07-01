<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:42:50
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_cities/hooks/profiles/profile_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1541603850535e30aa115663-65335343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b9c560afff1bfd588c6b0ef83c5508f565946c' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_cities/hooks/profiles/profile_fields.post.tpl',
      1 => 1396612054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1541603850535e30aa115663-65335343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e30aa1b2472_68634317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e30aa1b2472_68634317')) {function content_535e30aa1b2472_68634317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=='b_city') {?>

            <script type="text/javascript"  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[b_city]']").autocomplete(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[b_country]']").val();
                            check_state = $("[name='user_data[b_state]']").val();

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
 
                                callback: function(data) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            </script>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=='s_city') {?>

            <script type="text/javascript"  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[s_city]']").autocomplete(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[s_country]']").val();
                            check_state = $("[name='user_data[s_state]']").val();

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
 
                                callback: function(data) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            </script>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_cities/hooks/profiles/profile_fields.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_cities/hooks/profiles/profile_fields.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=='b_city') {?>

            <script type="text/javascript"  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[b_city]']").autocomplete(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[b_country]']").val();
                            check_state = $("[name='user_data[b_state]']").val();

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
 
                                callback: function(data) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            </script>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=='s_city') {?>

            <script type="text/javascript"  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[s_city]']").autocomplete(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[s_country]']").val();
                            check_state = $("[name='user_data[s_state]']").val();

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
 
                                callback: function(data) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            </script>

<?php }?>
<?php }?><?php }} ?>
