<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('merch')->group(function () {
    Route::get('get/all', [App\Http\Controllers\ApiControllers\MerchController::class, 'getItems'])->name('api:merch:items');
    Route::get('get/{id}', [App\Http\Controllers\ApiControllers\MerchController::class, 'getItem'])->name('api:merch:item');
});

Route::prefix('order')->group(function () {
    Route::post('set', [App\Http\Controllers\ApiControllers\OrderController::class, 'setOrder'])->name('api:order:create');
});

