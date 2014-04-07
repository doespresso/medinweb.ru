{* rus_build_yandex_market dbazhenov *}

{__("yml_market_category_list_text")}

{foreach from=$categories_tree key="key" item="category"}
        <label for="variant_{$key}" class="radio">
            <input type="radio" name="market_category_list" onclick="$('#market_category_input').val('{$category}');" id="variant_{$key}">{$category}
        </label>
{/foreach}
<div class="buttons-container">
<a class="btn pull-left cm-dialog-closer cm-tooltip">{__("close")}</a>
</div>