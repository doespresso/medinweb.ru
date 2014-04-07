-- rus_build_pack dbazhenov

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'cs_info', 'Information'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'cs_info', 'Информация'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'rub_info_title', 'Настройки валюты'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'auto_info', 'Use this link to update currency exchange rates automatically via cron:'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'auto_info', 'Используйте эту ссылку для автоматического обновления курсов валют через CRON:'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'auto_instruction_data', 'Notes: 1) The data on the site of the central bank of Russia is updated every day at 3:00 PM Moscow time (UTC+4);'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'auto_instruction_data', 'Замечания: <br />1) Информация на сайте центрального банка России обновляется ежедневно в 15.00 по Московскому времени;'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'auto_instruction_data_end', '2) As a currency designation, please use only three-character designation RCC (Russian Classification of Currencies)'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'auto_instruction_data_end', '2) В качестве обозначения валюты используйте только трехбуквенное обозначение OKB'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'sbrf_currencies_successfully_sync', 'Синхронизация валют прошла успешно.'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'sbrf_currencies_unsuccessfully_sync', 'При синхронизации валют произошла ошибка.'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'symbol_rub_create', 'Создана новая валюта (Рубли)'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'symbol_rub_no_currency_rub', 'Валюта с кодом "RUB" не существует.'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'symbol_rub_ok', 'Символ рубля обновлён.'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'rub_info_symbol_update', 'Нажмите на эту кнопку, чтобы обновить символ рубля сейчас'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'rub_info_symbol_update_button', 'Обновить символ рубля'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'rub_info_currency_sync', 'Click on this link to synchronize currency exchange rates now.'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'rub_info_currency_sync', 'Нажмите на эту кнопку, чтобы синхронизировать курсы валют сейчас'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'rub_info_currency_sync_auto', 'Автоматическое обновление курсов валют через CRON'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'currencies_sync_info', 'Курс валюты будет синхронизирован с Центральным банком Российской Федерации ( <a href="http://www.cbr.ru/">www.cbr.ru</a> )'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'rub_info_currency_sync_button', 'Обновить курс валюты'); 
