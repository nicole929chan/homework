<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemsController;
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

Route::get('/', [HomeController::class, 'action'])->name('home.action');

Route::get('items', [ItemsController::class, 'index'])->name('item.index');
Route::get('items/create', [ItemsController::class, 'create'])->name('item.create');
Route::post('items', [ItemsController::class, 'store'])->name('item.store');
