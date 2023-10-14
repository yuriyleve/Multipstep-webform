<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContainerInfoController;
use App\Http\Controllers\DnsSettingsController;
use App\Http\Controllers\DomainSettingsController;
use App\Http\Controllers\PlanController;
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
    Route::post('/container/getServerLocations', [UserContainerController::class, 'getServerLocations']);
    Route::post('/container/updateContainer', [UserContainerController::class, 'updateContainer']);
    Route::post('/container/getContainerByID', [UserContainerController::class, 'getContainerByID']);
    Route::resource('/container_info', ContainerInfoController::class);
    Route::resource('/plan', PlanController::class);
    Route::resource('/domain', DomainSettingsController::class);
    Route::resource('/dns', DnsSettingsController::class);
});
