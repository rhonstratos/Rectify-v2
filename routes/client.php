<?php
use App\Http\Controllers\Client as Base;
use App\Http\Controllers as Main;
use Inertia\Inertia;

Route::middleware(['auth.client'])->group(function () {

});

Route::middleware(['guest'])->group(function () {

});
