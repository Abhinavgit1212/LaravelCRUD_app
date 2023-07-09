<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;

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
    return view('insert');
});

Route::get('/search',[SearchController::class, 'search'])->name('web.search');

Route::post('/store',[PostController::class,'store']);

Route::get('/show',[PostController::class,'show']);

Route::get('/delete/{id}',[PostController::class,'destroy']);

Route::get('/edit/{id}',[PostController::class,'edit']);

Route::put('/update/{id}',[PostController::class,'update'])->name('product.update');




