<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\ZipCodesController;
use App\Http\Controllers\SettlementsController;
use App\Http\Controllers\MunicipalitiesController;
use App\Http\Controllers\SettlementTypesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('states/',[StatesController::class, 'index']);
Route::get('states/{state}/municipalities',[MunicipalitiesController::class, 'getMunicipalitiesByState']);
Route::get('municipalities/{municipality}',[MunicipalitiesController::class, 'get']);
Route::get('settlement_types/{settlement_type}',[SettlementTypesController::class, 'get']);
Route::get('settlements/{settlement}',[SettlementsController::class, 'get']);
Route::get('zip-codes/{zip_code}',[ZipCodesController::class, 'get']);
