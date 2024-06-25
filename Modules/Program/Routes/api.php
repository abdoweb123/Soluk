<?php

use Illuminate\Support\Facades\Route;
use Modules\Program\Http\Controllers\APIController;

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

Route::prefix('/{lang}')->group(function () {
    Route::get('get/programs', [APIController::class, 'index']);
    Route::prefix('programs')->group(function () {
        Route::post('toggle-favorite', [APIController::class, 'toggleFavorite']);
        Route::get('get-favorites', [APIController::class, 'getFavorites']);
        Route::post('get-program-specialist', [APIController::class, 'getProgramSpecialist']);

    });
});