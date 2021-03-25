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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'events'])->name('index')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'events'])->name('home')->middleware('auth');
Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events')->middleware('auth');
Route::Post('/ticket/{id}', [App\Http\Controllers\HomeController::class, 'tickets'])->name('tickets')->middleware('auth');
