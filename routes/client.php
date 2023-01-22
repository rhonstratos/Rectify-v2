<?php
use App\Http\Controllers\Client as Base;
use App\Http\Controllers as Main;
use Inertia\Inertia;

Route::middleware(['auth.client'])->group(function () {
    Route::get('/profile', [Base\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Base\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Base\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['guest'])->group(function () {

});
