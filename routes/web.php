<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class,'all_data'] );

Route::get('/candidates', function () {
    return view('users.candidates');
});

Route::get('/jobs', function () {
    return view('jobs.jobs-full-browse');
});

Route::get('/jobs/{job-id}', function () {
    return view('jobs.job-single');
});


Route::get('/contact', function () {
    return view('users.contact');
});

Route::get('/create-job', function () {
    return view('users.create-job');
});

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/login', function () {
    return view('users.login');
});


