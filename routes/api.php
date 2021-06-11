<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\TrackingController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("driver/list", [DriverController::class, 'list']);
Route::get("product/list", [ProductController::class, 'list']);
Route::get("vehicle/list", [VehicleController::class, 'list']);
Route::get("delivery/list", [DeliveryController::class, 'list']);
Route::get("delivery/get/{id}", [DeliveryController::class, 'byid']);
Route::get("cost/list", [CostController::class, 'list']);
Route::get("tracking/list", [TrackingController::class, 'list']);

// --

Route::post("delivery/add", [DeliveryController::class, 'add']);
Route::post("driver/add", [DriverController::class, 'add']);
Route::post("product/add", [ProductController::class, 'add']);
Route::post("vehicle/add", [VehicleController::class, 'add']);
Route::post("tracking/add", [TrackingController::class, 'add']);
// --
Route::delete("delivery/delete/{id}", [DeliveryController::class, 'delete']);

// --
Route::put("delivery/edit/{id}", [DeliveryController::class, 'update']);
