{if $unisender_page_mailing_lists && $addons.rus_unisender.unisender_show_on_registration == 'Y'}
    {if (!$page_mailing_lists)}
        {include file="common/subheader.tpl" title=__("mailing_lists")}
        <p>{__("text_unisender_signup_for_subscriptions")}</p>
    {/if}

    {foreach from=$unisender_page_mailing_lists item=list}
        {if $list.list_id}
            <div class="select-field">
                <input id="profile_mailing_list_{$list.list_id}" type="checkbox" name="unisender_lists[]" value="{$list.list_id}" {if $unisender_user_mailing_lists[$list.list_id]}checked="checked"{/if} class="checkbox" /><label for="profile_mailing_list_{$list.list_id}">{$list.title}</label>
            </div>
        {/if}
    {/foreach}
{/if}