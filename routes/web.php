<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    Mail::to('jeffre@laracasts.com')->send(
      new \App\Mail\JobPosted()
    );

    return 'done';
});

Route::view('/', 'home');

Route::view('/contact', 'contact');

Route::view('/about', 'about');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/jobs/jobs/{job}', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'jobs');
Route::patch('/jobs/{job}', [JobController::class, 'update']); //->middleware(['auth','can:edit-job,job'])
Route::delete('/jobs/{job}', [JobController::class, 'destroy']); // ->middleware(['auth', 'can:delete-job,job'])

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
