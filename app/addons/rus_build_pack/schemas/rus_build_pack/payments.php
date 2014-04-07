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

$payments = array(
    'sbrf' => array(
        'processor' => 'Cбербанк России',
        'processor_script' => '',
        'processor_template' => '',
        'admin_template' => 'sbrf_receipt.tpl',
        'callback' => 'N',
        'type' => 'P',
    ),
    'assist' => array(
        'processor' => 'Assist',
        'processor_script' => 'assist.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'assist.tpl',
        'callback' => 'N',
        'type' => 'P',
    ),
    'webmoney' => array(
        'processor' => 'WebMoney',
        'processor_script' => 'webmoney.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'webmoney.tpl',
        'callback' => 'N',
        'type' => 'P',
    ),
    'robokassa' => array(
        'processor' => 'Robokassa',
        'processor_script' => 'robokassa.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'robokassa.tpl',
        'callback' => 'N',
        'type' => 'P',
    ),
    'pay_at_home' => array(
        'processor' => 'Plati Doma',
        'processor_script' => 'pay_at_home.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'pay_at_home.tpl',
        'callback' => 'Y',
        'type' => 'P',
    ),
    'qiwi' => array(
        'processor' => 'Qiwi',
        'processor_script' => 'qiwi.php',
        'processor_template' => 'views/orders/components/payments/qiwi.tpl',
        'admin_template' => 'qiwi.tpl',
        'callback' => 'Y',
        'type' => 'P',
    ),
    'rbk' => array(
        'processor' => 'RBK Money',
        'processor_script' => 'rbk.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'rbk.tpl',
        'callback' => 'Y',
        'type' => 'P',
    ),
    'vsevcredit' => array(
        'processor' => 'Vsevcredit',
        'processor_script' => 'vsevcredit.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'vsevcredit.tpl',
        'callback' => 'Y',
        'type' => 'P',
    ),
    'yes_credit' => array(
        'processor' => 'Yes Credit',
        'processor_script' => 'yes_credit.php',
        'processor_template' => 'views/orders/components/payments/yescredit.tpl',
        'admin_template' => 'yes_credit.tpl',
        'callback' => 'N',
        'type' => 'P',
    ),
    'paymaster' => array(
        'processor' => 'Paymaster',
        'processor_script' => 'paymaster.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'paymaster.tpl',
        'callback' => 'Y',
        'type' => 'P',
    ),
    'yandex_money' => array(
        'processor' => 'Yandex.Money',
        'processor_script' => 'yandex_money.php',
        'processor_template' => 'views/orders/components/payments/yandex_money.tpl',
        'admin_template' => 'yandex_money.tpl',
        'callback' => 'Y',
        'type' => 'P',
    ),
    'avangard' => array(
        'processor' => 'Avangard',
        'processor_script' => 'avangard.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'avangard.tpl',
        'callback' => 'Y',
        'type' => 'P',
    )
);

return $payments;
