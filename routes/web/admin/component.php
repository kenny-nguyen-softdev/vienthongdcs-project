<?php

use App\Http\Controllers\Admin\ComponentController;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-thanh-phan-nguyen-lieu', [ComponentController::class, 'index'])->name('index');

Route::get('/tao-moi', [ComponentController::class, 'create'])->name('create');
Route::post('/tao-moi', [ComponentController::class, 'store'])->name('store');


Route::get('/chinh-sua/{component}', [ComponentController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{component}', [ComponentController::class, 'update'])->name('update');

Route::delete('/xoa/{component}', [ComponentController::class, 'destroy'])->name('destroy');