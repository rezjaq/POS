<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage'])->name('products.food-beverage');
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth'])->name('products.beauty-health');
    Route::get('/home-care', [ProductsController::class, 'homeCare'])->name('products.home-care');
    Route::get('/baby-kid', [ProductsController::class, 'babyKid'])->name('products.baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');

// Route::get('/', function () {
//     return view('welcome');
// });
