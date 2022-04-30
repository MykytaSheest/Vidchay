<?php

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

Route::get('/admin', [\App\Http\Controllers\WebControllers\AdminController::class, 'index'])->name('admin');

Route::middleware('auth')->group(function() {
    Route::prefix('admin')->group(function() {
        Route::prefix('merch')->group(function() {
            Route::get('/create', [\App\Http\Controllers\WebControllers\MerchController::class, 'create'])->name('merch.create');
            Route::post('/store', [\App\Http\Controllers\WebControllers\MerchController::class, 'store'])->name('merch.store');
            Route::get('/destroy/{id}', [\App\Http\Controllers\WebControllers\MerchController::class, 'destroy'])->name('merch.destroy');
            Route::get('/edit/{id}', [\App\Http\Controllers\WebControllers\MerchController::class, 'edit'])->name('merch.edit');
            Route::post('/update/{id}', [\App\Http\Controllers\WebControllers\MerchController::class, 'update'])->name('merch.update');
        });
        Route::prefix('contact')->group(function () {
            Route::post('/store', [\App\Http\Controllers\WebControllers\ContactController::class, 'store'])->name('contact.store');
        });
    });

});


Auth::routes(['register' => true]);

Route::get('/{vue_capture?}', function () {
    return view('index');
})->where('vue_capture', '[\/\w\.-]*');


