<?php

use App\Http\Controllers\Admin\FeatureController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách tính năng']], function () {
Route::get('/danh-sach-tinh-nang', [FeatureController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm tính năng']], function () {
Route::get('/tao-moi', [FeatureController::class, 'create'])->name('create');
Route::post('/tao-moi', [FeatureController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa tính năng']], function () {
Route::get('/chinh-sua/{feature}', [FeatureController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{feature}', [FeatureController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa tính năng']], function () {
Route::delete('/xoa/{feature}', [FeatureController::class, 'destroy'])->name('destroy');
});
