<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách danh mục bài viết']], function () {
Route::get('/danh-sach-danh-muc-bai-viet', [BlogController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm danh mục bài viết']], function () {
Route::get('/tao-moi', [BlogController::class, 'create'])->name('create');
Route::post('/tao-moi', [BlogController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa danh mục bài viết']], function () {
Route::get('/chinh-sua/{blog}', [BlogController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{blog}', [BlogController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa danh mục bài viết']], function () {
Route::delete('/xoa/{blog}', [BlogController::class, 'destroy'])->name('destroy');
});
