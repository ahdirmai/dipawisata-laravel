<?php


use App\Http\Controllers\Admin\Auth\AdminAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest.admin')->group(function () {
        Route::get('/login', [AdminAuthenticationController::class, 'login'])->name('login');

        Route::post('/authenticate', [AdminAuthenticationController::class, 'authenticate'])->name('authenticate');
    });


    Route::middleware('auth.admin')->group(function () {

        Route::post('/logout', [AdminAuthenticationController::class, 'logout'])->name('logout');
    });
});
