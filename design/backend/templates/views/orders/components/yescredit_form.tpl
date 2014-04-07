{* rus_build_pack dbazhenov *}
<div class="order">
    {if $errors neq ''}
    <div class="errors" style="color:red;">
        {foreach from=$errors item=err}
        {$err}<br/>
        {/foreach}
    </div>
    {/if}
    <form id="creditForm" action="{$form_action}"  method="POST">
        <table style="font-family: Arial, Helvetica, sans-serif; font-size: 14px">
            <tr>
                <td align="left" valign="top" style="border-width: thin; border-color: #C0C0C0; border-bottom-style: solid;">
                    {__("yc_name")}
                </td>
                <td align="left">
                    <input type="text" Name="credit_data[name]" style="font-family: Arial, Helvetica, sans-serif; width: 100%; font-size: 12px" value="{$credit_data.name}"/>
                </td>
            </tr>
            <tr>
                <td align="left" valign="top" style="border-width: thin; border-color: #C0C0C0; border-bottom-style: solid;">
                    {__("yc_phone")}
                </td>
                <td align="left">
                    <table width="100%">
                        <tr>
                            <td align="center" valign="top">
                                <input name="credit_data[phone_code]" size="4" maxlength="5" style="font-family: Arial, Helvetica, sans-serif; width: 100%; font-size: 12px" value="{$credit_data.phone_code}"/>
                                <div>{__("yc_phone_code")}</div>
                            </td>
                            <td align="center" valign="top">
                                <input name="credit_data[phone_number]" size="10" maxlength="9" style="font-family: Arial, Helvetica, sans-serif; width: 100%; font-size: 12px" value="{$credit_data.phone_number}"/>
                                <div>
                                    {__("yc_phone_number")}
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="border-width: thin; border-color: #C0C0C0; border-bottom-style: solid;">
                    {__("yc_time_credit")}
                </td>
                <td>
                    <select name="credit_data[term]">
                        <option value="6"{if $credit_data.term eq '6' || $credit_data.term eq ''} selected="selected"{/if}>6</option><option value="10"{if $credit_data.term eq '10'} selected="selected"{/if}>10</option><option value="12"{if $credit_data.term eq '12'} selected="selected"{/if}>12</option><option value="24"{if $credit_data.term eq '24'} selected="selected"{/if}>24</option><option value="30"{if $credit_data.term eq '30'} selected="selected"{/if}>30</option><option value="36"{if $credit_data.term eq '36'} selected="selected"{/if}>36</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left" valign="top" style="border-width: thin; border-color: #C0C0C0; border-bottom-style: solid;">
                    {__("yc_sum")}
                </td>
                <td align="left">
                    <input type="text" Name="credit_data[summtovar]" style="font-family: Arial, Helvetica, sans-serif; width: 100%; font-size: 12px" disabled="disabled" readonly="readonly" value="{$total}"/>
                </td>
            </tr>
            <tr>
                <td style="border-width: thin; border-color: #C0C0C0; border-bottom-style: solid;">
                    {__("yc_first_payment")}
                </td>
                <td>
                    <select Name="credit_data[start_percent]">
                        <option value="10"{if $credit_data.start_percent eq '10' || $credit_data.start_percent eq ''} selected="selected"{/if}>10</option><option value="20"{if $credit_data.start_percent eq '20'} selected="selected"{/if}>20</option><option value="30"{if $credit_data.start_percent eq '30'} selected="selected"{/if}>30</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="border-width: thin; border-color: #C0C0C0; border-bottom-style: solid;">
                    {__("yc_district")}
                </td>
                <td align="left">
                    <select Name="credit_data[region]">
                        <option{if $credit_data.region eq 'Москва'} selected="selected"{/if}>Москва</option><option {if $credit_data.region eq 'Московская область'} selected="selected"{/if}>Московская область</option><option {if $credit_data.region eq 'Санкт-Петербург'} selected="selected"{/if}>Санкт-Петербург</option><option {if $credit_data.region eq 'Ленинградская область'} selected="selected"{/if}>Ленинградская область</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left" valign="top">
                    {__("yc_agreed_with")}<a target="_blank" href="http://yes-credit.ru/agreement.htm">{__("yc_agreed_cond")}</a>
                </td>
                <td>
                    <input type="checkbox" checked="checked" name="credit_data[approve]" value="Y"/>
                </td>
            </tr>
            <tr>
                <td class="right" colspan="2">
                 <span align="right"> {__("yc_credit")} <input name='credit_data[rass]' type='radio' value='0'{if $credit_data.rass eq '0' || $credit_data.rass eq ''} checked="checked"{/if}/>{__("yc_installment")} <input name='credit_data[rass]' type='radio' value='1'{if $credit_data.rass eq '1'} checked="checked"{/if} />
                 </td>
             </tr>
             <tr>
                <td colspan="2" align="center">
                    {include file="buttons/button.tpl" but_text=__("yc_submit") but_name=__("yc_submit") but_role="big"}
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <p style="font-size: 10px; font-family: Arial;">
                        {__("text_yc_commission")}
                    </p>
                    <ol style="font-size: 12px; font-family: Arial;">
                        {__("text_yc_faq")}
                    </ol>
                    <p style="font-size: 11px; font-family: Arial;">
                        {__("text_yc_faq_note")}
                    </p>
                </td>
            </tr>
        </table>
    </form>
</div>
