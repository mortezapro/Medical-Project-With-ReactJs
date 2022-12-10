<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;


Route::group(['prefix'=>'v1'], function(){
    Route::resource('/category', CategoryController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/page', PageController::class);
    Route::resource('/page', MenuController::class);
    Route::get('/popular-swiper', [PostController::class,"popularSwiper"]);
});
