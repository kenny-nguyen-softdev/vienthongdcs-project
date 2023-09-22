<?php

use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/{productSlug}.html', [ProductController::class, 'show'])->name('show');

Route::get('/san-pham-da-xem', [ProductController::class, 'passsedProduct'])->name('passsedProduct');