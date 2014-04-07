-- rus_build_pack dbazhenov

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_pd_notice', 'Используйте следующие URL в настройках аккаунта Плати Дома<br />-&nbsp;<u>успешный платеж</u>: <b>[return_url]</b><br />-&nbsp;<u>отмена платежа</u>: <b>[return_url]</b><br />-&nbsp;<u>отказ от платежа</u>: <b>[cancel_url]</b>');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pay_at_home', 'Плати Дома');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_declined', 'Во время оплаты произошел отказ от оплаты.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_gate_password', 'Платежный пароль');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_gate_password_notice', '<b>Платежный пароль:&nbsp;</b>Используется для формирования подписи запросов и ответов');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_login', 'Логин магазина в системе');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_nonpaid', 'Платеж не оплачен.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_paid', 'Платеж оплачен.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_refund', 'Возврат платежа.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_reverse', 'Платеж отменен.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_shop_id', 'Код магазина в системе');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'pd_shop_id_notice', '<b>Код магазина в системе:&nbsp;</b>Присваивается Магазину при регистрации в Системе. Используется для формирования подписи запросов и ответов');

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'text_pd_notice', 'Use the following URLs in the Plati Doma account settings<br />-&nbsp;<u>Successful payment</u>: <b>[return_url]</b><br />-&nbsp;<u>cancel payment</u>: <b>[cancel_url]</b><br />-&nbsp;<u>decline payment</u>: <b>[decline_url]</b>');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pay_at_home', 'Plati Doma');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_shop_id', 'Store code');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_login', 'Store login');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_gate_password', 'Payment password');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_shop_id_notice', '<b>Store code:&nbsp;</b>Attached to the store on registration. Used for request and response signing');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_gate_password_notice', '<b>Payment password:&nbsp;</b>Used for request and response signing');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_nonpaid', 'Payment failed.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_paid', 'Successful payment.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_reverse', 'Payment canceled.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_refund', 'Payment returned.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'pd_declined', 'Payment declined during processing.');

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('zh', 'text_pd_notice', '在Plati Doma帐户设置中使用以下URLs<br />-&nbsp;<u>成功支付</u>: <b>[return_url]</b><br />-&nbsp;<u>取消支付</u>: <b>[cancel_url]</b><br />-&nbsp;<u>拒绝支付</u>: <b>[decline_url]</b>');
