<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ProductController::class,'index']);
Route::post('/addtocart',[ProductController::class,'cart']);
Route::get('/product/{id}',[ProductController::class,'product']);
Route::view('/register','register');
Route::view('login','login');
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);