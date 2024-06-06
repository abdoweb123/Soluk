<?php

use App\Functions\PushNotification;
use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;

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

Route::any('get-ip-details', [webController::class, 'ip'])->name('ip');
Route::any('reorder', [webController::class, 'reorder'])->name('reorder');
Route::any('language/{locale}', [webController::class, 'lang'])->name('lang');
Route::any('artisan/{command}', [webController::class, 'artisan'])->name('artisan');
Route::any('sendotp/{number}', [webController::class, 'SendOTP'])->name('SendOTP');
Route::any('removeids', [webController::class, 'RemoveIds'])->name('RemoveIds');
Route::any('switch', [webController::class, 'switch'])->name('switch');
Route::any('resume/{id?}', [webController::class, 'resume'])->name('resume');
Route::any('file-upload/upload-large-files', [webController::class, 'uploadLargeFiles'])->name('files.upload.large');

Route::get('/', function () {
    return redirect()->route('admin.home');
});

//
//Route::get('/test', function () {
//    PushNotification::send('$title', ['type' => 'public'], 102, 'Client');
//});