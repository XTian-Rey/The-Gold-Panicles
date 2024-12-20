<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login1', function () {
    return view('login1'); 
});

Route::get('/clientlogin', function () {
    return view('clientlogin'); 
});

Route::get('/third-party login', function () {
    return view('third-party login'); 
});

use App\Http\Controllers\Auth\GoogleController;

Route::get('login/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
