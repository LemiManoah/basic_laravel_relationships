<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;




Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', App\Http\Controllers\PostController::class);
Route::get('/twoposts/{parameter1}/{parameter2}', 'App\Http\Controllers\PostController\@twoposts')->name('route.link');



Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);

