<?php

use App\Http\Middleware\Data;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\Lang;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('is_admin', [
            IsAdmin::class,
        ]);
        $middleware->appendToGroup('data', [
            Data::class,
        ]);
        $middleware->appendToGroup('lang', [
            Lang::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
