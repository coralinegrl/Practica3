<?php

return [
    'paths' => ['api/*'], // Asegúrate de restringir esto a tus rutas de API
    'allowed_methods' => ['*'], // Los métodos que deseas permitir
    'allowed_origins' => ['*'], // Puedes especificar dominios específicos o usar '*' para todos
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Los encabezados que deseas permitir
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false, // Si quieres permitir cookies, etc., establece esto en true
];

