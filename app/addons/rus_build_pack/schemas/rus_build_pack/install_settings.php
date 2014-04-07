<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

// rus_build_pack dbazhenov

$install_settings = array(
        'default_settings' => array (
                'company_address' => '44 Main street',
                'company_city' => 'Boston',
                'company_country' => 'US',
                'company_state' => 'MA',
                'company_zipcode' => '02116',
                'company_phone' => '6175556985',
                'default_address' => 'Boston street',
                'default_zipcode' => '101000',
                'default_city' => 'Boston',
                'default_country' => 'US',
                'default_state' => 'MA',
                'default_phone' => '6175556985',
                'weight_symbol' => 'lbs',
                'weight_symbol_grams' => '453.6',
        ),
        'new_settings' => array (
                'company_address' => 'Кремль, КОРП. 24',
                'company_city' => 'Москва',
                'company_country' => 'RU',
                'company_state' => 'MOW',
                'company_zipcode' => '101000',
                'company_phone' => '9097777777',
                'default_address' => 'Кремль, КОРП. 24',
                'default_zipcode' => '101000',
                'default_city' => 'Москва',
                'default_country' => 'RU',
                'default_state' => 'MOW',
                'default_phone' => '9097777777',
                'weight_symbol' => 'кг',
                'weight_symbol_grams' => '1000',
        )
);

return $install_settings;
