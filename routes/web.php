<?php

use App\Http\Controllers\CateController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->name('admin.')->group(function(){
    Route::get('', [Dashboard::class , 'index'])->name('dashboard');

    Route::prefix(('/danh-muc'))->name('cate.')->group(function(){
        Route::get('', [CateController::class , 'index'])->name('index');
        Route::post('/store', [CateController::class , 'store'])->name('store');
        Route::get('/edit/{id}', [CateController::class , 'edit'])->name('edit');
        Route::post('/update', [CateController::class , 'update'])->name('update');
        Route::get('/delete/{id}', [CateController::class , 'distroy'])->name('delete');
    });
});