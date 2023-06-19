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

//Edit post
Route::get('/{id}/edit', [App\Http\Controllers\PostController::class, 'edit']);

//Update post
Route::put('/{id}/update', [App\Http\Controllers\PostController::class, 'update']);

//Store post
Route::post('/store', [App\Http\Controllers\PostController::class, 'store']);