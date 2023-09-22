<?php

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-bai-viet-ve-chung-toi', [AboutController::class, 'index'])->name('index');

Route::get('/tao-moi', [AboutController::class, 'create'])->name('create');
Route::post('/tao-moi', [AboutController::class, 'store'])->name('store');

Route::get('/chinh-sua/{about}', [AboutController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{about}', [AboutController::class, 'update'])->name('update');

Route::delete('/xoa/{about}', [AboutController::class, 'destroy'])->name('destroy');