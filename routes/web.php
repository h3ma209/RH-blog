<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [PostController::class, 'show'])->name('blog.show');
Route::get('/new', [PostController::class, 'create'])->name('blog.create');
Route::post('/blog', [PostController::class, 'store'])->name('blog.store');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');