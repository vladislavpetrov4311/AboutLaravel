<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Post' , 'middleware' => 'post'] , function() {

    Route::get('/post', IndexController::class)->name('post.index'); // Придаём название route
    Route::get('/post/create', SetDataController::class);
    Route::get('/post/update', UpdateDataController::class);
    Route::get('/post/delete', DeleteDataController::class);
    Route::get('/post/restore', RestoreDataController::class);
    Route::get('/post/firstOrCreate', FirstOrCreateController::class);
    Route::get('/post/updateOrCreate', UpdateOrCreateController::class);
    Route::post('post' , StoreController::class)->name('post.store');
    Route::patch('/post/{post}' , UpdateController::class)->name('post.update');
    Route::delete('/post/{id}' , DestroyController::class)->name('post.destroy');
    Route::get('/post/posts_user' , GetDataController::class);
    Route::get('/post/user' , UserPostController::class);
    Route::get('/post/Alluser' , PostUserController::class);
    Route::get('/postAll' , GetAllController::class);
    Route::get('/transaction' , TransactionController::class);
    Route::get('/post/getClearData' , GetClearDataController::class);
    Route::patch('/post/DTO/{post}' , DataDTOController::class);

});
