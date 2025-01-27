<?php

use App\Http\Controllers\Admin\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\TermAndCondition\TermAndConditionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware('isAdminLogin')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    })->name('welcome');

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin routes


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth.admin', 'role:admin'])->group(function () {

        // admin dashboard Controller
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
        });

        // admin term and condition Controller
        Route::prefix('term-and-condition')->name('term-and-condition.')->group(function () {
            Route::get('/', [TermAndConditionController::class, 'index'])->name('index');
            Route::PUT('/store', [TermAndConditionController::class, 'store'])->name('store');
        });
    });
});





require __DIR__ . '/admin-auth.php';



require __DIR__ . '/auth.php';
