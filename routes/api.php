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

    });

    Route::prefix('/games')->group(function () {
        Route::get('/', [GameController::class, 'index']);
        Route::get('/addLink', [GameController::class, 'addLink']);
        Route::get('/removeLink', [GameController::class, 'removeLink']);
        Route::get('/show', [GameController::class, 'show']);
        Route::get('/update', [GameController::class, 'update']);
        Route::get('/store', [GameController::class, 'store']);
        Route::get('/delete', [GameController::class, 'delete']);
        Route::get('/destroy', [GameController::class, 'destroy']);
    });

//    Route::prefix('/category')->group(function () {
//        Route::get('/', [GameController::class, 'index']);
//        Route::get('/show', [GameController::class, 'show']);
//        Route::get('/update', [GameController::class, 'update']);
//        Route::get('/store', [GameController::class, 'store']);
//        Route::get('/delete', [GameController::class, 'delete']);
//        Route::get('/destroy', [GameController::class, 'destroy']);
//    });
});
