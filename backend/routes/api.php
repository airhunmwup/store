<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\InstockController;
use App\Http\Controllers\AddressbuyersController;
use App\Models\Addressforbuyers;
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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/newlistings', [ProductsController::class, 'newlisting']);


//Static Public Routes
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/sub_category', [SubcategoryController::class, 'index']);

Route::post('/category', [CategoryController::class, 'store']);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductsController::class, 'store']);
    Route::put('/products/{id}', [ProductsController::class, 'update']);
    Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
    Route::post('/wishlist', [WishlistController::class, 'store']);
    Route::post('/checkwishlist', [WishlistController::class, 'show']);
    Route::post('/watcherCount', [WishlistController::class, 'index']);
    Route::post('/mywishlist/{user_id}', [WishlistController::class, 'mywishlist']);
    Route::delete('/removeWishlist/{id}', [WishlistController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/changeemail', [AuthController::class, 'changeEmail']);
    Route::post('/addaddress', [AddressbuyersController::class, 'store']);
    Route::post('/getaddress/{user_id}', [AddressbuyersController::class, 'show']);
    Route::post('/deleteaddress', [AddressbuyersController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
