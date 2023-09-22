<?php

use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-banner', [BannerController::class, 'index'])->name('index');

Route::get('/tao-moi', [BannerController::class, 'create'])->name('create');
Route::post('/tao-moi', [BannerController::class, 'store'])->name('store');


Route::get('/chinh-sua/{banner}', [BannerController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{banner}', [BannerController::class, 'update'])->name('update');

Route::delete('/xoa/{banner}', [BannerController::class, 'destroy'])->name('destroy');