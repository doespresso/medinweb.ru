-- rus_build_pack dbazhenov dbazhenov

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'vsevcredit_shop_id', 'Идентификатор магазина');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'vsevcredit_secret', 'Секретное слово');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'vsevkredit_url_notice', 'Пожалуйста выставьте настройки в администраторской зоне Всевкредит следующим образом:<br /><b>URL для API взаимодействия:</b> [api_url]<br /><b>URL перенаправления в случае успешного завершения заказа:</b> [return_url]');

-- en

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'vsevcredit_shop_id', 'Shop ID');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'vsevcredit_secret', 'Secret word');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'vsevkredit_url_notice', 'Please set the following URLs in the Vsevkredit admin area:<br /><b>URL for API:</b> [api_url]<br /><b>Return URL:</b> [return_url]');
