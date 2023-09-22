<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách bài viết']], function () {
Route::get('/danh-sach-bai-viet', [PostController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm bài viết']], function () {
Route::get('/tao-moi', [PostController::class, 'create'])->name('create');
Route::post('/tao-moi', [PostController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa bài viết']], function () {
Route::get('/chinh-sua/{post}', [PostController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{post}', [PostController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa bài viết']], function () {
Route::delete('/xoa/{post}', [PostController::class, 'destroy'])->name('destroy');
});
