<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\TodolistController;

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

Route::get('/login',[LoginController::class,'index'])->name('login');
// Route::post('/login',[LoginController::class,'store']);

Route::get('/register',[RegisterController::class,'index'])->name('register');
// Route::post('/register',[RegisterController::class,'store']);

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/home',[TodolistController::class,'index'])->name('home');
Route::post('/todoStore',[TodolistController::class,'store'])->name('store');
Route::delete('/todo/{todolist:id}',[TodolistController::class,'destory'])->name('destory');

