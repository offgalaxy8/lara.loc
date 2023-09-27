<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\Posts\CommentController;

Route::view('/','welcome', [
    'name' => 'Sss'
]);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/blog',  [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');

Route::resource('posts/{post}/comments', CommentController::class);
