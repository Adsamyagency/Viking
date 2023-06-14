<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WaterController;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\YachtController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [websiteController::class, 'website']);

Route::get('/dashboard', [dashboard::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Yacht
    Route::controller(YachtController::class)->group(function () {
        Route::get('dashboard/add-yacht', 'create');
        Route::get('dashboard/yacht/edit/{id}', 'edit');
        Route::delete('dashboard/yacht/delete/{id}', 'destroy');
        Route::post('dashboard/add-yacht', 'store');
        Route::post('dashboard/yacht/edit/{id}', 'update');
    });
    // Event
    Route::controller(EventController::class)->group(function () {
        Route::get('dashboard/add-event', 'create');
        Route::get('dashboard/event/edit/{id}', 'edit');
        Route::delete('dashboard/event/delete/{id}', 'destroy');
        Route::post('dashboard/add-event', 'store');
        Route::post('dashboard/event/edit/{id}', 'update');
    });
    // Water
    Route::controller(WaterController::class)->group(function () {
        Route::get('dashboard/add-water', 'create');
        Route::get('dashboard/water/edit/{id}', 'edit');
        Route::delete('dashboard/water/delete/{id}', 'destroy');
        Route::post('dashboard/add-water', 'store');
        Route::post('dashboard/water/edit/{id}', 'update');
    });

    //
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
