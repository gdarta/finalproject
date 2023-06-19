<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//All posts
Route::redirect('/', 'posts');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);

//Create a new post
Route::get('/create', [App\Http\Controllers\PostController::class, 'create']);

//Single post
Route::get('/{id}', [App\Http\Controllers\PostController::class, 'show']);

//Store post
Route::post('/store', [App\Http\Controllers\PostController::class, 'store']);