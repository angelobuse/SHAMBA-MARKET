<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AproductsController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MainViewController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AordersController;
use App\Http\Controllers\VordersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\MainViewController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [DemoController::class, 'getCart']);

Route::get('/add-to-cart/{id}', [DemoController::class, 'getAddToCart']);

Route::resource('/checkout', CheckoutController::class);

Route::resource('/contact', MessagesController::class);
Route::resource('/about', AboutController::class);

Route::group(['middleware' => ['auth', 'isAdmin']],function(){
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::resource('/users', UsersController::class);

    Route::resource('/a-products', AproductsController::class);

    Route::resource('/a-orders', AordersController::class);

    Route::get('/admin-profile/{id}', [App\Http\Controllers\UsersController::class, 'adminProfile'])->name('admin-profile');


});

Route::group(['middleware' => ['auth', 'isVendor']],function(){
    Route::get('/vendor', function(){
        return view('vendor.dashboard');
    });

    Route::resource('/v-orders', VordersController::class);

    Route::get('/vendor-profile/{id}', [App\Http\Controllers\UsersController::class, 'vendorProfile']);

    Route::resource('/products', ProductsController::class);

    Route::resource('/vendors', VendorController::class);

    Route::get('/add-products', function () {
        return view('vendor.products.add');
    });

});
