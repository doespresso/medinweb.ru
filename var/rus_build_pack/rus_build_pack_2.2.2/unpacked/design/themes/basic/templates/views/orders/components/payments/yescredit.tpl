<div class="control-group">
    <label class="cm-required" for="name">{__("yc_name")}</label>
    <input class="input-text cm-autocomplete-off" type="text" id="fio" name="payment_info[name]" value="{$cart.user_data.lastname} {$cart.user_data.firstname}" size="35" />
</div>

<div class="control-group">
    <label class="cm-required" for="phone">{__("yc_phone")}</label>
    <input class="input-text cm-autocomplete-off" type="text" id="phone" name="payment_info[phone]" value="{$cart.user_data.phone}" size="35" />
</div>

<div class="control-group">
    <label class="cm-required" for="email">{__("email")}</label>
    <input class="input-text cm-autocomplete-off" type="text" id="email" name="payment_info[email]" value="{$cart.user_data.email}" size="35" />
</div>

<div class="control-group">
    <label class="cm-required" for="region">{__("yc_district")}</label>
    <select id="account_id" name="payment_info[region]">
        <option value="Москва">Москва</option>
        <option value="Московская область">Московская область</option>
        <option value="Санкт-Петербург">Санкт-Петербург</option>
        <option value="Ленинградская область">Ленинградская область</option>
        <option value="Абакан">Абакан</option>
        <option value="Ангарск">Ангарск</option>
        <option value="Арзамас">Арзамас</option>
        <option value="Армавир">Армавир</option>
        <option value="Артем">Артем</option>
        <option value="Архангельск">Архангельск</option>
        <option value="Астрахань">Астрахань</option>
        <option value="Барнаул">Барнаул</option>
        <option value="Белгород">Белгород</option>
        <option value="Бийск">Бийск</option>
        <option value="Благовещенск">Благовещенск</option>
        <option value="Бодайбо">Бодайбо</option>
        <option value="Большой Камень">Большой Камень</option>
        <option value="Братск">Братск</option>
        <option value="Брянск">Брянск</option>
        <option value="Великий Новгород">Великий Новгород</option>
        <option value="Владивосток">Владивосток</option>
        <option value="Владимир">Владимир</option>
        <option value="Волгоград">Волгоград</option>
        <option value="Вологда">Вологда</option>
        <option value="Воронеж">Воронеж</option>
        <option value="Выкса">Выкса</option>
        <option value="Георгиевск">Георгиевск</option>
        <option value="Горно-Алтайск">Горно-Алтайск</option>
        <option value="Димитровград">Димитровград</option>
        <option value="Дмитров">Дмитров</option>
        <option value="Дубна">Дубна</option>
        <option value="Екатеринбург">Екатеринбург</option>
        <option value="Ессентуки">Ессентуки</option>
        <option value="Железноводск">Железноводск</option>
        <option value="Златоуст">Златоуст</option>
        <option value="Иваново">Иваново</option>
        <option value="Ижевск">Ижевск</option>
        <option value="Иркутск">Иркутск</option>
        <option value="Йошкар-Ола">Йошкар-Ола</option>
        <option value="Казань">Казань</option>
        <option value="Калининград">Калининград</option>
        <option value="Калуга">Калуга</option>
        <option value="Кемерово">Кемерово</option>
        <option value="Киров">Киров</option>
        <option value="Кисловодск">Кисловодск</option>
        <option value="Клин">Клин</option>
        <option value="Комсомольск-на-Амуре">Комсомольск-на-Амуре</option>
        <option value="Костомукша">Костомукша</option>
        <option value="Кострома">Кострома</option>
        <option value="Красногорск">Красногорск</option>
        <option value="Краснодар">Краснодар</option>
        <option value="Красноярск">Красноярск</option>
        <option value="Курган">Курган</option>
        <option value="Курск">Курск</option>
        <option value="Кызыл">Кызыл</option>
        <option value="Липецк">Липецк</option>
        <option value="Магадан">Магадан</option>
        <option value="Магнитогорск">Магнитогорск</option>
        <option value="Махачкала">Махачкала</option>
        <option value="Миасс">Миасс</option>
        <option value="Минеральные воды">Минеральные воды</option>
        <option value="Мурманск">Мурманск</option>
        <option value="Набережные Челны">Набережные Челны</option>
        <option value="Надым">Надым</option>
        <option value="Нальчик">Нальчик</option>
        <option value="Нарьян-Мар">Нарьян-Мар</option>
        <option value="Находка">Находка</option>
        <option value="Невинномысск">Невинномысск</option>
        <option value="Нерюнги">Нерюнги</option>
        <option value="Нефтекамск">Нефтекамск</option>
        <option value="Нижневартовск">Нижневартовск</option>
        <option value="Нижнекамск">Нижнекамск</option>
        <option value="Нижний Новгород">Нижний Новгород</option>
        <option value="Новокузнецк">Новокузнецк</option>
        <option value="Новосибирск">Новосибирск</option>
        <option value="Новороссийск">Новороссийск</option>
        <option value="Новочеркасск">Новочеркасск</option>
        <option value="Новый Уренгой">Новый Уренгой</option>
        <option value="Норильск">Норильск</option>
        <option value="Ноябрьск">Ноябрьск</option>
        <option value="Обнинск">Обнинск</option>
        <option value="Омск">Омск</option>
        <option value="Орел">Орел</option>
        <option value="Оренбург">Оренбург</option>
        <option value="Орск">Орск</option>
        <option value="Пенза">Пенза</option>
        <option value="Пермь">Пермь</option>
        <option value="Петрозаводск">Петрозаводск</option>
        <option value="Петропавловск-Камчатский">Петропавловск-Камчатский</option>
        <option value="Псков">Псков</option>
        <option value="Пятигорск">Пятигорск</option>
        <option value="Ростов-на-Дону">Ростов-на-Дону</option>
        <option value="Рубцовск">Рубцовск</option>
        <option value="Рязань">Рязань</option>
        <option value="Салехард">Салехард</option>
        <option value="Самара">Самара</option>
        <option value="Саратов">Саратов</option>
        <option value="Северобайкальск">Северобайкальск</option>
        <option value="Смоленск">Смоленск</option>
        <option value="Сочи">Сочи</option>
        <option value="Ставрополь">Ставрополь</option>
        <option value="Старый Оскол">Старый Оскол</option>
        <option value="Стерлитамак">Стерлитамак</option>
        <option value="Сургут">Сургут</option>
        <option value="Сызрань">Сызрань</option>
        <option value="Сыктывкар">Сыктывкар</option>
        <option value="Таганрог">Таганрог</option>
        <option value="Тамбов">Тамбов</option>
        <option value="Татарстан">Татарстан</option>
        <option value="Тверь">Тверь</option>
        <option value="Тольятти">Тольятти</option>
        <option value="Томск">Томск</option>
        <option value="Тула">Тула</option>
        <option value="Тында">Тында</option>
        <option value="Тюмень">Тюмень</option>
        <option value="Улан-Удэ">Улан-Удэ</option>
        <option value="Ульяновск">Ульяновск</option>
        <option value="Уссурийск">Уссурийск</option>
        <option value="Уфа">Уфа</option>
        <option value="Хабаровск">Хабаровск</option>
        <option value="Ханты-Мансийск">Ханты-Мансийск</option>
        <option value="Химки">Химки</option>
        <option value="Чебоксары">Чебоксары</option>
        <option value="Челябинск">Челябинск</option>
        <option value="Череповец">Череповец</option>
        <option value="Черкесск">Черкесск</option>
        <option value="Чита">Чита</option>
        <option value="Шахты">Шахты</option>
        <option value="Южно-Сахалинск">Южно-Сахалинск</option>
        <option value="Якутск">Якутск</option>
        <option value="Ярославль">Ярославль</option>
    </select>
</div>

<div class="control-group">
    <label class="cm-required" for="yc_sum">{__("yc_sum")}</label>
    <div class="controls clear">
        <input type="text" id="yc_sum" name="payment_info[yc_sum]" value="{$cart.total + $cart.payment_surcharge}" disabled="disabled" />
    </div>
</div>

<div class="control-group">
    <label class="cm-required" for="yc_time_credit">{__("yc_time_credit")}</label>
    <select id="yc_time_credit" name="payment_info[yc_time_credit]">
        <option value="6">6</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="24">24</option>
        <option value="30">30</option>
        <option value="36">36</option>
    </select>
</div>

<div class="control-group">
    <label class="cm-required" for="yc_first_payment">{__("yc_first_payment")}</label>
    <select id="yc_first_payment" name="payment_info[yc_first_payment]">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="20">40</option>
        <option value="30">50</option>
    </select>
</div>

<div class="control-group">
    <label class="cm-required" for="approve">
        <input type="checkbox" id="approve" name="payment_info[approve]">{__("yc_agreed_with")}
        <a target="_blank" href="http://yes-credit.ru/agreement.htm" class="rlink">{__("yc_agreed_cond")}</a>
    </label>
    <p class="blank">{__("text_yc_faq_note")}</p>
</div>

<hr/>
<div class="control-group"></div>