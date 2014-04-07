-- rus_build_pack dbazhenov

REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_transaction_accepted', 'Заявка принята'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_transaction_rejected', 'Отклонено :'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_name_empty', 'Не заполнено поле ФИО'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_phone_code_empty', 'Не заполнено поле Код номера для связи'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_phone_code_invalid', 'поле Код номера для связи заполнено некорректно'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_phone_number_empty', 'Не заполнено поле Номер для связи'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_phone_number_invalid', 'поле Номер для связи заполнено некорректно'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_not_approved', 'Вы должны согласиться с условиями Соглашения'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_name', 'Фамилия Имя Отчество'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_phone', 'Контактный телефон'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_phone_code', 'Код'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_phone_number', 'Номер телефона'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_time_credit', 'Срок'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_sum', 'Сумма, руб'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_first_payment', 'Первоначальный взнос'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_district', 'Регион регистрации'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_agreed_with', 'Согласен с '); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_agreed_cond', 'условиями Соглашения'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_credit', 'Кредит'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_installment', 'Рассрочка'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_submit', 'Послать заявку'); 
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_faq', '<li><i>Я выбрал товар и хочу приобрести его в кредит.</i><br />
Заполните кредитную заявку и нажмите кнопку «Отправить заявку».</li>
<li><i>Я заполнил и отправил кредитную заявку на сайте интернет-магазина. Что дальше?</i><br />
В течение часа ваша заявка будет обработана, после чего с вами свяжется кредитный менеджер.<br />
Вам нужно будет ответить на несколько стандартных вопросов и подтвердить свои паспортные данные.</li>
<li><i>Кредитный менеджер позвонил мне.</i><br />
После звонка ваша заявка будет рассматриваться банком.<br />
Решение будет сообщено вам в течение 2-х часов.</li>
<li><i>Мне позвонили и сообщили, что банк одобрил мою заявку. Что дальше?</i><br />
Вам позвонит кредитный менеджер и договорится о времени приезда к вам для подписания платежных документов.<br />
После подписания договора Вы ожидаете доставки вашей покупки и при получении оплачиваете первоначальный взнос.</li>
');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_faq_note', 'Заявки, принятые после 19:00 рабочего дня и в выходные, обрабатываются с 10:00 первого рабочего дня.');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_dialog_title', 'Заявка на кредит, не выходя из дома');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_place_credit', 'Оформить Кредит');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'yc_refuse', 'Отказаться');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yes_credit_notice', 'Для корректного функционирования системы Yes Credit необходимо использовать валюту *Российский рубль*');
REPLACE INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES ('ru', 'text_yc_commission', 'В сумму включена единоразовая комиссия за оформление кредита &ndash; 5% от стоимости товара. В случае выбора рассрочки комиссия не взимается. БЕЗ СКРЫТЫХ КОМИССИЙ И ПЛАТЫ ЗА ВЫДАЧУ.');


