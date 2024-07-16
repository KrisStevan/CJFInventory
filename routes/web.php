<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColourController;
use App\Http\Controllers\KindController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SizesController;
use App\Http\Controllers\UsesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('colours', ColourController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/colours', [ColourController::class, 'index']);
Route::get('/colours/search', [ColourController::class, 'search'])->name('colours.search');
Route::get('/colours/delete/{id}', [ColourController::class, 'destroy']);
Route::put('/colours/edit/{id}', [ColourController::class, 'update'])->name('colours.update');

/////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('kinds', KindController::class);
Auth::routes();

Route::get('/kinds', [KindController::class, 'index']);
Route::get('/kinds/search', [KindController::class, 'search'])->name('kinds.search');
Route::put('/kinds/edit/{id}', [KindController::class, 'update'])->name('kinds.update');

/////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('materials', MaterialController::class);
Auth::routes();

Route::get('/materials', [MaterialController::class, 'index']);
Route::get('/materials/search', [MaterialController::class, 'search'])->name('materials.search');
Route::get('/materials/delete/{id}', [MaterialController::class, 'destroy']);
Route::put('/materials/edit/{id}', [MaterialController::class, 'update'])->name('materials.update');

/////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('sizes', SizesController::class);
Auth::routes();

Route::get('/sizes', [SizesController::class, 'index']);
Route::get('/sizes/search', [SizesController::class, 'search'])->name('sizes.search');
Route::get('/sizes/delete/{id}', [SizesController::class, 'destroy']);
Route::put('/sizes/edit/{id}', [SizesController::class, 'update'])->name('sizes.update');

/////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('uses', UsesController::class);
Auth::routes();

Route::get('/uses', [UsesController::class, 'index']);
Route::get('/uses/search', [UsesController::class, 'search'])->name('uses.search');
Route::get('/uses/delete/{id}', [UsesController::class, 'destroy']);
Route::put('/uses/edit/{id}', [UsesController::class, 'update'])->name('uses.update');

/////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/search/', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/delete/{id}', [ProductController::class, 'destroy']);
Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('products.update');

/////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('transactions', TransactionsController::class);
Auth::routes();

Route::get('/transactions', [TransactionsController::class, 'index']);
Route::get('/transactions/search', [TransactionsController::class, 'search'])->name('transactions.search');