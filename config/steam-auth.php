<?php

return [
    'redirect_url' => '/auth/steam/handle',
    'realm' => env('STEAM_API_DOMAIN', ''),
    'api_key' => env('STEAM_API_KEY', ''),
    'https' => false,
];