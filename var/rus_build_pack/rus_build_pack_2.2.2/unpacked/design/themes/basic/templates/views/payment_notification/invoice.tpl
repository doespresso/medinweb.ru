<h1>{$invoice.status_title}</h1>

{if $invoice.status == 'CREATED'}
	{if $invoice.system == 'post'}
		<p>{"text_payanyway_post_invoice_created"|replace:'%transaction%':$invoice.transaction|fn_get_lang_var}</p>
	{elseif $invoice.system == 'banktransfer'}
		<p>{"text_payanyway_banktransfer_invoice_created"|replace:'%transaction%':$invoice.transaction|fn_get_lang_var}</p>
	{else}
		<h3>{"text_payanyway_%system%_created_1"|replace:'%system%':$invoice.system|fn_get_lang_var}&nbsp;{$invoice.transaction}</h3>
		<p>{"text_payanyway_%system%_created_2"|replace:'%system%':$invoice.system|fn_get_lang_var}</p>
		<p>{$invoice.transaction}</p>
		<p>{"text_payanyway_total_amount"|fn_get_lang_var}&nbsp;{$invoice.amount}</p>
		<p>{"text_payanyway_fee"|fn_get_lang_var}&nbsp;{$invoice.fee}</p>
	{/if}
{else}
	
	<p>{$invoice.error_message}</p>
{/if}