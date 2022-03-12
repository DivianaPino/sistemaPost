<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
use App\Http\Controllers\MyPostController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\CommentController; 
use App\Http\Controllers\CommentPostController;
use App\Http\Controllers\MycommentController;
use App\Http\Controllers\DatosuserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/users', UserController::class);
Route::resource('/post', PostController::class);
Route::resource('/myPosts', MyPostController::class);
Route::resource('/comments', CommentController::class);
Route::resource('/commentPost', CommentPostController::class);
Route::get('/commentPost/{id}/create', [CommentPostController::class, 'create'])->name('commentPost.create');
Route::resource('/myComments', MycommentController::class);
Route::resource('/datosProfile', DatosuserController::class);

Route::middleware(['auth:sanctum', 'verified'])
   ->get('/dashboard', [PostController::class, 'dashboard'])
   ->name('dashboard');
