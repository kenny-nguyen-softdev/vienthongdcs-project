<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/tim-kiem-san-pham', [HomeController::class, 'searchProduct'])->name('searchProduct');