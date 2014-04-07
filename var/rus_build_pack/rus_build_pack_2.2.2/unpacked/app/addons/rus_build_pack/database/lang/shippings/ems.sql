-- rus_build_pack dbazhenov

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'carrier_ems', 'EMS');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'ems_activation_error', 'Для активации процессора доставки EMS валюта Российский Рубль (RUB) должна быть активна и назначена основной.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'ems_country_error', 'Способ доставки EMS доступен только для Российской Федерации. Вы можете изменить настройки стран (Настройки -> Компания).');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'ems_mode', 'Цена доставки рассчитана согласно');

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'carrier_ems', 'EMS');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'ems_activation_error', 'To activate the EMS shipping processor you must have the Russian Rouble (RUB) currency enabled and set primary.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'ems_mode', 'Shipping fees are calculated based on');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'ems_country_error', 'The EMS shopping method is available only for deliveries from Russia. You can change company country under Settings -> Company.');

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('it', 'ems_country_error', 'La modalità di spedizione del Sistema Monetario Europeo è disponibile solo per le spedizioni dalla Russia. Puoi cambiare provenienza della società attraverso le Impostazioni -> Provenienza.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('it', 'ems_mode', 'Le spese di spedizioni sono calcolate su');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('it', 'ems_activation_error', 'Per attivare le modalità di spedizione del Sistema Monetario Europeo devi avere il Rublo Russo (RUB) attivato e impostato come principale.');

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('zh', 'ems_country_error', 'EMS 购物方法是仅适用于从俄罗斯开始发货.您可以在设置 -> 公司这里修改国家.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('zh', 'ems_mode', '配送费用计算基于');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('zh', 'ems_activation_error', '要激活EMS配送处理您必须启用并设置主要的货币为俄罗斯卢布 (RUB) .');
