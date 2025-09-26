<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/resume', [UserController::class, 'resume'])->name('resume');
Route::get('/service', [UserController::class, 'service'])->name('service');
Route::get('/portfolio', [UserController::class, 'portfolio'])->name('portfolio');
