<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('rPV48mz3FHoIKQBRAYSbQA'),
        'username' => env('opencab'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
   'twilio' => [
        'sid' => 'ACc3054982dffb799d382a342bbc5df6e3',
        'token' => 'aaf030d2571d29ce90866c9f227e18e1',
        'from' => '+18444628452',
        'ssl_verify' => true, // Development switch to bypass API SSL certificate verfication
    ],

    'github' => [
        'client_id' => '246f6acff86e051160df',
        'client_secret' => 'aefe2c2bc81be0fe2569d655690c6c0474b9bf22',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],
    'facebook' => [
        'client_id'     => '141460843002245',
        'client_secret' => '889194194f0f229e9b8d3c988981c21d',
        'redirect'      => 'http://localhost:8000/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id'     => 'oL70nhmRo8d6yu4iajxwU1F8I',
        'client_secret' => '5UgOm5zLH03gZRnBgvQ6zqEDxnhuI6eCIYMgc9EMDrt01WUkTV',
        'redirect'      => 'http://localhost:8000/auth/twitter/callback',
    ],
    'google' => [
        'client_id'     => '53310418406-oa80832qc2n60iedljesk3vuaf8j8e83.apps.googleusercontent.com',
        'client_secret' => 'lKdID79Ph8YsHhGhulGwKRI4',
        'redirect'      => 'http://localhost:8000/auth/google/callback',
    ],


];
