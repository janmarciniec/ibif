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
Route::get('/post/{lang}', [App\Http\Controllers\PostController::class, 'index'])->name('post.index')->middleware(['auth','verified', 'lang']);
Route::get('//post/create/{lang}', [App\Http\Controllers\PostController::class, 'create'])->name('post.create')->middleware(['auth','verified', 'lang']);
Route::post('/post/{lang}', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/adminPanel', [App\Http\Controllers\AdminPanelController::class, 'index'])->name('adminPanel.index')->middleware(['auth','verified']);
Route::delete('/post/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
Route::get('/message/create', [App\Http\Controllers\MessageController::class, 'create'])->name('message.create')->middleware(['auth','verified']);
Route::post('/message', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');
