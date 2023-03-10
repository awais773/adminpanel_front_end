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
Route::post('/signup', [App\Http\Controllers\Api\AuthenticateController::class, 'signup']);
Route::post('/login', [App\Http\Controllers\Api\AuthenticateController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->group(function () {
    Route::post('/update/profile', [App\Http\Controllers\Api\AuthenticateController::class, 'updateProfile']);
    Route::post('/otp/verify', [App\Http\Controllers\Api\AuthenticateController::class, 'otpVerification']);
    Route::get('/getUsers', [App\Http\Controllers\Api\AuthenticateController::class, 'index']);
    Route::get('/getUsers/{id}', [App\Http\Controllers\Api\AuthenticateController::class, 'show']);


    Route::apiResource('products', App\Http\Controllers\Api\ProductController ::class);
    Route::apiResource('category', App\Http\Controllers\Api\CategoryController ::class);
    Route::apiResource('distributer', App\Http\Controllers\Api\DistributerController ::class);


});






