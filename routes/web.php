<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KfoodController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomAuthController;

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

// Cart
Route::get('/cart', [KfoodController::class, 'cart']);
Route::get('/add-cart/{cart_id}/{page}', [KfoodController::class, 'add_or_edit_cart']);
Route::get('/delete-cart/{cart_id}', [KfoodController::class, 'delete_cart']);
Route::get('/edit-cart/{cart_id}', [KfoodController::class, 'edit_cart']);
Route::get('/delete-all-row-cart', [KfoodController::class, 'delete_all_row_cart']);

Route::get('/login-checkout', [CheckoutController::class, 'login_checkout']);


Route::get('/food', [FoodController::class, 'index']);


//
Route::get('/admins', [AdminController::class, 'index']);

Route::get('/dashboard', [AdminController::class, 'show_dashboard']);

Route::post('/admin-dashbroad', [AdminController::class, 'dashboard']);

Route::get('/logout', [AdminController::class, 'logout']);

// Category
Route::get('/all-category-product', [DanhMucController::class, 'all_category_product']);
Route::get('/add-category-product', [DanhMucController::class, 'add_category_product']);
Route::post('/save-category-product', [DanhMucController::class, 'save_category_product']);
Route::get('/edit-category-product/{category_id}', [DanhMucController::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_id}', [DanhMucController::class, 'delete_category_product']);
Route::post('/update-category-product/{category_id}', [DanhMucController::class, 'update_category_product']);


// Product
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);



Route::get('dashboard1', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');