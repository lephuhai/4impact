<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'google' => [
        'app_name' => '4Impact',
        'client_id' => '735827266341-giv0n5n4uojstabgncn13gpcp3toa2k7.apps.googleusercontent.com',
        'client_secret' => 'iPQZOdyecVPxhkQjU6kZoS63',
        'redirect' => '/auth/google/callback',
        'scopes' => [
            'https://www.googleapis.com/auth/userinfo.email',
            'https://www.googleapis.com/auth/userinfo.profile',
        ]
    ],

    'facebook' => [
        'client_id' => '187538478494184',
        'client_secret' => '5f5212305df386367e124fb6fa9c9916',
        'redirect' => '/auth/facebook/callback'
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
