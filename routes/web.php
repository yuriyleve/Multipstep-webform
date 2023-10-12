<?php

use App\Http\Controllers\ContainerInfoController;
use App\Http\Controllers\DnsSettingsController;
use App\Http\Controllers\DomainSettingsController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserContainerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');

Route::resource('container', UserContainerController::class);
Route::resource('container_info', ContainerInfoController::class);
Route::resource('plan', PlanController::class);
Route::resource('domain', DomainSettingsController::class);
Route::resource('dns', DnsSettingsController::class);
