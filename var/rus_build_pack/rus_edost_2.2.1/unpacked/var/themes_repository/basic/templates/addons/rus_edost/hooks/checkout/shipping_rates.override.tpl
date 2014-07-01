{if $display == "show"}
    <div class="step-complete-wrapper">
{/if}

    <div id="shipping_rates_list">

        {foreach from=$product_groups key="group_key" item=group name="spg"}
            {* Group name *}
            {if !"ULTIMATE"|fn_allowed_for || $product_groups|count > 1}
                <span class="vendor-name">{$group.name}</span>
            {/if}

            {* Products list *}
            {if !"ULTIMATE"|fn_allowed_for || $product_groups|count > 1}
                <ul class="bullets-list">
                    {foreach from=$group.products item="product"}
                        {if !(($product.is_edp == 'Y' && $product.edp_shipping != 'Y') || $product.free_shipping == 'Y')}
                            <li>
                                {if $product.product}
                                    {$product.product nofilter}
                                {else}
                                    {$product.product_id|fn_get_product_name}
                                {/if}
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            {/if}

            {* Shippings list *}
            {if $group.shippings && !$group.all_edp_free_shipping && !$group.all_free_shipping && !$group.free_shipping && !$group.shipping_no_required}

                {if $display == "select"}
                    <p>
                        <select id="ssr_{$company_id}" name="shipping_ids[{$company_id}]" {if $onchange}onchange="{$onchange}"{/if}>
                {/if}

                {foreach from=$group.shippings item="shipping"}

                    {if $cart.chosen_shipping.$group_key == $shipping.shipping_id}
                        {assign var="checked" value="checked=\"checked\""}
                        {assign var="selected" value="selected=\"selected\""}
                        {assign var="strong_begin" value="<strong>"}
                        {assign var="strong_end" value="</strong>"}
                    {else}
                        {assign var="checked" value=""}
                        {assign var="selected" value=""}
                        {assign var="strong_begin" value=""}
                        {assign var="strong_end" value=""}
                    {/if}

                    {if $shipping.delivery_time}
                        {assign var="delivery_time" value="(`$shipping.delivery_time`)"}
                    {else}
                        {assign var="delivery_time" value=""}
                    {/if}

                    {if $shipping.rate}
                        {capture assign="rate"}{include file="common/price.tpl" value=$shipping.rate}{/capture}
                        {if $shipping.inc_tax}
                            {assign var="rate" value="`$rate` ("}
                            {if $shipping.taxed_price && $shipping.taxed_price != $shipping.rate}
                                {capture assign="tax"}{include file="common/price.tpl" value=$shipping.taxed_price class="nowrap"}{/capture}
                                {assign var="rate" value="`$rate` (`$tax` "}
                            {/if}
                            {assign var="inc_tax_lang" value=__('inc_tax')}
                            {assign var="rate" value="`$rate``$inc_tax_lang`)"}
                        {/if}
                    {else}
                        {assign var="rate" value=__("free_shipping")}
                    {/if}

                    {if $display == "radio"}
                        <p class="shipping-options-method">
                            <input type="radio" class="valign" id="sh_{$group_key}_{$shipping.shipping_id}" name="shipping_ids[{$group_key}]" value="{$shipping.shipping_id}" onclick="fn_calculate_total_shipping_cost();" {$checked} />
                            <label for="sh_{$group_key}_{$shipping.shipping_id}" class="valign">{$shipping.shipping} {$delivery_time} - {$rate nofilter}</label>
                        </p>

                        {if $cart.chosen_shipping.$group_key == $shipping.shipping_id}
                            {if $shipping.data.office}
                                    {assign var="shipping_id" value=$shipping.shipping_id}
                                    {assign var="old_office_id" value=$select_office.$group_key.$shipping_id}
                                    <div class="checkout-select-office">
                                        {foreach from=$shipping.data.office item=office}
                                            <div class="one-office">
                                                <input type="radio" name="select_office[{$group_key}][{$shipping.shipping_id}]" value="{$office.office_id}" {if $old_office_id == $office.office_id}checked="checked"{/if} id="office_{$office.office_id}" class="office-radio" > 
                                                <div class="office-label">
                                                    <label for="office_{$office.office_id}" >
                                                        <h5 class="valign">{$office.name}</h5> 
                                                        <span class="muted">{$office.address} (<a target="_blank" href="http://www.edost.ru/office.php?c={$office.office_id}">{__("edost.header.office_map")}</a>)<br />
                                                        {$office.tel}<br />
                                                        {$office.schedule}<br />
                                                        </span>
                                                    </label>    
                                                </div>
                                            </div>
                                        {/foreach}
                                    </div>  
                            {/if}
                        {/if}

                    {elseif $display == "select"}
                        <option value="{$shipping.shipping_id}" {$selected}>{$shipping.shipping} {$delivery_time} - {$rate nofilter}</option>

                    {elseif $display == "show"}
                            <p>
                                {$strong_begin}{$rate.name} {$delivery_time} - {$rate nofilter}{$strong_begin}
                            </p>
                    {/if}

                {/foreach}

                {if $display == "select"}
                        </select>
                    <p>
                {/if}

                {if $smarty.foreach.spg.last && !$group.all_edp_free_shipping && !($group.all_free_shipping || $group.free_shipping)}
                    <p class="shipping-options-total">{__("total")}:&nbsp;{include file="common/price.tpl" value=$cart.display_shipping_cost class="price"}</p>
                {/if}

            {else}
                {if $group.all_free_shipping}
                     <p>{__("free_shipping")}</p>
                {elseif $group.all_edp_free_shipping || $group.shipping_no_required }
                    <p>{__("no_shipping_required")}</p>
                {else}
                    <p class="error-text">
                        {if $display == "show"}
                            <strong>{__("text_no_shipping_methods")}</strong>
                        {else}
                            {__("text_no_shipping_methods")}
                        {/if}
                    </p>
                {/if}
            {/if}

        {foreachelse}
            <p>
                {if !$cart.shipping_required}
                    {__("no_shipping_required")}
                {elseif $cart.free_shipping}
                    {__("free_shipping")}
                {/if}
            </p>
        {/foreach}

    <!--shipping_rates_list--></div>

{if $display == "show"}
    </div>
{/if}
