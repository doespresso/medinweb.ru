{if $unisender_page_mailing_lists && $addons.rus_unisender.unisender_show_at_checkout == 'Y'}
    {if (!$page_mailing_lists)}
        {include file="common/subheader.tpl" title=__("text_unisender_signup_for_subscriptions")}
    {/if}
    {script src="js/addons/rus_unisender/func.js"}
    <div class="unisender-container" id="unisender_{$tab_id}">
        {foreach from=$unisender_page_mailing_lists item=list}
            <div class="select-field">
                <label><input type="checkbox" name="unisender_lists[]" {if $unisender_user_mailing_lists[$list.list_id]}checked="checked"{/if} value="{$list.list_id}"  class="checkbox cm-unisender-subscribe" />{$list.title}</label>
            </div>
        {/foreach}
    <!--unisender_{$tab_id}--></div>
{/if}
