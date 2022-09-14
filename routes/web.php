<?php

use App\Http\Controllers\home;
use App\Http\Controllers\register;
use App\Http\Controllers\login;
use App\Http\Controllers\Dashboard;
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

Route::get('/', [Home::class, 'home'])->name('home');

Route::match(['get', 'post'], '/register', [Register::class, 'index'])->name('register');
Route::match(['get', 'post'], '/login', [Login::class, 'index'])->name('login');
Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
Route::get('logout', [Dashboard::class, 'logout'])->name('logout');