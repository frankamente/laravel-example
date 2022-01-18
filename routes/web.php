<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home')->name('home');
Route::view('acerca-de', 'about')->name('about');

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('store-form', [BlogController::class, 'save']);
Route::delete('blog/{post:id}', [BlogController::class, 'delete'])->name('blog.delete');


Route::get('photo', [PhotoController::class, 'index'])->name('photo.index');
Route::get('photo/{photo:id}', [PhotoController::class, 'detail'])->name('photo.detail');
