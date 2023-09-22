<?php

use App\Http\Controllers\Admin\HeaderPostController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách bài viết trên header']], function () {
Route::get('/danh-sach-bai-viet-header', [HeaderPostController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm bài viết trên header']], function () {
Route::get('/tao-moi', [HeaderPostController::class, 'create'])->name('create');
Route::post('/tao-moi', [HeaderPostController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa bài viết trên header']], function () {
Route::get('/chinh-sua/{headerPost}', [HeaderPostController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{headerPost}', [HeaderPostController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa bài viết trên header']], function () {
Route::delete('/xoa/{headerPost}', [HeaderPostController::class, 'destroy'])->name('destroy');
});
