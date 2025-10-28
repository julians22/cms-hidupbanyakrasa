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

// Group api v1
Route::group(['prefix' => 'v1'], function () {
    // Horoscope detail api
    Route::group(['prefix' => 'horoscope', 'as' => 'horoscope.'], function () {
        Route::post('detail', [\App\Http\Controllers\FrontendPageController::class, 'horoscope_api_detail'])->name('api_detail');
    });
});

