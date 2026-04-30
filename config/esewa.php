<?php


return [
    'merchant_id'  => env('ESEWA_MERCHANT_ID', 'EPAYTEST'),
    'secret_key'   => env('ESEWA_SECRET_KEY', '8gBm/:&EnhH.1/q'),
    'product_code' => env('ESEWA_PRODUCT_CODE', 'EPAYTEST'),
    'env'          => env('ESEWA_ENV', 'sandbox'), // 'sandbox' or 'production'
];
