<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AddressbuyersController;
use App\Http\Controllers\ImageuploadController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UserPaymentController;
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
Route::get('/newlistings2/{id}', [ProductsController::class, 'newlisting2']);
Route::get('/sortListings/{id}', [ProductsController::class, 'sortListings']);



//Static Public Routes
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/categorie/{id}', [CategoryController::class, 'getcat']);
Route::get('/sub_category', [SubcategoryController::class, 'index']);
Route::get('/subcategory/{id}', [SubcategoryController::class, 'fetch']);
Route::post('/getsubcategories', [SubcategoryController::class, 'load']);
Route::get('/subcat/{id}', [SubcategoryController::class, 'get']);
Route::post('/getResults', [ProductsController::class, 'getResults']);

Route::post('/category', [CategoryController::class, 'store']);
Route::get('/images', [ImageuploadController::class, 'index']);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductsController::class, 'store']);
    Route::post('/createlisting', [ProductsController::class, 'store']);
    Route::post('/getlistings/{user_id}', [ProductsController::class, 'getlistings']);
    Route::get('/getlisting/{id}', [ProductsController::class, 'getlisting']);
    Route::put('/products/{id}', [ProductsController::class, 'update']);
    Route::delete('/productdelete/{id}', [ProductsController::class, 'destroy']);
    Route::post('/wishlist', [WishlistController::class, 'store']);
    Route::post('/checkwishlist', [WishlistController::class, 'show']);
    Route::post('/watcherCount', [WishlistController::class, 'index']);
    Route::post('/mywishlist/{user_id}', [WishlistController::class, 'mywishlist']);
    Route::delete('/removeWishlist/{id}', [WishlistController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/changeemail', [AuthController::class, 'changeEmail']);
    Route::post('/changename', [AuthController::class, 'changeName']);
    Route::post('/changepassword', [AuthController::class, 'changePassword']);
    Route::post('/addaddress', [AddressbuyersController::class, 'store']);
    Route::post('/getaddress/{user_id}', [AddressbuyersController::class, 'show']);
    Route::post('/fetchAddress/{id}', [AddressbuyersController::class, 'fetch']);
    Route::post('/editAddress', [AddressbuyersController::class, 'edit']);
    Route::post('/deleteaddress', [AddressbuyersController::class, 'destroy']);
 
    Route::post('/createlisting', [ProductsController::class, 'store']);
    Route::post('/uploader', [ProductsController::class, 'imageUploader']);
    Route::post('/getlistings/{userid}', [ProductsController::class, 'getlistings']);
    Route::delete('/deletelisting/{id}', [ProductsController::class, 'destroy']);
    Route::post('/purchase', [UserPaymentController::class, 'purchase']);
    Route::post('/sendmessage', [MessagesController::class, 'store']);
    Route::get('/fetchmessages/{id}', [MessagesController::class, 'index']);
    Route::get('/getmessage/{id}', [MessagesController::class, 'get']);
    Route::get('/listings/{id}', [productsController::class, 'get']);
    Route::post('/myorders', [UserPaymentController::class, 'myorders']);
    Route::post('/manageorders/{id}', [UserPaymentController::class, 'manageorders']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
