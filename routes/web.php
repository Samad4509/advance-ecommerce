<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcomarceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [EcomarceController::class,'index'])->name('home');
Route::get('/products', [EcomarceController::class,'products'])->name('products');
Route::get('/product-details', [EcomarceController::class,'productDetails'])->name('product.details');
Route::get('/product-card', [EcomarceController::class,'productCard'])->name('product.card');
Route::get('/check-out', [EcomarceController::class,'checkout'])->name('checkout');
Route::get('/user-login', [EcomarceController::class,'userLogin'])->name('user.login');
Route::get('/user-register', [EcomarceController::class,'UserRegister'])->name('user.register');
Route::get('/user-account', [EcomarceController::class,'UserAccount'])->name('user.account');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/category-add',[CategoryController::class,'index'])->name('category.add');
    Route::post('/category-new',[CategoryController::class,'create'])->name('category.create');
    Route::get('/category-manage',[CategoryController::class,'manage'])->name('category.manage');
    Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category.update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category.delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
});
