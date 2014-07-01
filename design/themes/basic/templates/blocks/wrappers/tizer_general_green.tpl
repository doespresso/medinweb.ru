{if $content|trim}
    {if $anchor}
    <a name="{$anchor}"></a>
    {/if}
    <div class="tizer green clearfix{if isset($hide_wrapper)} cm-hidden-wrapper{/if}{if $hide_wrapper} hidden{/if}{if $details_page} details-page{/if}{if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} float-right{elseif $content_alignment == "LEFT"} float-left{/if}">
        {if $title || $smarty.capture.title|trim}
            <figure class="tizer-title">
                {hook name="wrapper:mainbox_general_title"}
                {if $smarty.capture.title|trim}
                    {$smarty.capture.title nofilter}
                {else}
                    {$title nofilter}
                {/if}
                {/hook}
            </figure>
        {/if}
        <figure class="tizer-body">{$content nofilter}</figure>
    </div>
{/if}