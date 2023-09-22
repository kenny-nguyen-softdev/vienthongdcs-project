<?php

use App\Http\Controllers\Admin\AjaxController;
use Illuminate\Support\Facades\Route;

Route::get('/checkExistEmailInLoginForm', [AjaxController::class, 'checkExistEmailInLoginForm'])->name('checkExistEmailInLoginForm');

Route::get('/notExistingEmail', [AjaxController::class, 'notExistingEmail'])->name('notExistingEmail');

Route::post('/upload-company-file', [AjaxController::class, 'uploadCompanyFile'])->name('uploadCompanyFile');

Route::post('/address/districts', [AjaxController::class, 'getDistricts'])->name('getDistricts');

Route::post('/address/wards', [AjaxController::class, 'getWards'])->name('getWards');

Route::post('/transport', [AjaxController::class, 'getTransport'])->name('getTransport');

Route::post('/getProduct', [AjaxController::class, 'getProduct'])->name('getProduct');

Route::post('/getFirstSubCategories', [AjaxController::class, 'getFirstSubCategories'])->name('getFirstSubCategories');

Route::post('/getSecondSubCategories', [AjaxController::class, 'getSecondSubCategories'])->name('getSecondSubCategories');

Route::post('/getCustomer', [AjaxController::class, 'getCustomer'])->name('getCustomer');

Route::get('/ajaxSearchProducts', [AjaxController::class, 'ajaxSearchProducts'])->name('ajaxSearchProducts');


Route::post('/getOrigin', [AjaxController::class, 'getOrigin'])->name('getOrigin');

Route::post('/getConfiguration', [AjaxController::class, 'getConfiguration'])->name('getConfiguration');

Route::post('/getFeature', [AjaxController::class, 'getFeature'])->name('getFeature');