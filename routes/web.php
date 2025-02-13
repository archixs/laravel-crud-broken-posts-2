<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;    
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('posts', [PostController::class, 'index'])->name('index');
    Route::get('posts/create', [PostController::class, 'create'])->name('create');
    Route::post('posts', [PostController::class, 'store'])->name('store');
    Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('posts/{id}/update', [PostController::class, 'update'])->name('update');
    Route::delete('posts/{id}/destroy', [PostController::class, 'destroy'])->name('destroy');
    Route::get('posts/{id}', [PostController::class, 'show'])->name('show');
    });

require __DIR__.'/auth.php';
