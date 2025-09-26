<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::get('/resume', [App\Http\Controllers\UserController::class, 'resume'])->name('resume');
Route::get('/service', z[App\Http\Controllers\UserController::class, 'service'])->name('service');
Route::get('/portfolio', [App\Http\Controllers\UserController::class, 'portfolio'])->name('portfolio');
