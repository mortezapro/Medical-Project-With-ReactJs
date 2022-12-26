<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::group(["prefix"=>"v1"], function(){
    // RestFul EndPoint
    Route::apiResource('/category', CategoryController::class);
    Route::apiResource('/post', PostController::class);
    Route::apiResource('/page', PageController::class);
    Route::apiResource('/page', MenuController::class);

    // Application EndPoint
    Route::get('/popular-swiper', [PostController::class,"popularSwiper"]);
    Route::get('/highlight', [PostController::class,"highlight"]);

    // Doctors route
    Route::apiResource('/doctor', DoctorController::class);

});
