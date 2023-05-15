<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KfoodController;
use App\Http\Controllers\FoodController;

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

Route::get('/', [KfoodController::class, 'index']);

Route::get('/menu', [KfoodController::class, 'menu']);

Route::get('/about', [KfoodController::class, 'about']);

Route::get('/book', [KfoodController::class, 'book']);

Route::get('/cart', [KfoodController::class, 'cart']);

Route::get('/food', [FoodController::class, 'index']);

