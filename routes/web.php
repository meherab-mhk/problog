<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category-blog', [HomeController::class, 'category'])->name('category-blog');
Route::get('/blog-detail', [HomeController::class, 'detail'])->name('blog-detail');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/add/blog-category', [CategoryController::class, 'addCategory'])->name('add.blog-category');
    Route::post('/create/blog-category', [CategoryController::class, 'createCategory'])->name('create.blog-category');
    Route::get('/manage/blog-category', [CategoryController::class, 'manageCategory'])->name('manage.blog-category');

    Route::get('/add/blog', [BlogController::class, 'addBlog'])->name('add.blog');
    Route::post('/create/blog', [BlogController::class, 'createBlog'])->name('create.blog');
    Route::get('/manage/blog', [BlogController::class, 'manageBlog'])->name('manage.blog');
});
