<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Inventory;
use App\Http\Controllers\Login;
use App\Http\Controllers\Purchase;
use App\Http\Controllers\Sale;
use App\Http\Controllers\User_controller;
use App\Models\Sales;
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
})->middleware('auth');

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
Route::get('/inventory/destroy/{inventories}', [Inventory::class, 'destroy'])->middleware(['auth', 'super-admin']);
Route::get('/inventory/edit/{inventories}', [Inventory::class, 'edit'])->middleware('auth');
Route::post('/inventory/update/{inventories}', [Inventory::class, 'update'])->middleware('auth');
Route::get('/inventory/export/excel', [Inventory::class, 'export_excel']);

// user
Route::get('/users', [User_controller::class, 'index'])->middleware('auth');

// Sale
Route::get('/sales', [Sale::class, 'index'])->middleware('auth');

Route::get('/sales/{id}', [Sale::class, 'showw']);

// Purchase
Route::get('/purchases', [Purchase::class, 'index'])->middleware('auth');