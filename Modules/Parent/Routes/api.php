<?php

use Illuminate\Support\Facades\Route;
use Modules\Parent\Http\Controllers\APIController;
use Modules\Parent\Http\Controllers\ParentController;

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
    Route::group(['prefix' => 'parent', 'as' => 'api.parent.'], function () {
        Route::POST('login', [APIController::class, 'Login']);
        Route::POST('logout', [APIController::class, 'Logout']);
        Route::POST('delete-account', [APIController::class, 'DeleteAccount']);
        Route::POST('change-lang', [APIController::class, 'changeLang']);
        Route::get('get-children', [ParentController::class, 'getChildren']);
        Route::POST('add-program-to-child', [ParentController::class, 'addProgramToChild']);
        Route::get('get-children-data', [ParentController::class, 'getChildrenData']);

        Route::GET('profile', [APIController::class, 'profile']);
        Route::POST('profile', [APIController::class, 'UpdateProfile']);
        Route::POST('profile-image', [APIController::class, 'UpdateImage']);


    });
});
