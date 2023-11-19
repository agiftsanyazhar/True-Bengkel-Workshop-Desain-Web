<?php

use App\Http\Controllers\Admin\{
    DashboardController,
};
use Illuminate\Support\Facades\Route;

Route::prefix('master')->name('master')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/products', [DashboardController::class, 'products'])->name('products');
    Route::get('/customer-service', [DashboardController::class, 'customerService'])->name('customer-service');
    Route::get('/gallery', [DashboardController::class, 'gallery'])->name('gallery');
});
