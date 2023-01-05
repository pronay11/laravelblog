<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\FrontController;


// Route::get('/', function () {
//     return view('welcome');
// });


// Category Route
Route::group(['prefix'=>'/category'],function () {
    Route::get('/index', [CategoryController::class, 'index'])->name('index');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/show', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
});


// Tag Route
Route::group(['prefix'=>'/tag'],function () {
    Route::get('/index', [TagController::class, 'index'])->name('tag.index');
    Route::post('/store', [TagController::class, 'store'])->name('tag.store');
    Route::get('/show', [TagController::class, 'show'])->name('tag.show');
    Route::get('/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
    Route::post('/update/{id}', [TagController::class, 'update'])->name('tag.update');
    Route::get('/delete/{id}', [TagController::class, 'delete'])->name('tag.delete');
});


// Post Route
Route::group(['prefix'=>'/post'],function () {
    Route::get('/index', [PostController::class, 'index'])->name('post.index');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/show', [PostController::class, 'show'])->name('post.show');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/update/{id}', [PostController::class, 'update'])->name('post.update');
    Route::get('/delete/{id}', [PostController::class, 'delete'])->name('post.delete');
    Route::get('/find', [PostController::class, 'find'])->name('post.find');

});


// frontend blog page
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/blogdetail', [FrontController::class, 'blogdetail'])->name('front.blogdetail');

