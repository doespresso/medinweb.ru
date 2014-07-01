{if $content|trim}
    {if $anchor}
    <a name="{$anchor}"></a>
    {/if}
    <div class="tizer blue">
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