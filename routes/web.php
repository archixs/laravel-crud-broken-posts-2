<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('index');
Route::get('posts/create', [PostController::class, 'create'])->name('create');
Route::post('posts', [PostController::class, 'store'])->name('store');
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('edit');
Route::put('posts/{id}/update', [PostController::class, 'update'])->name('update');
Route::delete('posts/{id}/destroy', [PostController::class, 'destroy'])->name('destroy');
Route::get('posts/{id}', [PostController::class, 'show'])->name('show');
