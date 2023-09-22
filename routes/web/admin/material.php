<?php

use App\Http\Controllers\Admin\MaterialController;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-nguyen-lieu-cua-san-pham', [MaterialController::class, 'index'])->name('index');

Route::get('/tao-moi', [MaterialController::class, 'create'])->name('create');
Route::post('/tao-moi', [MaterialController::class, 'store'])->name('store');


Route::get('/chinh-sua/{material}', [MaterialController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{material}', [MaterialController::class, 'update'])->name('update');

Route::delete('/xoa/{material}', [MaterialController::class, 'destroy'])->name('destroy');
