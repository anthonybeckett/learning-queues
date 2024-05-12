<?php

use App\Jobs\ReconcileAccount;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): string {
    ReconcileAccount::dispatch();

    return "Finished";
});

Route::get('/pipeline-example', function (): string {
    $pipeline = app(\Illuminate\Pipeline\Pipeline::class);

    $pipeline->send('hello world')
        ->through([
            function (string $string, Closure $next) {
                $string = ucwords($string);

                return $next($string);
            }
        ])
        ->then(function (string $string) {
            dump($string);
        });

    return 'Done';
});
