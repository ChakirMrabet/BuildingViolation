<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>
 */

return [
    'mode' => 'live', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'username' => 'cmrabet_api1.softelos.com',
        'password' => 'Y4AH3295CPCHS3QN',
        'secret' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31Ao85QahUFTGamvHjrmLagDQv.RjP',
        'certificate' => '',
    ],
    'live' => [
        'username' => 'outdoorsportsinc_api1.gmail.com',
        'password' => 'YF2TBHHMK8MTY2DP',
        'secret' => 'Ai2eGZbfK1gSbwx0bGc2pSJhGc0FAuRrOzgfbyA.Zvd4l25R7-6AHKLU',
        'certificate' => '',
    ],

    'payment_action' => 'Sale', // Can Only Be 'Sale', 'Authorization', 'Order'
    'currency' => 'USD',
    'notify_url' => '/paypal/notify', // Change this accordingly for your application.
];