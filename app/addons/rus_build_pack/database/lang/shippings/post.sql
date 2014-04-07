-- rus_build_pack dbazhenov

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'express', 'Экспресс-доставка');

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'carrier_russian_post', 'Почта России');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'russian_post_activation_error', 'Для активации процессора доставки Почта России вы должны иметь в качестве основной валюты Российский Рубль (RUB).');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'russian_post_consuming_error', 'Расчет стоимости доставки для Почты России может занимать длительное время.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'russian_post_shipping_type', 'Способ пересылки');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'russian_post_package_type', 'Вид отправления');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'zak_band', 'Заказная бандероль');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'zak_pis', 'Заказное Письмо');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'cen_band', 'Ценная Бандероль');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'cen_pos', 'Ценная Посылка');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'cen_pis', 'Ценное Письмо');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'ground', 'Наземная Перевозка');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'air', 'Авиаперевозка');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'combin', 'Комбинированная Перевозка');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'russian_post_country_error', 'Способ доставки Почта России доступен только для Российской Федерации. Вы можете изменить настройки стран (Настройки -> Компания).');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'russian_post_city_error', 'Способ доставки Почта России доступен только для Москвы. Вы можете изменить настройки на странице \"Настройки -> Компания\".');


REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('en', 'carrier_russian_post', 'RusPOST');