<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Http\Controllers\APIController;
use Modules\Client\Http\Controllers\DriverController;

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

Route::prefix('/{lang}/specialists')->group(function () {
    Route::group(['prefix' => 'client', 'as' => 'api.client.'], function () {
        Route::POST('logout', [APIController::class, 'Logout']);

    });
});
