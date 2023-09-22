<?php

use App\Http\Controllers\Admin\OriginController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách xuất xứ']], function () {
    Route::get('/danh-sach-xuat-xu', [OriginController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm xuất xứ']], function () {
    Route::get('/tao-moi', [OriginController::class, 'create'])->name('create');
    Route::post('/tao-moi', [OriginController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa xuất xứ']], function () {
    Route::get('/chinh-sua/{origin}', [OriginController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{origin}', [OriginController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa xuất xứ']], function () {
    Route::delete('/xoa/{origin}', [OriginController::class, 'destroy'])->name('destroy');
});