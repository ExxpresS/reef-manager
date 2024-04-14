<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TanksController;
use App\Http\Controllers\TestsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tanks', [TanksController::class, 'index'])->name('tank.index');

    Route::prefix('api')->group(function () {
        Route::get('/tests', [TestsController::class, 'index']);

        Route::get('/tanks', [TanksController::class, 'update'])->name('tank.update');
        Route::post('/tanks', [TanksController::class, 'store'])->name('tank.store');
        Route::get('/tanks', [TanksController::class, 'destroy'])->name('tank.destroy');
        Route::get('/tanks', [TanksController::class, 'show'])->name('tank.show');
    });

});

require __DIR__.'/auth.php';
