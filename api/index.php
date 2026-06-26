<?php

define('LARAVEL_START', microtime(true));

// Enable display errors to see exactly what is failing
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Force session, cache, and logging overrides for Vercel serverless environment
// This prevents database errors from SQLite session/cache drivers at runtime
putenv('APP_ENV=production');
putenv('APP_DEBUG=true');
putenv('APP_KEY=base64:LTQ7O+7rTTN5IX6Ywfm65pve12QewJrGL0mu9RI4M+w=');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_STORE=array');
putenv('LOG_CHANNEL=stderr');
putenv('DB_DATABASE=:memory:');

$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = 'true';
$_ENV['APP_KEY'] = 'base64:LTQ7O+7rTTN5IX6Ywfm65pve12QewJrGL0mu9RI4M+w=';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['DB_DATABASE'] = ':memory:';

$_SERVER['APP_ENV'] = 'production';
$_SERVER['APP_DEBUG'] = 'true';
$_SERVER['APP_KEY'] = 'base64:LTQ7O+7rTTN5IX6Ywfm65pve12QewJrGL0mu9RI4M+w=';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_SERVER['SESSION_DRIVER'] = 'cookie';
$_SERVER['CACHE_STORE'] = 'array';
$_SERVER['LOG_CHANNEL'] = 'stderr';
$_SERVER['DB_DATABASE'] = ':memory:';

// Register the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Prepare storage directory for Vercel (read-only filesystem workaround)
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath,
    $storagePath . '/app',
    $storagePath . '/framework',
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/sessions',
    $storagePath . '/bootstrap',
    $storagePath . '/bootstrap/cache',
    $storagePath . '/logs',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Bootstrap Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Override storage path to use /tmp/storage
$app->useStoragePath($storagePath);

// Handle the request
$app->handleRequest(Illuminate\Http\Request::capture());
