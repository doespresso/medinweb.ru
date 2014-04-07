<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 18:55:04
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_loginza/hooks/index/login_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169099691353416ac8b5ce21-25426001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a79131eb79ea1be333f8be19b5ea5e4f271bdb' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_loginza/hooks/index/login_buttons.pre.tpl',
      1 => 1396612053,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169099691353416ac8b5ce21-25426001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'addons' => 0,
    'return_url' => 0,
    'escaped_return_url' => 0,
    'active_socials' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53416ac8c4e178_44289184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416ac8c4e178_44289184')) {function content_53416ac8c4e178_44289184($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('or','loginza_social_login','or','loginza_social_login'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_REQUEST['return_url']) {?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode(rawurlencode($_REQUEST['return_url'])), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable(rawurlencode(fn_url("auth.login?return_url=",'C','http')), null, 0);?>

<?php $_smarty_tpl->tpl_vars["active_socials"] = new Smarty_variable(fn_loginza_convert_socials_to_string($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['socials_box']), null, 0);?>

<script src="//loginza.ru/js/widget.js" type="text/javascript"></script>

<div class="loginza-wrap">
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['buttons_type']=='text_link') {?>
        <span><?php echo $_smarty_tpl->__("or");?>
 </span><a href="https://loginza.ru/api/widget?token_url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['escaped_return_url']->value, ENT_QUOTES, 'UTF-8');?>
&lang=<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
&providers_set=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_socials']->value, ENT_QUOTES, 'UTF-8');?>
" class="loginza"><?php echo $_smarty_tpl->__("loginza_social_login");?>
</a>
    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['buttons_type']=='one_button') {?>
        <a href="https://loginza.ru/api/widget?token_url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['escaped_return_url']->value, ENT_QUOTES, 'UTF-8');?>
&lang=<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
&providers_set=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_socials']->value, ENT_QUOTES, 'UTF-8');?>
" class="loginza">
            <img src="http://loginza.ru/img/sign_in_button_gray.gif" alt="Войти через loginza"/>
        </a>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__("loginza_social_login.small_buttons_text");?>
<br/>
        <a href="https://loginza.ru/api/widget?token_url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['escaped_return_url']->value, ENT_QUOTES, 'UTF-8');?>
&lang=<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
&providers_set=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_socials']->value, ENT_QUOTES, 'UTF-8');?>
" class="loginza">
            <img src="http://loginza.ru/img/providers/yandex.png" alt="Yandex" title="Yandex">
            <img src="http://loginza.ru/img/providers/google.png" alt="Google" title="Google Accounts">
            <img src="http://loginza.ru/img/providers/vkontakte.png" alt="Вконтакте" title="Вконтакте">
            <img src="http://loginza.ru/img/providers/mailru.png" alt="Mail.ru" title="Mail.ru">
            <img src="http://loginza.ru/img/providers/twitter.png" alt="Twitter" title="Twitter">
            <img src="http://loginza.ru/img/providers/loginza.png" alt="Loginza" title="Loginza">
            <img src="http://loginza.ru/img/providers/myopenid.png" alt="MyOpenID" title="MyOpenID">
            <img src="http://loginza.ru/img/providers/openid.png" alt="OpenID" title="OpenID">
            <img src="http://loginza.ru/img/providers/webmoney.png" alt="WebMoney" title="WebMoney">
        </a>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_loginza/hooks/index/login_buttons.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_loginza/hooks/index/login_buttons.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<?php if ($_REQUEST['return_url']) {?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode(rawurlencode($_REQUEST['return_url'])), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable(rawurlencode(fn_url("auth.login?return_url=",'C','http')), null, 0);?>

<?php $_smarty_tpl->tpl_vars["active_socials"] = new Smarty_variable(fn_loginza_convert_socials_to_string($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['socials_box']), null, 0);?>

<script src="//loginza.ru/js/widget.js" type="text/javascript"></script>

<div class="loginza-wrap">
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['buttons_type']=='text_link') {?>
        <span><?php echo $_smarty_tpl->__("or");?>
 </span><a href="https://loginza.ru/api/widget?token_url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['escaped_return_url']->value, ENT_QUOTES, 'UTF-8');?>
&lang=<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
&providers_set=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_socials']->value, ENT_QUOTES, 'UTF-8');?>
" class="loginza"><?php echo $_smarty_tpl->__("loginza_social_login");?>
</a>
    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['rus_loginza']['buttons_type']=='one_button') {?>
        <a href="https://loginza.ru/api/widget?token_url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['escaped_return_url']->value, ENT_QUOTES, 'UTF-8');?>
&lang=<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
&providers_set=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_socials']->value, ENT_QUOTES, 'UTF-8');?>
" class="loginza">
            <img src="http://loginza.ru/img/sign_in_button_gray.gif" alt="Войти через loginza"/>
        </a>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__("loginza_social_login.small_buttons_text");?>
<br/>
        <a href="https://loginza.ru/api/widget?token_url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['escaped_return_url']->value, ENT_QUOTES, 'UTF-8');?>
&lang=<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
&providers_set=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_socials']->value, ENT_QUOTES, 'UTF-8');?>
" class="loginza">
            <img src="http://loginza.ru/img/providers/yandex.png" alt="Yandex" title="Yandex">
            <img src="http://loginza.ru/img/providers/google.png" alt="Google" title="Google Accounts">
            <img src="http://loginza.ru/img/providers/vkontakte.png" alt="Вконтакте" title="Вконтакте">
            <img src="http://loginza.ru/img/providers/mailru.png" alt="Mail.ru" title="Mail.ru">
            <img src="http://loginza.ru/img/providers/twitter.png" alt="Twitter" title="Twitter">
            <img src="http://loginza.ru/img/providers/loginza.png" alt="Loginza" title="Loginza">
            <img src="http://loginza.ru/img/providers/myopenid.png" alt="MyOpenID" title="MyOpenID">
            <img src="http://loginza.ru/img/providers/openid.png" alt="OpenID" title="OpenID">
            <img src="http://loginza.ru/img/providers/webmoney.png" alt="WebMoney" title="WebMoney">
        </a>
    <?php }?>
</div>
<?php }?><?php }} ?>
