<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchPostController;

Route::get('/', [HomeController::class, 'home'])->name('home');


// inicio Formulario contacto
Route::post('send-form', [ContactController::class , 'send'])->name('sendEmail');
Route::get('contact', [ContactController::class, 'form'])->name('contact.form');
// fin Formulario contacto

Route::group(['prefix'=>'dashboard'], function(){
    Route::get('/' , [DashboardController::class, 'show'])->name('dashboard.index');
    Route::resource('/menu', MenuController::class);
    Route::resource('/post', PostController::class);    
});

Route::resource('post', PostController::class)->names('post')->only('show');

Route::post('/search', [SearchPostController::class , 'search'])->name('front.search');

Auth::routes();