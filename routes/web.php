<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function (int $id) {

    $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    Job::create([
        'title' => request()->title,
        'salary' => request()->salary,
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
