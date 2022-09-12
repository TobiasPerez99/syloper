<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchPostController;

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

Route::get('/', [PostController::class, 'index'])->name('home');


Route::post('send-form', [ContactController::class , 'send'])->name('sendEmail');
Route::get('contact', [ContactController::class, 'form'])->name('contact.form');



Route::resource('posts', PostController::class)->names('post');

Route::post('/search', [SearchPostController::class , '__invoke'])->name('front.search');

Auth::routes();

Route::get('/home', [PostController::class, 'index'])->name('home');
