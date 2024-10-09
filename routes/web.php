<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class , 'getData']);
Route::get('/post/create', [PostController::class, 'setData']);
Route::get('/post/update', [PostController::class, 'updateData']);