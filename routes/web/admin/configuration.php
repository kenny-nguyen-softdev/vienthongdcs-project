<?php

use App\Http\Controllers\Admin\ConfigurationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách cấu hình']], function () {
    Route::get('/danh-sach-cau-hinh', [ConfigurationController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm cấu hình']], function () {
    Route::get('/tao-moi', [ConfigurationController::class, 'create'])->name('create');
    Route::post('/tao-moi', [ConfigurationController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa cấu hình']], function () {
    Route::get('/chinh-sua/{configuration}', [ConfigurationController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{configuration}', [ConfigurationController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa cấu hình']], function () {
    Route::delete('/xoa/{configuration}', [ConfigurationController::class, 'destroy'])->name('destroy');
});
