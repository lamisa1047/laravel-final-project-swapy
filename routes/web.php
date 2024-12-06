<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Container\Attributes\Auth;

Route::middleware("auth")->group(function() {
    Route::match(['get', 'post'], '/page/home', [PostController::class, 'home'],['posts' => Post::all()])->name('home');
});


Route::get('/', function () {
    return view('welcome', ['posts' => Post::all()]);
});
Route::post('/store', [PostController::class, 'filestore'])->name('store');
Route::get('/page/list', [PostController::class, 'showlist'])->name('list');
Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('post.delete');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/register', [AuthController::class, 'registerPost'])->name('register.post');
