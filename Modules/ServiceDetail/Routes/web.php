<?php

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Modules\ServiceDetail\Http\Controllers\Controller;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => [Localization::class, 'auth:admin']], function () {
        Route::resources(['serviceDetails' => Controller::class]);
        Route::get('program/serviceDetails/{program_id}', [Controller::class,'index'])->name('program.serviceDetails');
    });
});
