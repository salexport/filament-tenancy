<?php

use TomatoPHP\FilamentTenancy\Filament\Resources\TenantResource;

return [
    "central_domain" => env('CENTRAL_DOMAIN', 'localhost'),

    "features" => [
        "homepage" => true,
        "auth" => true,
        "impersonation" => true,
    ],

    'resource' => [
        'tenant' => TenantResource::class
    ]
];
