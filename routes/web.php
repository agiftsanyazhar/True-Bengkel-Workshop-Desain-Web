<?php

use App\Http\Controllers\LandingPageController;
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

Route::prefix('')->name('landing-page.')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('index');
    // Route::get('/products', [LandingPageController::class, 'products'])->name('products');
    // Route::get('/customer-service', [LandingPageController::class, 'customerService'])->name('customer-service');
    Route::get('/gallery', [LandingPageController::class, 'gallery'])->name('gallery');
});
