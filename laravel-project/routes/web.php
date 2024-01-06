<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostsController::class, 'index'])->name('top');
Route::resource('posts', PostsController::class)->only(['create', 'store']);
Route::resource('posts', PostsController::class)->only(['create', 'store', 'show']);
Route::resource('comments', CommentsController::class)->only(['store']);
Route::resource('posts', PostsController::class)->only(['create', 'store', 'show', 'edit', 'update']);
Route::resource('posts', PostsController::class)->only(['create', 'store', 'show', 'edit', 'update', 'destroy']);
