{if $product.tracking == "O"}
    {assign var="out_of_stock_text" value=__("text_combination_out_of_stock")}
{else}
    {assign var="out_of_stock_text" value=__("text_out_of_stock")}
{/if}

{if ($product.price|floatval || $product.zero_price_action == "P" || $product.zero_price_action == "A" || (!$product.price|floatval && $product.zero_price_action == "R")) && !($settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart" && !$auth.user_id)}
    {assign var="show_price_values" value=true}
{else}
    {assign var="show_price_values" value=false}
{/if}
{capture name="show_price_values"}{$show_price_values}{/capture}

{assign var="cart_button_exists" value=false}
{assign var="show_qty" value=$show_qty|default:true}
{assign var="obj_id" value=$obj_id|default:$product.product_id}
{assign var="product_amount" value=$product.inventory_amount|default:$product.amount}
{if !$config.tweaks.disable_dhtml && !$no_ajax}
    {assign var="is_ajax" value=true}
{/if}

{capture name="form_open_`$obj_id`"}
{if !$hide_form}
<form action="{""|fn_url}" method="post" name="product_form_{$obj_prefix}{$obj_id}" enctype="multipart/form-data" class="cm-disable-empty-files {if $is_ajax} cm-ajax cm-ajax-full-render cm-ajax-status-middle{/if} {if $form_meta}{$form_meta}{/if}">
<input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
{if !$stay_in_cart}
<input type="hidden" name="redirect_url" value="{$redirect_url|default:$config.current_url}" />
{/if}
<input type="hidden" name="product_data[{$obj_id}][product_id]" value="{$product.product_id}" />
{/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="form_open_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="name_`$obj_id`"}
    {if $show_name}
        {if $hide_links}<strong>{else}<a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="product-title">{/if}{$product.product nofilter}{if $hide_links}</strong>{else}</a>{/if}
    {elseif $show_trunc_name}
        {if $hide_links}<strong>{else}<a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="product-title" title="{$product.product|strip_tags}">{/if}{$product.product|truncate:75:"...":true nofilter}{if $hide_links}</strong>{else}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="name_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="sku_`$obj_id`"}
    {if $show_sku}
        <div class="control-group product-list-field cm-reload-{$obj_prefix}{$obj_id}{if !$product.product_code} hidden{/if}" id="sku_update_{$obj_prefix}{$obj_id}">
            <input type="hidden" name="appearance[show_sku]" value="{$show_sku}" />
            <label id="sku_{$obj_prefix}{$obj_id}">{__("sku")}:</label>
            <span id="product_code_{$obj_prefix}{$obj_id}">{$product.product_code}</span>
        <!--sku_update_{$obj_prefix}{$obj_id}--></div>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="sku_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="rating_`$obj_id`"}
    {hook name="products:data_block"}
    {/hook}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="rating_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="add_to_cart_`$obj_id`"}
{if $show_add_to_cart}
<div class="cm-reload-{$obj_prefix}{$obj_id} {$add_to_cart_class}" id="add_to_cart_update_{$obj_prefix}{$obj_id}">
<input type="hidden" name="appearance[show_add_to_cart]" value="{$show_add_to_cart}" />
<input type="hidden" name="appearance[separate_buttons]" value="{$separate_buttons}" />
<input type="hidden" name="appearance[show_list_buttons]" value="{$show_list_buttons}" />
<input type="hidden" name="appearance[but_role]" value="{$but_role}" />
<input type="hidden" name="appearance[quick_view]" value="{$quick_view}" />

{strip}
{capture name="buttons_product"}
    {hook name="products:add_to_cart"}
        {if $product.has_options && !$show_product_options && !$details_page}
            {if $but_role == "text"}
                {$opt_but_role="text"}
            {else}
                {$opt_but_role="action"}
            {/if}
            {include file="buttons/button.tpl" but_id="button_cart_`$obj_prefix``$obj_id`" but_text=__("select_options") but_href="products.view?product_id=`$product.product_id`" but_role=$opt_but_role but_name=""}
        {else}
            {if $extra_button}{$extra_button nofilter}&nbsp;{/if}
                {include file="buttons/add_to_cart.tpl" but_id="button_cart_`$obj_prefix``$obj_id`" but_name="dispatch[checkout.add..`$obj_id`]" but_role=$but_role block_width=$block_width obj_id=$obj_id product=$product but_meta=$add_to_cart_meta}

            {assign var="cart_button_exists" value=true}
        {/if}
    {/hook}
{/capture}
{hook name="products:buttons_block"}
    {if !($product.zero_price_action == "R" && $product.price == 0) && !($settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y" && (($product_amount <= 0 || $product_amount < $product.min_qty) && $product.tracking != "D") && $product.is_edp != "Y") || ($product.has_options && !$show_product_options)}

        {if $smarty.capture.buttons_product|trim != '&nbsp;'}
            <{if $separate_buttons && !$quick_view}div class="buttons-container"{elseif $separate_buttons && $quick_view}div class="qv-buttons-container"{else}span{/if} id="cart_add_block_{$obj_prefix}{$obj_id}">
                {if $product.avail_since <= $smarty.const.TIME || ($product.avail_since > $smarty.const.TIME && $product.out_of_stock_actions == "B")}
                    {$smarty.capture.buttons_product nofilter}
                {/if}
            </{if $separate_buttons}div{else}span{/if}>
        {/if}
        
    {elseif ($settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y" && (($product_amount <= 0 || $product_amount < $product.min_qty) && $product.tracking != "D") && $product.is_edp != "Y")}
        {assign var="show_qty" value=false}
        {if !$details_page}
            {if (!$product.hide_stock_info && !(($product_amount <= 0 || $product_amount < $product.min_qty) && ($product.avail_since > $smarty.const.TIME)))}
                <span class="qty-out-of-stock" id="out_of_stock_info_{$obj_prefix}{$obj_id}">{$out_of_stock_text}</span>
            {/if}
        {elseif (($product.out_of_stock_actions == "S") && ($product.tracking != "O"))}
            <div class="control-group">
                <label for="product_notify_{$obj_prefix}{$obj_id}">
                    <input id="product_notify_{$obj_prefix}{$obj_id}" type="checkbox" class="checkbox" name="product_notify" {if $product_notification_enabled == "Y"}checked="checked"{/if} onclick="
                        {if $auth.user_id == 0}
                            Tygh.$('#product_notify_email').toggle(this.checked);
                            Tygh.$('#product_notify_email_{$obj_prefix}{$obj_id}').prop('disabled', !this.checked);
                            if (!this.checked) {$ldelim}
                                Tygh.$.ceAjax('request', '{"products.product_notifications?enable="|fn_url:'C':'rel' nofilter}' + 'N&product_id={$product.product_id}&email=' + $('#product_notify_email_{$obj_prefix}{$obj_id}').get(0).value, {$ldelim}cache: false{$rdelim});
                            {$rdelim}
                        {else}
                            Tygh.$.ceAjax('request', '{"products.product_notifications?enable="|fn_url:'C':'rel' nofilter}' + (this.checked ? 'Y' : 'N') + '&product_id=' + '{$product.product_id}', {$ldelim}cache: false{$rdelim});
                        {/if}
                    "/>{__("notify_when_back_in_stock")}
                </label>
            </div>
            {if $auth.user_id eq 0}
            <div class="control-group input-append product-notify-email" id="product_notify_email" style="{if $product_notification_enabled != "Y"} display: none;{/if}">
                <form action="{""|fn_url}" method="post" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax">
                    <label id="product_notify_email_label" for="product_notify_email_{$obj_prefix}{$obj_id}" class="cm-required cm-email hidden">{__("email")}</label>
                    <input type="text" name="email" id="product_notify_email_{$obj_prefix}{$obj_id}" size="20" 
                        value="{if $product_notification_email != ''}{$product_notification_email}{else}{__("enter_email")}{/if}"
                        class="input-text cm-hint" disabled="disabled" title="{__("enter_email")}" />
                    <button class="go-button" title="{__("go")}" alt="{__("go")}"><i class="icon-right-dir"></i></button>
                    <input type="hidden" value="products.product_notifications" name="dispatch" />
                    <input type="hidden" value="Y" name="enable" />
                    <input type="hidden" value="{$product.product_id}" name="product_id" />
                </form>
            </div>
            {/if}
        {/if}
    {/if}

    {if $show_list_buttons}
        {capture name="product_buy_now_`$obj_id`"}
            {hook name="products:buy_now"}
            {if $product.feature_comparison == "Y"}
                {if $separate_buttons}</div><div class="add-to-compare">{/if}
                {include file="buttons/add_to_compare_list.tpl" product_id=$product.product_id}
            {/if}
            {/hook}
        {/capture}
        {assign var="capture_buy_now" value="product_buy_now_`$obj_id`"}

        {if $smarty.capture.$capture_buy_now|trim}
            {if $separate_buttons}<div class="add-buttons-wrap {if $cart_button_exists || (($product.out_of_stock_actions == "S") && ($product.tracking != "O"))} no-margin{/if}"><div class="add-buttons-inner-wrap">{/if}
                <{if $separate_buttons}div{else}span{/if} id="cart_buttons_block_{$obj_prefix}{$obj_id}" class="add-buttons add-to-wish">
                    {$smarty.capture.$capture_buy_now nofilter}
                </{if $separate_buttons}div{else}span{/if}>
            {if $separate_buttons}</div></div>{/if}
        {/if}
    {/if}

    {if ($product.avail_since > $smarty.const.TIME)}
        {include file="common/coming_soon_notice.tpl" avail_date=$product.avail_since add_to_cart=$product.out_of_stock_actions}
    {/if}

    {* Uncomment these lines in the overrides hooks for back-passing $cart_button_exists variable to the product_data template *}
    {*if $cart_button_exists}
        {capture name="cart_button_exists"}Y{/capture}
    {/if*}
{/hook}
{/strip}
<!--add_to_cart_update_{$obj_prefix}{$obj_id}--></div>
{/if}
{/capture}

{if $smarty.capture.cart_button_exists}
    {assign var="cart_button_exists" value=true}
{/if}

{if $no_capture}
    {assign var="capture_name" value="add_to_cart_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="product_features_`$obj_id`"}
    {if $show_features}
        <div class="cm-reload-{$obj_prefix}{$obj_id}" id="product_features_update_{$obj_prefix}{$obj_id}">
            <input type="hidden" name="appearance[show_features]" value="{$show_features}" />
            {include file="views/products/components/product_features_short_list.tpl" features=$product|fn_get_product_features_list no_container=true}
        <!--product_features_update_{$obj_prefix}{$obj_id}--></div>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="product_features_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="prod_descr_`$obj_id`"}
    {if $show_descr}
        {if $product.short_description}
            {$product.short_description nofilter}
        {else}
            {$product.full_description|strip_tags|truncate:160 nofilter}
        {/if}
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="prod_descr_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{********************** Old Price *****************}
{capture name="old_price_`$obj_id`"}
    {if $show_price_values && $show_old_price}
        <span class="cm-reload-{$obj_prefix}{$obj_id}" id="old_price_update_{$obj_prefix}{$obj_id}">
            {hook name="products:old_price"}
            {if $product.discount}
                <span class="list-price nowrap" id="line_old_price_{$obj_prefix}{$obj_id}">{if $details_page}{__("old_price")}: {/if}<span class="strike">{include file="common/price.tpl" value=$product.original_price|default:$product.base_price span_id="old_price_`$obj_prefix``$obj_id`" class="list-price nowrap"}</span></span>
            {elseif $product.list_discount}
                <span class="list-price nowrap" id="line_list_price_{$obj_prefix}{$obj_id}">{if $details_page}<span class="list-price-label">{__("list_price")}:</span> {/if}<span class="strike">{include file="common/price.tpl" value=$product.list_price span_id="list_price_`$obj_prefix``$obj_id`" class="list-price nowrap"}</span></span>
            {/if}
            {/hook}
        <!--old_price_update_{$obj_prefix}{$obj_id}--></span>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="old_price_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{********************** Price *********************}
{capture name="price_`$obj_id`"}
    <span class="cm-reload-{$obj_prefix}{$obj_id} price-update" id="price_update_{$obj_prefix}{$obj_id}">
        <input type="hidden" name="appearance[show_price_values]" value="{$show_price_values}" />
        <input type="hidden" name="appearance[show_price]" value="{$show_price}" />
        {if $show_price_values}
            {if $show_price}
            {hook name="products:prices_block"}
                {if $product.price|floatval || $product.zero_price_action == "P" || ($hide_add_to_cart_button == "Y" && $product.zero_price_action == "A")}
                    <span class="price{if !$product.price|floatval && !$product.zero_price_action} hidden{/if}" id="line_discounted_price_{$obj_prefix}{$obj_id}">{if $details_page}{/if}{include file="common/price.tpl" value=$product.price span_id="discounted_price_`$obj_prefix``$obj_id`" class="price-num"}</span>
                {elseif $product.zero_price_action == "A" && $show_add_to_cart}
                    {assign var="base_currency" value=$currencies[$smarty.const.CART_PRIMARY_CURRENCY]}
                    <span class="price-curency"><span>{__("enter_your_price")}: {if $base_currency.after != "Y"}{$base_currency.symbol}{/if}</span><input class="input-text-short" type="text" size="3" name="product_data[{$obj_id}][price]" value="" />{if $base_currency.after == "Y"}{$base_currency.symbol}{/if}</span>
                {elseif $product.zero_price_action == "R"}
                    <span class="no-price">{__("contact_us_for_price")}</span>
                    {assign var="show_qty" value=false}
                {/if}
            {/hook}
            {/if}
        {elseif $settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart" && !$auth.user_id}
            <span class="price">{__("sign_in_to_view_price")}</span>
        {/if}
    <!--price_update_{$obj_prefix}{$obj_id}--></span>
{/capture}
{if $no_capture}
    {assign var="capture_name" value="price_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{******************* Clean Price ******************}
{capture name="clean_price_`$obj_id`"}
    {if $show_price_values && $show_clean_price && $settings.Appearance.show_prices_taxed_clean == "Y" && $product.taxed_price}
        <span class="cm-reload-{$obj_prefix}{$obj_id}" id="clean_price_update_{$obj_prefix}{$obj_id}">
            <input type="hidden" name="appearance[show_price_values]" value="{$show_price_values}" />
            <input type="hidden" name="appearance[show_clean_price]" value="{$show_clean_price}" />
            {if $product.clean_price != $product.taxed_price && $product.included_tax}
                <span class="list-price nowrap" id="line_product_price_{$obj_prefix}{$obj_id}">({include file="common/price.tpl" value=$product.taxed_price span_id="product_price_`$obj_prefix``$obj_id`" class="list-price nowrap"} {__("inc_tax")})</span>
            {elseif $product.clean_price != $product.taxed_price && !$product.included_tax}
                <span class="list-price nowrap tax-include">({__("including_tax")})</span>
            {/if}
        <!--clean_price_update_{$obj_prefix}{$obj_id}--></span>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="clean_price_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{********************** You Save ******************}
{capture name="list_discount_`$obj_id`"}
    {if $show_price_values && $show_list_discount && $details_page}
        <span class="cm-reload-{$obj_prefix}{$obj_id}" id="line_discount_update_{$obj_prefix}{$obj_id}">
            <input type="hidden" name="appearance[show_price_values]" value="{$show_price_values}" />
            <input type="hidden" name="appearance[show_list_discount]" value="{$show_list_discount}" />
            {if $product.discount}
                <span class="list-price save-price nowrap" id="line_discount_value_{$obj_prefix}{$obj_id}">{__("you_save")}: {include file="common/price.tpl" value=$product.discount span_id="discount_value_`$obj_prefix``$obj_id`" class="list-price nowrap"}&nbsp;(<span id="prc_discount_value_{$obj_prefix}{$obj_id}" class="list-price nowrap">{$product.discount_prc}</span>%)</span>
            {elseif $product.list_discount}
                <span class="list-price save-price nowrap" id="line_discount_value_{$obj_prefix}{$obj_id}"> {__("you_save")}: {include file="common/price.tpl" value=$product.list_discount span_id="discount_value_`$obj_prefix``$obj_id`" class="list-price nowrap"}&nbsp;(<span id="prc_discount_value_{$obj_prefix}{$obj_id}" class="list-price nowrap">{$product.list_discount_prc}</span>%)</span>
            {/if}
        <!--line_discount_update_{$obj_prefix}{$obj_id}--></span>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="list_discount_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{************************************ Discount label ****************************}
{capture name="discount_label_`$obj_prefix``$obj_id`"}
    {if $show_discount_label && ($product.discount_prc || $product.list_discount_prc) && $show_price_values}
        <ul class="discount-label cm-reload-{$obj_prefix}{$obj_id}" id="discount_label_update_{$obj_prefix}{$obj_id}">
            <li id="line_prc_discount_value_{$obj_prefix}{$obj_id}"><span id="prc_discount_value_label_{$obj_prefix}{$obj_id}">{__("save_discount")} {if $product.discount}{$product.discount_prc}{else}{$product.list_discount_prc}{/if}%</span></li>
        <!--discount_label_update_{$obj_prefix}{$obj_id}--></ul>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="discount_label_`$obj_prefix``$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="product_amount_`$obj_id`"}
{if $show_product_amount && $product.is_edp != "Y" && $settings.General.inventory_tracking == "Y"}
    <div class="cm-reload-{$obj_prefix}{$obj_id} stock-wrap" id="product_amount_update_{$obj_prefix}{$obj_id}">
        <input type="hidden" name="appearance[show_product_amount]" value="{$show_product_amount}" />
        {if !$product.hide_stock_info}
            {if $settings.Appearance.in_stock_field == "Y"}
                {if $product.tracking != "D"}
                    {if ($product_amount > 0 && $product_amount >= $product.min_qty) && $settings.General.inventory_tracking == "Y" || $details_page}
                        {if ($product_amount > 0 && $product_amount >= $product.min_qty) && $settings.General.inventory_tracking == "Y"}
                            <div class="control-group product-list-field">
                                <label>{__("availability")}:</label>
                                <span id="qty_in_stock_{$obj_prefix}{$obj_id}" class="qty-in-stock">
                                    {$product_amount}&nbsp;{__("items")}
                                </span>    
                            </div>
                        {elseif $settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y"}
                            <div class="control-group product-list-field">
                                <label>{__("in_stock")}:</label>
                                <span class="qty-out-of-stock">{$out_of_stock_text}</span>
                            </div>
                        {/if}
                    {/if}
                {/if}
            {else}
                {if ((($product_amount > 0 && $product_amount >= $product.min_qty) || $product.tracking == "D") && $settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y") || ($settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount == "Y")}
                    <div class="control-group product-list-field">
                        <label>{__("availability")}:</label>
                        <span class="qty-in-stock" id="in_stock_info_{$obj_prefix}{$obj_id}">{__("in_stock")}</span>
                    </div>
                {elseif $details_page && ($product_amount <= 0 || $product_amount < $product.min_qty) && $settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y"}
                    <div class="control-group product-list-field">
                        <label>{__("availability")}:</label>
                        <span class="qty-out-of-stock" id="out_of_stock_info_{$obj_prefix}{$obj_id}">{$out_of_stock_text}</span>
                    </div>
                {/if}
            {/if}
        {/if}
    <!--product_amount_update_{$obj_prefix}{$obj_id}--></div>
{/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="product_amount_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="product_options_`$obj_id`"}
    {if $show_product_options}
    <div class="cm-reload-{$obj_prefix}{$obj_id}" id="product_options_update_{$obj_prefix}{$obj_id}">
        <input type="hidden" name="appearance[show_product_options]" value="{$show_product_options}" />
        {hook name="products:product_option_content"}
            {if $disable_ids}
                {assign var="_disable_ids" value="`$disable_ids``$obj_id`"}
            {else}
                {assign var="_disable_ids" value=""}
            {/if}
            {include file="views/products/components/product_options.tpl" id=$obj_id product_options=$product.product_options name="product_data" capture_options_vs_qty=$capture_options_vs_qty disable_ids=$_disable_ids}
        {/hook}
    <!--product_options_update_{$obj_prefix}{$obj_id}--></div>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="product_options_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="advanced_options_`$obj_id`"}
    {if $show_product_options}
        <div class="cm-reload-{$obj_prefix}{$obj_id}" id="advanced_options_update_{$obj_prefix}{$obj_id}">
            {include file="views/companies/components/product_company_data.tpl" company_name=$product.company_name company_id=$product.company_id}
            {hook name="products:options_advanced"}
            {/hook}
        <!--advanced_options_update_{$obj_prefix}{$obj_id}--></div>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="advanced_options_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="qty_`$obj_id`"}
    {hook name="products:qty"}
        <div class="cm-reload-{$obj_prefix}{$obj_id}" id="qty_update_{$obj_prefix}{$obj_id}">
        <input type="hidden" name="appearance[show_qty]" value="{$show_qty}" />
        <input type="hidden" name="appearance[capture_options_vs_qty]" value="{$capture_options_vs_qty}" />
        {if !empty($product.selected_amount)}
            {assign var="default_amount" value=$product.selected_amount}
        {elseif !empty($product.min_qty)}
            {assign var="default_amount" value=$product.min_qty}
        {elseif !empty($product.qty_step)}
            {assign var="default_amount" value=$product.qty_step}
        {else}
            {assign var="default_amount" value="1"}
        {/if}

        {if $show_qty && $product.is_edp !== "Y" && $cart_button_exists == true && ($settings.General.allow_anonymous_shopping == "allow_shopping" || $auth.user_id) && $product.avail_since <= $smarty.const.TIME || ($product.avail_since > $smarty.const.TIME && $product.out_of_stock_actions == "B")}
            <div class="qty clearfix{if $quick_view} control-group{if !$capture_options_vs_qty} product-list-field{/if}{/if}{if $settings.Appearance.quantity_changer == "Y"} changer{/if}" id="qty_{$obj_prefix}{$obj_id}">
                {if !$hide_qty_label}<label for="qty_count_{$obj_prefix}{$obj_id}">{$quantity_text|default:__("quantity")}:</label>{/if}
                {if $product.qty_content && $settings.General.inventory_tracking == "Y"}
                <select name="product_data[{$obj_id}][amount]" id="qty_count_{$obj_prefix}{$obj_id}">
                {assign var="a_name" value="product_amount_`$obj_prefix``$obj_id`"}
                {assign var="selected_amount" value=false}
                {foreach name="`$a_name`" from=$product.qty_content item="var"}
                    <option value="{$var}" {if $product.selected_amount && ($product.selected_amount == $var || ($smarty.foreach.$a_name.last && !$selected_amount))}{assign var="selected_amount" value=true}selected="selected"{/if}>{$var}</option>
                {/foreach}
                </select>
                {else}
                {if $settings.Appearance.quantity_changer == "Y"}
                <div class="center valign value-changer cm-value-changer">
                    <a class="cm-increase increase">&#43;</a>
                    {/if}
                    <input type="text" size="5" class="input-text-short cm-amount" id="qty_count_{$obj_prefix}{$obj_id}" name="product_data[{$obj_id}][amount]" value="{$default_amount}"{if $product.qty_step > 1} data-ca-step="{$product.qty_step}"{/if} />
                    {if $settings.Appearance.quantity_changer == "Y"}
                    <a class="cm-decrease decrease">&minus;</a>
                </div>
                {/if}
                {/if}
            </div>
            {if $product.prices}
                {include file="views/products/components/products_qty_discounts.tpl"}
            {/if}
        {elseif !$bulk_add}
            <input type="hidden" name="product_data[{$obj_id}][amount]" value="{$default_amount}" />
        {/if}
        <!--qty_update_{$obj_prefix}{$obj_id}--></div>
    {/hook}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="qty_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="min_qty_`$obj_id`"}
    {if $min_qty && $product.min_qty}
        <p class="description">{__("text_cart_min_qty", ["[product]" => $product.product, "[quantity]" => $product.min_qty])}.</p>
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="min_qty_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="product_edp_`$obj_id`"}
    {if $show_edp && $product.is_edp == "Y"}
        <p class="description">{__("text_edp_product")}.</p>
        <input type="hidden" name="product_data[{$obj_id}][is_edp]" value="Y" />
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="product_edp_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="form_close_`$obj_id`"}
{if !$hide_form}
</form>
{/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="form_close_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{foreach from=$images key="object_id" item="image"}
    <div class="cm-reload-{$image.obj_id}" id="{$object_id}">
        {if $image.link}
            <a href="{$image.link}">
            <input type="hidden" value="{$image.link}" name="image[{$object_id}][link]" />
        {/if}
        <input type="hidden" value="{$image.obj_id},{$image.width},{$image.height},{$image.type}" name="image[{$object_id}][data]" />
        {include file="common/image.tpl" image_width=$image.width image_height=$image.height obj_id=$object_id images=$product.main_pair}
        {if $image.link}
            </a>
        {/if}
    <!--{$object_id}--></div>
{/foreach}

{hook name="products:product_data"}{/hook}
