<?php

use App\Http\Controllers\Admin\SubMenuController;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-menu-phu', [SubMenuController::class, 'index'])->name('index');

Route::get('/tao-moi', [SubMenuController::class, 'create'])->name('create');
Route::post('/tao-moi', [SubMenuController::class, 'store'])->name('store');

Route::get('/chinh-sua/{subMenu}', [SubMenuController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{subMenu}', [SubMenuController::class, 'update'])->name('update');

Route::delete('/xoa/{subMenu}', [SubMenuController::class, 'destroy'])->name('destroy');