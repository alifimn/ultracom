<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserMobileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index']) -> name('dashboard');


Auth::routes(['register' => false]);

Route::get('products/{id}/gallery', [ProductController::class, 'gallery'])
    ->name('products.gallery');
Route::resource('products', ProductController::class);

Route::resource('product-galleries', ProductGalleryController::class);

Route::get('transactions/{id}/set-status', [TransactionController::class, 'setStatus'])
    ->name('transactions.status');
Route::resource('transactions', TransactionController::class);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::delete('/products/delete/{id}',[ProductController::class,'destroy'])->name('products.destroy');

Route::get('/service', [ServiceController::class,'index'])->name('service.index');

Route::delete('/services/delete/{id}',[ServiceController::class,'destroy'])->name('services.destroy');

Route::get('/services/{id}', [ServiceController::class,'show'])->name('services.show');

Route::get('services/{id}/set-status', [ServiceController::class, 'setStatus'])
    ->name('service.status');

Route::get('/user', [UserMobileController::class,'index'])->name('user.index');

Route::delete('/user/delete/{id}',[UserMobileController::class,'destroy'])->name('user.destroy');