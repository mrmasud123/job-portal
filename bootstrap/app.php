<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(basePath: dirname(__DIR__))
    // 1️⃣ Register middleware aliases first
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'jwt.auth' => \App\Http\Middleware\JWTAuthMiddleware::class,
        ]);
    })
    // 2️⃣ Then load routes
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();


// return Application::configure(basePath: dirname(__DIR__))
//     ->withMiddleware(function ($middleware) {
//         // Global JWT middleware
//         $middleware->prepend(\App\Http\Middleware\JWTAuthMiddleware::class);
//     })
//     ->withRouting(
//         web: __DIR__.'/../routes/web.php',
//         commands: __DIR__.'/../routes/console.php',
//         health: '/up',
//     )
//     ->create();
