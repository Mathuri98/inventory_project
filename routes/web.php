<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->group(function () {
  Route::get('/categories', [CategoryController::class, 'index']);
  Route::get('/categories/create', [CategoryController::class, 'create']);
  Route::post('/categories', [CategoryController::class, 'store']);
  Route::get('/categories/{category}', [CategoryController::class, 'show']);
  Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
  Route::patch('/categories/{category}', [CategoryController::class, 'update']);
  Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
  //to show all products from all users 
  Route::get('/all-products', [ProductController::class, 'showAll']);

  //to show all registered users 
  Route::get('/all-users', [RegisteredUserController::class, 'showAll']);
  //to delete a user from admin view 
  Route::delete('/all-users/{user}', [RegisteredUserController::class, 'destroy']);
});


Route::middleware(['auth'])->group(function () {
  //to delete a product from admin view or user view . 
  Route::delete('/products/{product}', [ProductController::class, 'destroy']);
 
  Route::post('/logout', [SessionController::class, 'destroy']);
  Route::get('/products', [ProductController::class, 'index']);
  Route::get('/products/create', [ProductController::class, 'create']);
  Route::get('/products/{product}', [ProductController::class, 'show']);
  Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
  Route::post('/products', [ProductController::class, 'store']);
  Route::patch('/products/{product}', [ProductController::class, 'update']);
  Route::get('/products/{product}', [ProductController::class, 'show']);
});



//only guest can go back to the login back ..... once signed in, clicking back button should not display login page. 
Route::middleware(['guest'])->group(function () {
  Route::get('/login', [SessionController::class, 'create'])->name('login');

  Route::post('/login', [SessionController::class, 'store']);

   Route::get('/register', [RegisteredUserController::class, 'create']);
  Route::post('/register', [RegisteredUserController::class, 'store']);
});
