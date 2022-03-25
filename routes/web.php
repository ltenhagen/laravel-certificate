<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.view');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])->name('sessions.create')->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->name('sessions.store')->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('sessions.destroy');
