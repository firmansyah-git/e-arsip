<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('pages.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);  
Route::post('/logout', [AuthController::class, 'logout']);  

Route::resource('/arsip', SuratController::class)->name('*', 'arsip');
Route::resource('/user', UserController::class)->name('user', '*');
Route::get('/user/search', [UserController::class, 'search'])->name('user');

Route::get('/account', function () {
    return view('pages.account');
});



