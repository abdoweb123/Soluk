<?php

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Modules\Beneficiary\Http\Controllers\Controller;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => [Localization::class, 'auth:admin']], function () {
        Route::resources(['beneficiaries' => Controller::class]);
    });
});
