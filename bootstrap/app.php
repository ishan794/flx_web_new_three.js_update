<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Intercept any exception before it causes a secondary crash when trying to render the error view
        $exceptions->reportable(function (\Throwable $e) {
            http_response_code(500);
            echo "<h1>Original App Exception Caught in bootstrap/app.php</h1>";
            echo "<p><b>Message:</b> " . $e->getMessage() . "</p>";
            echo "<p><b>File:</b> " . $e->getFile() . ":" . $e->getLine() . "</p>";
            echo "<h3>Stack Trace:</h3><pre>" . $e->getTraceAsString() . "</pre>";
            exit(1);
        });

        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();
