<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;




Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth');


Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);


Route::get('/login',[SessionController::class, 'create'])->name('login');

Route::post('/login',[SessionController::class, 'store']);

Route::post('/logout',[SessionController::class, 'destroy']);

//to show all products from all users 
Route::get('/all-products',[ProductController::class, 'showAll']);
//to show all registered users 
Route::get('/all-users',[RegisteredUserController::class, 'showAll']);

//to delete a user from admin view 
Route::delete('/all-users/{user}',[RegisteredUserController::class, 'destroy']);

//to delete a product from admin view or user view . 
Route::delete('/products/{product}',[ProductController::class, 'destroy']);

Route::delete('/categories/{category}',[CategoryController::class, 'destroy']);
Route::get('/categories/{category}/edit',[CategoryController::class, 'edit']);

Route::patch('/categories/{category}',[CategoryController::class, 'update']);


Route::get('/categories/create', [CategoryController::class, 'create'])
->middleware('admin')
->middleware('auth');

//persist the created category 
Route::post('/categories', [CategoryController::class, 'store'])
->middleware('admin')
->middleware('auth'); 

Route::get('/categories/{category}', [CategoryController::class, 'show'])
->middleware('admin')
->middleware('auth'); 

Route::get('/products', [ProductController::class, 'index'])->middleware('auth');

Route::get('/products/create', [ProductController::class, 'create'])
->middleware('auth');

Route::get('/products/{product}', [ProductController::class, 'show'])
->middleware('auth');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
->middleware('auth');

Route::post('/products', [ProductController::class, 'store'])
->middleware('auth');

Route::patch('/products/{product}', [ProductController::class, 'update'])
->middleware('auth');

Route::get('/products/{product}', [ProductController::class, 'show'])
->middleware('auth');





