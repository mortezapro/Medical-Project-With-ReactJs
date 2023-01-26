<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["as"=>"front."],function (){
    //test
    Route::post("/shop",[ProductController::class,"filter"])->name("shop.filter");
    Route::get("/category/{slug}",[CategoryController::class,"show"])->name("category.show");
});


