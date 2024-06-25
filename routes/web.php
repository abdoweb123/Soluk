<?php

use App\Functions\PushNotification;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\ChildrenProgramController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\webController;
use App\Http\Middleware\Localization;
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




Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => [Localization::class, 'auth:admin']], function () {
    // Children
    Route::resource('children', ChildrenController::class);

    // Children Program
    Route::group([ 'as' => 'children_programs.'], function () {
        Route::get('children-programs/', [ChildrenProgramController::class, 'index'])->name('index');
        Route::get('children-programs/create', [ChildrenProgramController::class, 'create'])->name('create');
        Route::post('children-programs/store', [ChildrenProgramController::class, 'store'])->name('store');
        Route::get('children-programs/edit/{child_id}/{program_id}', [ChildrenProgramController::class, 'edit'])->name('edit');
        Route::post('children-programs/update/{child_id}/{program_id}', [ChildrenProgramController::class, 'update'])->name('update');
        Route::get('children-programs/show/{child_program}', [ChildrenProgramController::class, 'show'])->name('show');
        Route::post('children-programs/destroy/{child_id}', [ChildrenProgramController::class, 'destroy'])->name('destroy');
    });

    // Topics
    Route::resource('topics', TopicController::class);


});









//
//Route::get('/test', function () {
//    PushNotification::send('$title', ['type' => 'public'], 102, 'Client');
//});