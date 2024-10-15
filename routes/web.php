<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCommerceController;

Route::get('/', [MyCommerceController::class,'index'])->name('home');
Route::get('/product-categorey', [MyCommerceController::class,'category'])->name('product-categorey');
Route::get('/product-detail', [MyCommerceController::class,'detail'])->name('product-detail');