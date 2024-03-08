<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
    */

    'driver' => 'gd',

    //index size
    'index-image-sizes' => [
        'large' => [
            'width' => 800,
            'height' => 600
        ],
         'medium' => [
            'width' => 400,
            'height' => 300
        ],
         'small' => [
            'width' => 80,
            'height' => 60
        ],

    ],

    'default-current-index-image' => 'medium',


    //1:1 Square size
    'square-image-sizes' => [
        'large' => [
            'width' => 800,
            'height' => 800
        ],
         'medium' => [
            'width' => 400,
            'height' => 400
        ],
         'small' => [
            'width' => 80,
            'height' => 80
        ],

    ],

    
    //cache size
    'cache-image-sizes' => [
        'large' => [
            'width' => 800,
            'height' => 600
        ],
         'medium' => [
            'width' => 400,
            'height' => 300
        ],
         'small' => [
            'width' => 80,
            'height' => 60
        ],

    ],

    'default-current-cache-image' => 'medium',

    'image-cache-life-time' => 10,
    'image-not-found' => '',
];
