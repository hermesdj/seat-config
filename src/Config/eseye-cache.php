<?php
return [
    'eseye' => [
        'driver' => env('ESEYE_CACHE_DRIVER', 'file'),

        // If using the file driver
        'path' => storage_path(env('ESEYE_CACHE_FILE_PATH', 'eseye')),

        // If using Redis cache
        'connection' => env('ESEYE_CACHE_CONNECTION', 'cache'),
        'lock_connection' => env('ESEYE_CACHE_LOCK_CONNECTION', 'default'),
    ],
];