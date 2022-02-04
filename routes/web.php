<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/', [PostController\Dashboard::class, 'index'])->name('post.dashboard');

Route::get('/post/create', [PostController\Create::class, 'index']);
Route::post('/post/create', [PostController\Create::class, 'store'])->name('post.create');

Route::get('/post/update/{post}',[PostController\Update::class, 'index']);
Route::post('/post/update/{post}',[PostController\Update::class, 'update'])->name('post.update');

Route::post('/post/delete/{post}',[PostController\Delete::class, 'destory'])->name('post.delete');