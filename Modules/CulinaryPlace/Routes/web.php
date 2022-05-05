<?php

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

use Illuminate\Support\Facades\Route;
use Modules\CulinaryPlace\Http\Controllers\CulinaryPlaceController;

Route::prefix('culinary-place')->group(function () {
    Route::get('/', [CulinaryPlaceController::class, 'index']);
    Route::post('/store', [CulinaryPlaceController::class, 'store']);
    Route::get('/edit/{id}', [CulinaryPlaceController::class, 'edit']);
    Route::post('/update/{id}', [CulinaryPlaceController::class, 'update']);
    Route::get('/delete/{id}', [CulinaryPlaceController::class, 'destroy']);
    Route::get('/getdata/{id}', [CulinaryPlaceController::class, 'getdata']);
});
