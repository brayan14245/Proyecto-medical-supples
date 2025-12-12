<?php
/*
|--------------------------------------------------------------------------
| Development Server Router
|--------------------------------------------------------------------------
|
| This file is used by the PHP built-in web server when running
| `php -S` or `php artisan serve`. It will serve existing files
| from the `public/` directory and forward other requests to
| `public/index.php` so Laravel can handle routing.
|
*/

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$publicPath = __DIR__ . '/public';

// Serve the requested resource as-is if it exists in the public folder
if ($uri !== '/' && file_exists($publicPath . $uri)) {
    return false;
}

require_once $publicPath . '/index.php';
