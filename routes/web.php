<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

//Route::resource('dashboard', 'DashboardController');
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/login',[AuthController::class,'index']);
Route::get('/logout',[AuthController::class,'logout']);
Route::post('/checklogin',[AuthController::class,'checklogin']);
