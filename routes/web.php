<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocaleController;

//All posts
Route::redirect('/', 'posts.index');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

//Create a new post
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->middleware('auth')->name('posts.create');

//Manage listings
Route::get('/posts/manage', [App\Http\Controllers\PostController::class, 'manage'])->middleware('auth')->name('manage');

//Edit post
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->middleware('auth');

//Update post
Route::put('/posts/{id}/update', [App\Http\Controllers\PostController::class, 'update'])->middleware('auth');

//Store post
Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])->middleware('auth');

//Show register form
Route::get('/register', [App\Http\Controllers\UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->middleware('guest');

//Log user out
Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->middleware('auth')->name('logout');

//Show login form
Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');

//Authenticate/login user
Route::post('/users/authenticate', [App\Http\Controllers\UserController::class, 'auth'])->middleware('guest')->name('users.authenticate');

//Single post
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'show']);

//Delete post
Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->middleware('auth');

Route::get("locale/{lange}", [App\Http\Controllers\LocaleController::class, 'setLang']);