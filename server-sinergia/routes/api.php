<?php

use Illuminate\Http\Request;
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
use App\Http\Controllers\API\TerceroController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tercero')->group(function () {
  Route::get('/parametro',[ TerceroController::class, 'parameter']);
    Route::get('/',[ TerceroController::class, 'getAll']);
    Route::post('/',[ TerceroController::class, 'create']);
    Route::delete('/{id}',[ TerceroController::class, 'delete']);
    Route::get('/{id}',[ TerceroController::class, 'get']);
    Route::put('/{id}',[ TerceroController::class, 'update']);
});
