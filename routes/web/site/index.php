<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\ConsultantController;

Route::get('/', [HomeController::class, 'index'])->name('home');



// Route::get('/tat-ca-san-pham.html', [ProductController::class, 'showAllProduct'])->name('showAllProduct');