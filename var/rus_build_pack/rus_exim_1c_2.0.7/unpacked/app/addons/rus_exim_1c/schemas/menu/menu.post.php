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

// rus_build_exim_1C dbazhenov
$schema['top']['addons']['items']['1c'] = array(
        'position' => 310,
		'href' => '1c.prices',
        'subitems' => array(
				'1c_prices' => array(
				'href' => '1c.prices',
				'position' => 100
				),
				'1c_orders_from' => array(
				'href' => '1c.orders_manage',
				'position' => 200
				),
		),					
);
return $schema;
