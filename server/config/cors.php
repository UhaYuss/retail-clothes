<?php

return [

  'paths' => ['api/*', 'sanctum/csrf-cookie', 'categories'],

  'allowed_methods' => ['*'],

  'allowed_origins' => ['http://localhost:3000', 'https://retail-clothes.vercel.app'],

  'allowed_origins_patterns' => [],

  'allowed_headers' => ['*'],

  'exposed_headers' => [],

  'max_age' => 0,

  'supports_credentials' => false,

];
