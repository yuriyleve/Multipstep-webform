<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContainerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('api')->group(function () {
    Route::resource('/container', UserContainerController::class);
    Route::post('/container/getContainerByID', [UserContainerController::class, 'getContainerByID']);
    Route::post('/container/updateContainer', [UserContainerController::class, 'updateContainer']);
});
