<?php

return [
    'promotions' => [
        'korus_50' => [
            'enabled' => env('PROMO_KORUS50_ENABLED', false),
            'ends_at' => env('PROMO_KORUS50_ENDS', now()->year . '-12-31'),
            'route'   => 'promo.korus50',
        ],
    ],
];
