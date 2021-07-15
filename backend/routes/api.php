<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InstockController;
use GuzzleHttp\Middleware;
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


//Public Routes
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{id}', [ProductsController::class, 'show']);
Route::get('/products/{name}', [ProductsController::class, 'search']);
Route::get('/register', [AuthController::class, 'register']);


//Static Public Routes
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/sub_category', [SubcategoryController::class, 'index']);


//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/products', [ProductsController::class, 'store']);
    Route::get('/products/{id}', [ProductsController::class, 'update']);
    Route::get('/products/{id}', [ProductsController::class, 'destroy']);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
