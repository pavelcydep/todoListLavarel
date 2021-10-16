<?php

use Illuminate\Support\Facades\Route;
use  App\Models\Task;
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





Route::get('/','App\Http\Controllers\TaskController@getTasks')->name('tasks.index');
Route::post('/store','App\Http\Controllers\TaskController@store')->name('tasks.store');
Route::get('/store','App\Http\Controllers\TaskController@create')->name('tasks.create');
Route::delete('/task/{task}','App\Http\Controllers\TaskController@delete')->name('tasks.delete');
Route::get('/update/{id}','App\Http\Controllers\TaskController@update')->name('tasks.update');
Route::put('/storeUpdate/{id}','App\Http\Controllers\TaskController@storeUpdate')->name('tasks.storeUpdate');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
