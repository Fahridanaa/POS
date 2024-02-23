<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SalesPageController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/category/{product}', [CategoryController::class, 'show']);
Route::get('/user/{id}/name/{name}', [UserProfileController::class, 'show']);
Route::get('/transaction', [SalesPageController::class, 'show']);
