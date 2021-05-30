<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\UserController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'index']);

Route::post('/tokens/create', [ApiTokenController::class, 'createToken']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource(
        '/cars',
        CarsController::class
    );
});
