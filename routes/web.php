<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');

Route::post('/posts/create',[PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}/view',[PostController::class, 'view'])->name('posts.view');

Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');

Route::post('/posts/{post}/edit',[PostController::class, 'update'])->name('posts.update');

// Route::get('/posts/{post}',[PostController::class, 'view'])->name('posts.view');

Route::get('/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');
