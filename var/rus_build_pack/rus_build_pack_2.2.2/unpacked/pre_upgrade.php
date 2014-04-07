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

$payments = fn_get_payments(DESCR_SL);

foreach ($payments as $payment) {
    if ($payment['payment'] == 'Robokassa') {
        $processor_params = unserialize($payment['processor_params']);
        if ($processor_params['currency'] != 'RUB' || $processor_params['currency'] != 'USD') {
            $processor_params['payment_method'] = $processor_params['currency'];
            $processor_params['currency'] = 'RUB';
            $payment['processor_params'] = $processor_params;
            fn_update_payment($payment, $payment['payment_id']);
        }
    }
}
