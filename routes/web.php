<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UsersController;

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

//show single job
Route::get('/jobs/{job_id}', [JobsController::class,'show_single_job'] );


//view job creation from
Route::get('/create-job', [JobsController::class,'create_job'] );

//store new jobs
Route::post('/jobs-process',[JobsController::class,'store_job'] )->middleware('auth');


Route::get('/contact', function () {
    return view('users.contact');
});

Route::get('/register', [UsersController::class,'register'] )->middleware('guest');;

Route::post('/create-user',[UsersController::class,'store_user'] );

Route::get('/login',[UsersController::class,'login'] )->middleware('guest');

Route::post('/logger',[UsersController::class,'logger'] );

Route::get('/logout',[UsersController::class,'logout'] )->middleware('auth');




