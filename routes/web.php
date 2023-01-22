<?php

use App\Http\Controllers as Base;
use App\Http\Controllers\Client as Client;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [Client\HomeController::class, 'index'])->name('main.index');
Route::resource('home', Base\HomeController::class);
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', ])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Base\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Base\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Base\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
