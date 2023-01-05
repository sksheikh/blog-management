<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/blog-details/{id}',[FrontController::class,'blogDetails'])->name('blog.details');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('/blogs',BlogController::class);
});
