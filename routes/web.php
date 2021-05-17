<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::group([], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::post('/ajax', '\App\Http\Controllers\AjaxController@post');

Route::resource("product", ProductController::class)->middleware("auth");

Route::resource("order", OrderController::class)->middleware("auth");
