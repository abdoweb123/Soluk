<?php

return [

    'defaults' => [
        'guard' => 'admin',
        'passwords' => 'admins',
    ],

    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'parent' => [
            'driver' => 'session',
            'provider' => 'parents',
        ],

    ],

    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'parents' => [
            'provider' => 'parents',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

    ],

    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => \Modules\Admin\Entities\Model::class,
        ],
        'parents' => [
            'driver' => 'eloquent',
            'model' => \Modules\Parent\Entities\Model::class,
        ],

    ],

    'password_timeout' => 10800,

];
