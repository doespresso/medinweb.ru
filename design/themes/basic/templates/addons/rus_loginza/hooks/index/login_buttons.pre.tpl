{* rus_build_loginza vmalyshev *}
{if $smarty.request.return_url}
    {assign var="escaped_return_url" value=$smarty.request.return_url|escape:url|escape:url}
{else}
    {assign var="escaped_return_url" value=$config.current_url|escape:url|escape:url}
{/if}

{assign var="return_url" value="auth.login?return_url="|fn_url:'C':'http'|escape:url}

{assign var="active_socials" value=$addons.rus_loginza.socials_box|fn_loginza_convert_socials_to_string}

<script src="//loginza.ru/js/widget.js" type="text/javascript"></script>

<div class="loginza-wrap">
    {if $addons.rus_loginza.buttons_type == 'text_link'}
        <span>{__("or")} </span><a href="https://loginza.ru/api/widget?token_url={$return_url}{$escaped_return_url}&lang={$smarty.const.DESCR_SL}&providers_set={$active_socials}" class="loginza">{__("loginza_social_login")}</a>
    {elseif $addons.rus_loginza.buttons_type == 'one_button'}
        <a href="https://loginza.ru/api/widget?token_url={$return_url}{$escaped_return_url}&lang={$smarty.const.DESCR_SL}&providers_set={$active_socials}" class="loginza">
            <img src="http://loginza.ru/img/sign_in_button_gray.gif" alt="Войти через loginza"/>
        </a>
    {else}
        {__("loginza_social_login.small_buttons_text")}<br/>
        <a href="https://loginza.ru/api/widget?token_url={$return_url}{$escaped_return_url}&lang={$smarty.const.DESCR_SL}&providers_set={$active_socials}" class="loginza">
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
    {/if}
</div>
