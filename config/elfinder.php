<?php

return [
    'disks' => [],
    'route' => [
        'prefix' => 'elfinder',
        'middleware' => ['web', FastDog\Admin\Http\Middleware\Admin::class], //Set to null to disable middleware filter
    ],
    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',
    'roots' => [],
    'options' => [
        'locale' => 'ru_RU.UTF-8',
    ],
    'root_options' => [],
];
