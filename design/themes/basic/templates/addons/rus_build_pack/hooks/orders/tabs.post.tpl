{* rus_build_pack dbazhenov *}

{if $order_info.payment_method.processor_params}
    {if $order_info.payment_method.processor_params.sbrf_enabled}
        {assign var="sbrf_settings" value=$order_info.payment_method.processor_params}
        {if $sbrf_settings.sbrf_enabled=="Y"}
            <div id="content_payment_information" class="{if $selected_section != "payment_information"}hidden{/if}">
                    <div class="sbrf">
                        <p>{__("sbrf_recepient")}: {$sbrf_settings.sbrf_recepient_name|unescape}</p>
                        <p>{__("sbrf_kpp")}: {$sbrf_settings.sbrf_kpp|unescape}&nbsp;&nbsp;&nbsp;{__("sbrf_inn")}: {$sbrf_settings.sbrf_inn|unescape}</p>
                        <p>{__("sbrf_okato_code")}: {$sbrf_settings.sbrf_okato_code|unescape}&nbsp;&nbsp;&nbsp;&nbsp;{__("sbrf_settlement_account")}:  {$sbrf_settings.sbrf_settlement_account|unescape}&nbsp;&nbsp;</p>
                        {if $sbrf_settings.sbrf_account_id}<p>{__("sbrf_account_id")}: {$sbrf_settings.sbrf_account_id|unescape}</p>{/if}
                        <p>{__("sbrf_bank")}:  {$sbrf_settings.sbrf_bank|unescape}</p>
                        <p>{__("sbrf_bik")}: {$sbrf_settings.sbrf_bik|unescape}&nbsp;{__("sbrf_cor_account")}: {$sbrf_settings.sbrf_cor_account|unescape}</p>
                        <p>{__("sbrf_kbk")}:  {$sbrf_settings.sbrf_kbk|unescape}</p>
                        <p>{__("sbrf_payment")}:  {__("sbrf_order_payment")} #{$order_info.order_id}</p>
                    </div>
            </div>
        {else}
            <div id="content_payment_information" class="{if $selected_section != "payment_information"}hidden{/if}">
                <p class="no-items">{__("sbrf_information_not_found")}</p>
            </div>
        {/if}
    {/if}
{/if}