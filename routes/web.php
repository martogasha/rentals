<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/gg', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/', [App\Http\Controllers\ClientController::class, 'index']);
Route::get('propertyD', [App\Http\Controllers\ClientController::class, 'propertyDetail']);
Route::get('shop', [App\Http\Controllers\ClientController::class, 'shop']);
//admin routes
Route::get('admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('property', [App\Http\Controllers\AdminController::class, 'property']);
Route::get('orders', [App\Http\Controllers\AdminController::class, 'orders']);
Route::get('addProperty', [App\Http\Controllers\AdminController::class, 'addProperty']);
Route::get('propertyDetail', [App\Http\Controllers\AdminController::class, 'propertyDetail']);
