<?php

use App\Functions\ResponseHelper;
use App\Functions\WhatsApp;
use App\Http\Controllers\API\HomeController;
use App\Mail\SendOTP;
use Illuminate\Support\Facades\Mail;
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

Route::prefix('/{lang}')->group(function () {

    Route::any('/home', [HomeController::class, 'home'])->name('home');

    Route::any('/update/location', [HomeController::class, 'updateLocation']);

});

Route::fallback(function () {
    return 'Hm, why did you land here somehow?';
});
