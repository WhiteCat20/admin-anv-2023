<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

//Redirecting the localhost:8000/ to /admin, delete code below to disable it
//------------------------------------------------------------------------------
Route::get('/', function () {
    return redirect('/admin');
});
//------------------------------------------------------------------------------

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name(
        'dashboard.index'
    );
    Route::get('/abstrak', [DashboardController::class, 'abstrak'])->name(
        'dashboard.abstrak'
    );
    Route::get('/paper', [DashboardController::class, 'paper'])->name(
        'dashboard.paper'
    );
    Route::get('/ppt', [DashboardController::class, 'ppt'])->name(
        'dashboard.ppt'
    );
    Route::get('/author-data', [
        DashboardController::class,
        'authorData',
    ])->name('dashboard.author-data');
    Route::get('/payment', [DashboardController::class, 'payment'])->name(
        'dashboard.payment'
    );
    Route::get('/sponsorship', [
        DashboardController::class,
        'sponsorship',
    ])->name('dashboard.sponsorship');
});
