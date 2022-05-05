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
use Modules\DestinationPlace\Http\Controllers\DestinationPlaceController;

Route::prefix('destination-place')->group(function () {
    Route::get('/', [DestinationPlaceController::class, 'index']);
    Route::post('/store', [DestinationPlaceController::class, 'store']);
    Route::get('/edit/{id}', [DestinationPlaceController::class, 'edit']);
    Route::post('/update/{id}', [DestinationPlaceController::class, 'update']);
    Route::get('/delete/{id}', [DestinationPlaceController::class, 'destroy']);
    Route::get('/getdata/{id}', [DestinationPlaceController::class, 'getdata']);
});
