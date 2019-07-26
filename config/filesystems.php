<?php

return [

    'default' => env('FILESYSTEM_DRIVER', 'local'),
    'cloud' => env('FILESYSTEM_CLOUD', 's3'),
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],
        'public' => [
            'driver' => 'local',
            'root' => public_path('upload/upload.000'),
            'visibility' => 'public',
        ],
        'images' => [
            'driver' => 'local',
            'root' => public_path('upload/images'),
            'visibility' => 'public',
        ],
        'catalog' => [
            'driver' => 'local',
            'root' => public_path('upload/upload.001/catalog'),
            'visibility' => 'public',
        ],
        'photo' => [
            'driver' => 'local',
            'root' => public_path('upload/photo'),
            'visibility' => 'public',
        ],
        'attach' => [
            'driver' => 'local',
            'root' => public_path('upload/attach'),
            'visibility' => 'public',
        ],
    ],

];
