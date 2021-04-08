<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/pd', function () {
    return view('professional');
});

Route::get('/interviewtips', function () {
    return view('interviewtips');
});

Route::get('/resumestrategies', function () {
    return view('resume');
});

Route::get('/goalsetting', function () {
    return view('goalsetting');
});

Route::view('/mental-health', 'mentalhealth');

Route::view('/feedback', 'feedback');

Auth::routes();

// ROUTES TO LOGIN PAGE IF NOT LOGGED IN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
