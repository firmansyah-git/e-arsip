<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArsipPribadiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisSuratController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsPimpinan;
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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);  
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');  

Route::resource('/arsip', SuratController::class)->middleware('auth');
Route::get('/download/{file}', [SuratController::class, 'download'])->middleware('auth');

Route::resource('/arsip', SuratController::class)->except(['index', 'show'])->middleware(IsAdmin::class);

Route::resource('/user', UserController::class)->except(['show', 'edit', 'update'])->middleware(IsAdmin::class);
Route::get('/user/search', [UserController::class, 'search'])->name('user');

Route::resource('/jenis_surat', JenisSuratController::class)->middleware(IsAdmin::class);

Route::resource('/arsip_pribadi', ArsipPribadiController::class)->middleware(IsPimpinan::class);

Route::get('/account/{account}', [AccountController::class, 'edit']);
Route::put('/account/{account}', [AccountController::class, 'update']);



