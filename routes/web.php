<?php

use App\Http\Controllers as Base;
use App\Http\Controllers\Client as Client;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [Client\HomeController::class, 'index'])->name('main.index');
Route::resource('home', Base\HomeController::class);

Route::middleware('auth')->group(function () {

});

require __DIR__ . '/auth.php';
