<?php

use App\Http\Controllers\JWTAuthController;
use Illuminate\Support\Facades\Route;

Route::withoutMiddleware('jwtAuth')->group(function () {
    Route::post('v1/auth/register', [JWTAuthController::class, 'register']);
    Route::post('v1/auth/login', [JWTAuthController::class, 'login']);
});

Route::group(['prefix' => 'v1/user/'], function () {
    Route::get('get', [JWTAuthController::class, 'getUser']);
    Route::get('logout', [JWTAuthController::class, 'logout']);
});
