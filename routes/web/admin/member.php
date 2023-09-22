<?php

use App\Http\Controllers\Admin\MemberController;
use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => ['permission:Hiển thị danh sách thành viên']], function () {
Route::get('/danh-sach-thanh-vien', [MemberController::class, 'index'])->name('index');
// });

// Route::group(['middleware' => ['permission:Chỉnh sửa thành viên']], function () {
Route::get('/chinh-sua/{user}', [MemberController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{user}', [MemberController::class, 'update'])->name('update');
// });

// Route::group(['middleware' => ['permission:Thêm thành viên']], function () {
Route::get('/tao-moi', [MemberController::class, 'create'])->name('create');
Route::post('/tao-moi', [MemberController::class, 'store'])->name('store');
// });

// Route::group(['middleware' => ['permission:Xóa thành viên']], function () {
Route::delete('/xoa/{user}', [MemberController::class, 'destroy'])->name('destroy');
// });