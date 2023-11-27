<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesDetailController;
use App\Http\Controllers\UsersController;
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


Route::get("/", HomeController::class)->name('home');

Route::get("/categories", [CategoriesController::class, 'index'])->name('categories');
Route::patch("/categories/{id}", [CategoriesController::class, 'update'])->name('categories.update');
Route::post("/categories/create", [CategoriesController::class, 'create'])->name('categories.create');
Route::delete("/categories/{id}", [CategoriesController::class, 'delete'])->name('categories.delete');



Route::get('/products', [ProductsController::class, 'index'])->name('products');


Route::get('/users', [UsersController::class, 'index'])->name('users');

Route::get('/sales', [SalesController::class, 'index'])->name('sales');

Route::get('/sales-detail', [SalesDetailController::class, 'index'])->name('sales-detail');
