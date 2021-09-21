<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\GameController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1')->group(function () {
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::post('/show', [CategoryController::class, 'show']);
        Route::post('/update', [CategoryController::class, 'update']);
        Route::post('/store', [CategoryController::class, 'store']);
        Route::post('/destroy', [CategoryController::class, 'destroy']);
    });

    Route::prefix('/games')->group(function () {
        Route::get('/', [GameController::class, 'index']);
        Route::post('/addLink', [GameController::class, 'addLink']);
        Route::post('/removeLink', [GameController::class, 'removeLink']);
        Route::post('/show', [GameController::class, 'show']);
        Route::post('/update', [GameController::class, 'update']);
        Route::post('/store', [GameController::class, 'store']);
        Route::post('/delete', [GameController::class, 'delete']);
        Route::post('/destroy', [GameController::class, 'destroy']);
    });
});
