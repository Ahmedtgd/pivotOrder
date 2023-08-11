<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VehicleController;
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
/////////////////////////////////


////////////////////////////////


Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::resource('customers', CustomerController::class);
Route::resource('cards', CardController::class);
Route::resource('categories', CategoryController::class);
Route::resource('orders', OrderController::class);
Route::resource('vehicles', VehicleController::class);




