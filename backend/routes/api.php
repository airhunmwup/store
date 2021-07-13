<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InstockController;
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

Route::resource('category', CategoryController::class);
Route::resource('product', ProductsController::class);
Route::resource('instock', InstockController::class);


Route::get('/sub_category', [SubcategoryController::class, 'index']);
Route::post('/sub_category', [SubCategoryController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
