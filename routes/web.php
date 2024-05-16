<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;
Route::get('/',[HomeController::class,'index'])->name ('site.home');
Route::get('san-pham',[ProductController::class,'index'])->name ('site.product');
Route::get('chi-tiet-sp/{slug}',[ProductController::class,'product_detail'])->name ('site.product_detail');
Route::get('lien-he',[ContactController::class,'index'])->name ('site.contact');
