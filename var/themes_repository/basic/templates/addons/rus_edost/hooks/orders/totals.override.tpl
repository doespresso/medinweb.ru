 {if $order_info.payment_id}
    <tr>
        <td>{__("payment_method")}:&nbsp;</td>
        <td style="width: 57%" data-ct-orders-summary="summary-payment">{$order_info.payment_method.payment}&nbsp;{if $order_info.payment_method.description}({$order_info.payment_method.description}){/if}</td>
    </tr>
    {/if}

    {if $order_info.shipping}
        <tr>
            <td>{__("shipping_method")}:</td>
            <td data-ct-orders-summary="summary-ship">
            {if $use_shipments}
                <ul>
                    {foreach from=$order_info.shipping item="shipping_method"}
                        <li>{if $shipping_method.shipping} {$shipping_method.shipping} {else} – {/if}
                            {if $shipping_method.office_data}   
                            <br />
                            <p class="strong">
                            {$shipping_method.office_data.name}
                            </p>
                            <p class="muted">
                            {$shipping_method.office_data.address}<br />
                            {$shipping_method.office_data.tel}<br />
                            {$shipping_method.office_data.schedule}<br />
                            </p>
                            <p>
                            <a target="_blank" href="http://www.edost.ru/office.php?c={$shipping_method.office_data.office_id}">{__("edost.header.office_map")}</a>
                            </p>
                            {/if}
                        </li>

                    

                    {/foreach}
                </ul>
            {else}
                {foreach from=$order_info.shipping item="shipping" name="f_shipp"}
                    {if $shipments[$shipping.group_key].carrier && $shipments[$shipping.group_key].tracking_number}
                        {include file="common/carriers.tpl" carrier=$shipments[$shipping.group_key].carrier tracking_number=$shipments[$shipping.group_key].tracking_number}

                        {$shipping.shipping}&nbsp;({__("tracking_num")}<a {if $smarty.capture.carrier_url|strpos:"://"}target="_blank"{/if} href="{$smarty.capture.carrier_url nofilter}">{$shipments[$shipping.group_key].tracking_number}</a>)
                    {else}
                        {$shipping.shipping}
                    {/if}
                    {if !$smarty.foreach.f_shipp.last}<br>{/if}
                {/foreach}
            {/if}
            </td>
        </tr>
    {/if}

    <tr>
        <td>{__("subtotal")}:&nbsp;</td>
        <td data-ct-orders-summary="summary-subtotal">{include file="common/price.tpl" value=$order_info.display_subtotal}</td>
    </tr>
    {if $order_info.display_shipping_cost|floatval}
    <tr>
        <td>{__("shipping_cost")}:&nbsp;</td>
        <td data-ct-orders-summary="summary-shipcost">{include file="common/price.tpl" value=$order_info.display_shipping_cost}</td>
    </tr>
    {/if}

    {if $order_info.discount|floatval}
    <tr>
        <td class="nowrap strong">{__("including_discount")}:</td>
        <td class="nowrap" data-ct-orders-summary="summary-discount">
            {include file="common/price.tpl" value=$order_info.discount}</td>
    </tr>
    {/if}

    {if $order_info.subtotal_discount|floatval}
    <tr>
        <td class="nowrap strong">{__("order_discount")}:</td>
        <td class="nowrap" data-ct-orders-summary="summary-sub-discount">
            {include file="common/price.tpl" value=$order_info.subtotal_discount}</td>
    </tr>
    {/if}

    {if $order_info.coupons}
    {foreach from=$order_info.coupons item="coupon" key="key"}
    <tr>
        <td class="nowrap">{__("coupon")}:</td>
        <td data-ct-orders-summary="summary-coupons">{$key}</td>
    </tr>
    {/foreach}
    {/if}

    {if $order_info.taxes}
    <tr class="taxes">
        <td><strong>{__("taxes")}:</strong></td>
        <td>&nbsp;</td>
    </tr>
    {foreach from=$order_info.taxes item=tax_data}
    <tr class="taxes-desc">
        <td class="summary-taxes">{$tax_data.description}&nbsp;{include file="common/modifier.tpl" mod_value=$tax_data.rate_value mod_type=$tax_data.rate_type}{if $tax_data.price_includes_tax == "Y" && ($settings.Appearance.cart_prices_w_taxes != "Y" || $settings.General.tax_calculation == "subtotal")}&nbsp;{__("included")}{/if}{if $tax_data.regnumber}&nbsp;({$tax_data.regnumber}){/if}&nbsp;</td>
        <td data-ct-orders-summary="summary-tax-sub">{include file="common/price.tpl" value=$tax_data.tax_subtotal}</td>
    </tr>
    {/foreach}
    {/if}
    {if $order_info.tax_exempt == "Y"}
    <tr>
        <td>{__("tax_exempt")}</td>
        <td>&nbsp;</td>
    <tr>
    {/if}

    {if $order_info.payment_surcharge|floatval && !$take_surcharge_from_vendor}
    <tr>
        <td>{$order_info.payment_method.surcharge_title|default:__("payment_surcharge")}:&nbsp;</td>
        <td data-ct-orders-summary="summary-surchange">{include file="common/price.tpl" value=$order_info.payment_surcharge}</td>
    </tr>
    {/if}
    <tr class="total">
        <td>{__("total")}:&nbsp;</td>
        <td data-ct-orders-summary="summary-total">{include file="common/price.tpl" value=$order_info.total}</td>
    </tr>