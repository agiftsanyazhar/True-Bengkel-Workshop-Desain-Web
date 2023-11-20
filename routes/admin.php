<?php

use App\Http\Controllers\Admin\{
    DashboardController,
};
use Illuminate\Support\Facades\Route;

Route::prefix('master')->name('master')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
