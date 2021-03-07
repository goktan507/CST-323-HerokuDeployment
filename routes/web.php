<?php

use Illuminate\Support\Facades\Route;


Auth::routes();


Route::get('/public', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');


    Route::middleware('auth')->group(function(){

        Route::get('/profile', [App\Http\Controllers\AdminsController::class, 'index'])->name('profile.index');

        Route::get('/profile/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

        Route::post('/profile/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    });

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
