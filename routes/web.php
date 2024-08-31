<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contact', 'contact');

Route::view('/about', 'about');

Route::resource('jobs', JobController::class)->middleware('auth');

Route::get('/register',[RegisterController::class, 'create']);
Route::post('/register',[RegisterController::class, 'store']);


Route::get('/login',[SessionController::class, 'create'])->name('login');
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);
