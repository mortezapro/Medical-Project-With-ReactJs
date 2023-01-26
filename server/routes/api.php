<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryItemsController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ValueController;
use App\Http\Controllers\KeyController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
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

    // Brands route
    Route::apiResource('/brand', BrandController::class);

    // Products route
    Route::apiResource('/product', ProductController::class);

    // Product_details route
    Route::apiResource('/product_detail', ProductDetailController::class);

    // Keys route
    Route::apiResource('/key', KeyController::class);

    // Values route
    Route::apiResource('/value', ValueController::class);

    // Inventorys route
    Route::apiResource('/inventory', InventoryController::class);

    // Currencys route
    Route::apiResource('/currency', CurrencyController::class);


    // InventoryItemss route
    Route::apiResource('/inventoryItems', InventoryItemsController::class);

    // Categorys route
    Route::apiResource('/category', CategoryController::class);

});


Route::get("/post",function (){
    return \App\Models\PostModel::all();
});
Route::get("/post/cache",function (){
    return Cache::remember("post.index",60,function (){
        return \App\Models\PostModel::all();
    });
});
