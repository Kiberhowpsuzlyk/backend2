<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
require __DIR__.'/auth.php';

Route::get('', [HomeController::class, 'index'])->name('home');

Route::controller(ContactController::class)
    ->middleware('auth')
    ->prefix('contacts')
    ->name('contacts.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('', 'store')->name('store');
    });

Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
    });

Route::controller(BrandController::class)
    ->prefix('brands')
    ->name('brands.')
    ->group(function () {
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
    });





