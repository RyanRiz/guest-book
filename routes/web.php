<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\FormController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GuestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResidenceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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

// User Form
Route::get('/', [FormController::class, 'index'])->name('form.index');
Route::post('/save', [FormController::class, 'store'])->name('form.store');

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    // Auth
    Route::group(['middleware' => ['guest']], function() {

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });

    Route::group(['middleware' => ['auth']], function() {
        // Admin - Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');

        // Admin - Guest
        Route::get('/dashboard/guest', [GuestController::class, 'index'])->name('guest.index');
        Route::get('/dashboard/guest/export', [GuestController::class, 'export'])->name('guest.export');
        Route::delete('/dashboard/guest/{id}/destroy', [GuestController::class, 'destroy'])->name('guest.destroy');

        // Admin - User
        // Route::get('/dashboard/user', [UserController::class, 'index'])->name('user.index');
        // Route::get('/dashboard/user/create', [UserController::class, 'create'])->name('user.create');
        // Route::post('/dashboard/user/create', [UserController::class, 'store'])->name('user.store');

        // Admin - Residence
        Route::get('/dashboard/residence', [ResidenceController::class, 'index'])->name('residence.index');
        Route::get('/dashboard/residence/create', [ResidenceController::class, 'create'])->name('residence.create');
        Route::post('/dashboard/residence/create', [ResidenceController::class, 'store'])->name('residence.store');
        Route::get('/dashboard/residence/{id}/edit', [ResidenceController::class, 'edit'])->name('residence.edit');
        Route::put('/dashboard/residence/{id}/update', [ResidenceController::class, 'update'])->name('residence.update');
        Route::delete('/dashboard/residence/{id}/destroy', [ResidenceController::class, 'destroy'])->name('residence.destroy');
    });
});
