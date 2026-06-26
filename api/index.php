<?php

define('LARAVEL_START', microtime(true));

// Aggressive error handling for Vercel 500 debugging
ini_set('display_errors', '1');
error_reporting(E_ALL);

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        return false;
    }
    // Ignore warnings/notices to find the real fatal error
    if ($errno === E_WARNING || $errno === E_NOTICE || $errno === E_USER_WARNING || $errno === E_USER_NOTICE || $errno === E_DEPRECATED || $errno === E_USER_DEPRECATED) {
        return false;
    }
    echo "<h1>PHP Error</h1><p><b>Error:</b> [$errno] $errstr</p><p><b>File:</b> $errfile:$errline</p>";
    return true;
});

set_exception_handler(function($exception) {
    http_response_code(500);
    echo "<h1>Uncaught Exception</h1><p><b>Message:</b> " . $exception->getMessage() . "</p>";
    echo "<p><b>File:</b> " . $exception->getFile() . ":" . $exception->getLine() . "</p>";
    echo "<h3>Stack Trace:</h3><pre>" . $exception->getTraceAsString() . "</pre>";
    exit(1);
});

register_shutdown_function(function() {
    $error = error_get_last();
    if ($error !== null && in_array($error['type'], [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_PARSE, E_USER_ERROR])) {
        http_response_code(500);
        echo "<h1>Fatal PHP Error</h1><p><b>Error:</b> " . $error['message'] . "</p>";
        echo "<p><b>File:</b> " . $error['file'] . ":" . $error['line'] . "</p>";
    }
});

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

putenv('APP_SERVICES_CACHE=/tmp/storage/bootstrap/cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/storage/bootstrap/cache/packages.php');
putenv('APP_CONFIG_CACHE=/tmp/storage/bootstrap/cache/config.php');
putenv('APP_ROUTES_CACHE=/tmp/storage/bootstrap/cache/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/storage/bootstrap/cache/events.php');

$_ENV['APP_SERVICES_CACHE'] = '/tmp/storage/bootstrap/cache/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/storage/bootstrap/cache/packages.php';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/storage/bootstrap/cache/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/storage/bootstrap/cache/routes.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/storage/bootstrap/cache/events.php';

$_SERVER['APP_SERVICES_CACHE'] = '/tmp/storage/bootstrap/cache/services.php';
$_SERVER['APP_PACKAGES_CACHE'] = '/tmp/storage/bootstrap/cache/packages.php';
$_SERVER['APP_CONFIG_CACHE'] = '/tmp/storage/bootstrap/cache/config.php';
$_SERVER['APP_ROUTES_CACHE'] = '/tmp/storage/bootstrap/cache/routes.php';
$_SERVER['APP_EVENTS_CACHE'] = '/tmp/storage/bootstrap/cache/events.php';

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

// Inject a completely custom exception handler to bypass the broken view renderer
$app->singleton(
    \Illuminate\Contracts\Debug\ExceptionHandler::class,
    function () {
        return new class implements \Illuminate\Contracts\Debug\ExceptionHandler {
            public function report(\Throwable $e) { }
            public function render($request, \Throwable $e) {
                http_response_code(500);
                echo "<h1>BINGO! Original Exception Caught</h1>";
                echo "<p><b>Message:</b> " . $e->getMessage() . "</p>";
                echo "<p><b>File:</b> " . $e->getFile() . ":" . $e->getLine() . "</p>";
                echo "<h3>Stack Trace:</h3><pre>" . $e->getTraceAsString() . "</pre>";
                exit(1);
            }
            public function renderForConsole($output, \Throwable $e) { }
            public function shouldReport(\Throwable $e) { return true; }
        };
    }
);

// Handle the request
$app->handleRequest(Illuminate\Http\Request::capture());
