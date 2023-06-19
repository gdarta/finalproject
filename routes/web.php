<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//Routes for viewing all posts
Route::redirect('/', 'posts');
Route::resource('/posts', PostController::class);

//Routes for viewing a single post
Route::get('/{id}', [App\Http\Controllers\PostController::class, 'show']);
