<?php
use App\Http\Controllers\Business as Base;

Route::middleware(['auth.business'])->group(function () {
    Route::resource('dashboard', Base\DashboardController::class);
    Route::get('/profile', [Base\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Base\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Base\ProfileController::class, 'destroy'])->name('profile.destroy');
});
