<?php

define('LARAVEL_START', microtime(true));

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
