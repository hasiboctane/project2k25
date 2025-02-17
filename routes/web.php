<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sample', function(){
    return view('sample');
});

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/contact-us',[ContactController::class, 'index'])->name('contact.index');