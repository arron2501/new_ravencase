<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserRegistrationMail;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/products/{product}', [App\Http\Controllers\ProductsController::class, 'show']);

Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
