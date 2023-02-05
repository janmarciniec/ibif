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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adminPanel', [App\Http\Controllers\AdminPanelController::class, 'index'])->name('adminPanel.index')->middleware(['auth','verified']);
Route::get('/message/create', [App\Http\Controllers\MessageController::class, 'create'])->name('message.create')->middleware(['auth','verified']);
Route::post('/message', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');
