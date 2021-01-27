<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Auth::routes();
Route::get('/', [BlogController::class, 'index'])->name('welcome');
Route::get('/content/{slug}', [BlogController::class, 'isiPost'])->name('blog.isi');
Route::get('/list-content', [BlogController::class, 'listPost'])->name('blog.list-post');
Route::get('/list-category/{category}', [BlogController::class, 'listCategory'])->name('blog.category');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagController::class);
    Route::get('/post/trash', [PostController::class, 'viewTrash'])->name('post.trash');
    Route::get('/post/restore/{id}', [PostController::class, 'restore'])->name('post.restore');
    Route::delete('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');
    Route::resource('/post', PostController::class);
    Route::resource('/user', UserController::class);
});
