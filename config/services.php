<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '841551645018-57eqjdav7h2a0rj7gjcvp897tg1kc558.apps.googleusercontent.com',
        'client_secret' => 'd04ja69SmSYoSVPtrx8-R4UT',
        'redirect' => 'callback/google',
      ], 
      'facebook' => [
        'client_id' => '759503784972506',
        'client_secret' => '228867c8536ca2367ebefab7fb66dce4',
        'redirect' => 'https://batdongsan40.com.vn/public/callback/facebook',
    ],
];
