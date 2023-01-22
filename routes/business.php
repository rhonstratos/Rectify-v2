<?php
use App\Http\Controllers\Business as Base;

Route::middleware(['auth.business'])->group(function () {
    Route::resource('dashboard', Base\DashboardController::class);
});
