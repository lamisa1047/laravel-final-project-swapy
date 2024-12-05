<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome', ['posts' => Post::all()]);
});
Route::post('/store', [PostController::class, 'filestore'])->name('store');
Route::get('/page/list', [PostController::class, 'showlist'])->name('list');
Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('post.delete');