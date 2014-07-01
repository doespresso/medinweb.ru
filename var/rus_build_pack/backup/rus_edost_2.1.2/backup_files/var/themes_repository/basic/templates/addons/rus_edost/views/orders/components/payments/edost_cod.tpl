{* rus_build_edost dbazhenov *}
<div class="form-field">
	{if $cart.payment_cod.pricecash}
		{if $cart.payment_cod.priceplus}
			{__("edostcod_naloz_plus")}<b>{include file="common/price.tpl" value=$cart.payment_cod.priceplus}</b><br>
		{/if}
		{if $cart.payment_cod.transfer}
			<p style="color: #FF0000; display: inline;">{__("edostcod_naloz_transfer")}<b> {include file="common/price.tpl" value=$cart.payment_cod.transfer}</b></p><br>
		{/if}
		{if $cart.payment_cod.pricetotal}
			{__("edostcod_naloz_total")}<b>{include file="common/price.tpl" value=$cart.payment_cod.pricetotal}</b><br>
		{/if}
	{/if}
</div>