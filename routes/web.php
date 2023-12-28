<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Inventory;
use App\Http\Controllers\Login;
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
    return view('welcome');
});

// Login
Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Login::class, 'store']);

Route::get('/logout', [Login::class, 'logout'])->middleware('auth');

// Dashboard backend
Route::get('/dashboard', [Dashboard::class, 'index'])->middleware('auth');

// Inventory
Route::get('/inventory', [Inventory::class, 'index'])->middleware('auth');
Route::get('/inventory/create', [Inventory::class, 'create'])->middleware('auth');
Route::post('/inventory/store', [Inventory::class, 'store'])->middleware('auth');
Route::get('/inventory/destroy/{inventories}', [Inventory::class, 'destroy'])->middleware('auth');