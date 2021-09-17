<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/vue', fn() => redirect('/welcome'));
// Route::get('/vue/{any}', "SpaController@index")->where("any", '.*');


Route::get('/', [HomeController::class, 'index']);

//Route::prefix('/vue')->group(function () {
//    Route::get('/', "SpaController@index")->where("any", '.*');
//    Route::get('{any}', "SpaController@index.php")->where("any", '.*');
//});

Auth::routes();

Route::prefix('/user')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/{id}/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('/{id}}', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::prefix('/game')->group(function () {
    Route::get('/', [GameController::class, 'index'])->name('game.index');
    Route::get('/add', [GameController::class, 'add'])->name('game.add');
    Route::post('/{id}/add', [GameController::class, 'addLink'])->name('game.addLink');
    Route::post('/{id}/remove', [GameController::class, 'removeLink'])->name('game.removeLink');
    Route::get('/{id}', [GameController::class, 'show'])->name('game.show');
    Route::get('/{id}/edit', [GameController::class, 'edit'])->name('game.edit');
    Route::put('/{id}', [GameController::class, 'update'])->name('game.update');
    Route::get('/create', [GameController::class, 'create'])->name('game.create');
    Route::post('/store', [GameController::class, 'store'])->name('game.store');
    Route::delete('/{id}', [GameController::class, 'delete'])->name('game.delete');
    Route::delete('/{id}/destroy', [GameController::class, 'destroy'])->name('game.destroy');
});

Route::prefix('/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/add', [CategoryController::class, 'add'])->name('category.add');
//    Route::post('/{id}/add', [CategoryController::class, 'addLink'])->name('category.addLink');
//    Route::post('/{id}/remove', [CategoryController::class, 'removeLink'])->name('category.removeLink');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/{id}/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

//Route::resource('user', 'UserController')->middleware('auth');
