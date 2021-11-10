<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AddressbuyersController;
use App\Http\Controllers\ImageuploadController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UserPaymentController;
use App\Http\Controllers\RecentViewsController;
use App\Http\Controllers\Orders2Controller;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\PayoutController;
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
Route::post('/getSimilarItems', [ProductsController::class, 'similarItems']);
Route::post('/getSimilarItems2', [VehiclesController::class, 'similarItems']);
Route::post('/getSimilarItems3', [PropertiesController::class, 'similarItems']);

Route::get('/newlistings', [ProductsController::class, 'newlisting']);
Route::get('/newvehicles', [VehiclesController::class, 'newvehicles']);
Route::get('/getVehicles', [VehiclesController::class, 'vehicles']);
Route::get('/getProperties', [PropertiesController::class, 'properties']);
Route::get('/newproperties', [PropertiesController::class, 'newproperties']);
Route::get('/vehicle/{id}', [VehiclesController::class, 'show']);
Route::get('/property/{id}', [PropertiesController::class, 'show']);
Route::get('/newlistings2/{id}', [ProductsController::class, 'newlisting2']);
Route::get('/getListingBySeller/{id}', [ProductsController::class, 'getListingBySeller']);
Route::get('/newlists/{id}', [ProductsController::class, 'newlists']);
Route::get('/sortListings/{id}', [ProductsController::class, 'sortListings']);



//Static Public Routes
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/categorie/{id}', [CategoryController::class, 'getcat']);
Route::get('/cats', [CategoryController::class, 'getcats']);
Route::get('/cats2', [CategoryController::class, 'getcats2']);
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
    Route::post('/saveRecentView', [RecentViewsController::class, 'store']);
    Route::get('/getRecentViews/{id}', [RecentViewsController::class, 'index']);
    Route::post('/createlisting', [ProductsController::class, 'store']);
    Route::post('/createvehiclelisting', [VehiclesController::class, 'store']);
    Route::post('/createpropertylisting', [PropertiesController::class, 'store']);
    Route::post('/getlistings/{user_id}', [ProductsController::class, 'getlistings']);
    Route::post('/getmyvehicles/{user_id}', [VehiclesController::class, 'getmyvehicles']);
    Route::post('/getmyproperties/{user_id}', [PropertiesController::class, 'getmyproperties']);
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
    Route::post('/createOrder', [Orders2Controller::class, 'store']);
    Route::post('/processOrder', [Orders2Controller::class, 'processOrder']);
    Route::get('/getOrder/{orderid}', [Orders2Controller::class, 'fetch']);
    Route::post('/sendmessage', [MessagesController::class, 'store']);
    Route::get('/fetchmessages/{id}', [MessagesController::class, 'index']);
    Route::get('/getmessage/{id}', [MessagesController::class, 'get']);
    Route::get('/listings/{id}', [productsController::class, 'get']);
    Route::get('/myorders/{data}', [UserPaymentController::class, 'myorders']);
    Route::post('/getorders', [Orders2Controller::class, 'getorders']);
    Route::post('/manageorders/{id}', [UserPaymentController::class, 'manageorders']);
    Route::post('/suscribe', [SubscriptionsController::class, 'store']);
    Route::post('/savePayout', [PayoutController::class, 'store']);
    Route::post('/checkPayout', [PayoutController::class, 'checkPayout']);
    Route::post('/getmyOrders', [Orders2Controller::class, 'getmyOrders']);
    Route::post('/saveMobile', [AuthController::class, 'saveMobile']);
    Route::post('/checkStatus', [AuthController::class, 'checkStatus']);
    Route::post('/getMobile', [AuthController::class, 'getMobile']);
    Route::post('/sortOrders', [Orders2Controller::class, 'sortOrders']);
    Route::post('/sortLists', [ProductsController::class, 'sortLists']);
    Route::post('/sortVehicles', [VehiclesController::class, 'sortVehicles']);
    Route::post('/sortProperties', [PropertiesController::class, 'sortProperties']);
    Route::post('/filterListings', [ProductsController::class, 'filterListings']);
    Route::post('/filterVehicles', [VehiclesController::class, 'filterVehicles']);
    Route::post('/filterProperties', [PropertiesController::class, 'filterProperties']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
