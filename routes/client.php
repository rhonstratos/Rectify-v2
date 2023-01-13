<?php
use App\Http\Controllers\Client as Base;

Route::middleware(['auth'])->group(function () {
    Route::resource('home', Base\HomeController::class);
});

Route::middleware(['guest'])->group(function () {

});
