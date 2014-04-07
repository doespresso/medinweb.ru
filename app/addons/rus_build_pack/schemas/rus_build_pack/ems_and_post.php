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

// rus_build_pack

$objects = array(
    'ems' => array(
        'name' => 'ems_enabled',
        'ru' => 'Включить EMS(Почта России)',
        'status' => 'A',
        'module' => 'ems',
        'code' => 'EMS (Russian post)',
        'sp_file' => '',
        'description' => 'EMS (Почта России)'
    ),
    'post' => array(
        'name' => 'russian_post_enabled',
        'ru' => 'Включить Почту России',
        'status' => 'A',
        'module' => 'russian_post',
        'code' => 'Russian Post',
        'sp_file' => '',
        'description' => 'Почта России'
    ),
    'postcalc' => array(
        'name' => 'russian_post_calc_enabled',
        'ru' => 'Включить калькулятор Почты России',
        'status' => 'A',
        'module' => 'russian_post_calc',
        'code' => 'Russian Post Calc',
        'sp_file' => '',
        'description' => 'Калькулятор Почты России'
    )
);

return $objects;
