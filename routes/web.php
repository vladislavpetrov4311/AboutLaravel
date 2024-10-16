<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class , 'index'])->name('post.index'); // Придаём название route
Route::get('/post/create', [PostController::class, 'setData']);
Route::get('/post/update', [PostController::class, 'updateData']);
Route::get('/post/delete', [PostController::class, 'deleteData']);
Route::get('/post/restore', [PostController::class, 'restoreData']);
Route::get('/post/firstOrCreate', [PostController::class, 'first_or_create']);
Route::get('/post/updateOrCreate', [PostController::class, 'update_or_create']);

Route::post('post' , [PostController::class , 'store'])->name('post.store');

Route::patch('/post/{id}' , [PostController::class , 'update'])->name('post.update');
Route::delete('/post/{id}' , [PostController::class , 'destroy'])->name('post.destroy');