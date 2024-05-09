<?php

use App\Jobs\ReconcileAccount;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): string {
    ReconcileAccount::dispatch();

    return "Finished";
});
