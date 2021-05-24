<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BalanceRechargeRequestController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
use App\Models\BalanceRechargeRequest;
use App\Models\Card;
use App\Models\Category;
use App\Models\Code;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingPageController::class, 'index'])->name('home.index');
Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::view('/register', 'register')->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/shop', [ ShopController::class, 'index' ])->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::view('profile', 'pages.profile')->name('profile.index');
    Route::post('profile_update', [ AuthController::class, 'update' ]);
    Route::view('wallet', 'welcome')->name('wallet.index');
    Route::post('wallet-recharge', [BalanceRechargeRequestController::class, 'store'])->name('wallet.recharge');

    Route::middleware('is.admin')->prefix('admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard')->with(['reqs' => BalanceRechargeRequest::where('status', 'New')->with('user')->get()]);
        });
        Route::get('request-file-download', [ BalanceRechargeRequestController::class, 'dl' ]);
        Route::get('accept-request', [ BalanceRechargeRequestController::class, 'accept' ]);

        Route::get('categories', function () {
            return view('admin.categories')->with(['categories' => Category::all()]);
        });
        Route::post('categories/new', [CategoryController::class, 'store']);

        Route::get('cards/{category_id}', function ($category_id) {
            return view('admin.cards')->with(['cards' => Card::where('category_id', $category_id)->get(), 'category' => Category::whereId($category_id)->first()]);
        });
        Route::post('cards/new', [CardController::class, 'store']);

        Route::get('codes/{category_id}/{card_id}', function ($category_id, $card_id) {
            return view('admin.upload')
                ->with([
                    'codes' => Code::where('card_id', $card_id)->whereSold(0)->limit(100)->get(),
                    'card' => Card::whereId($card_id)->withCount('codes')->first(),
                ]);
        });
        Route::get('codes/sample', [CodeController::class, 'sample']);
        Route::post('codes/new', [CodeController::class, 'store']);
        Route::delete('codes/{code}', [CodeController::class, 'destroy']);
    });
});

Route::view('/cart', 'welcome')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

// Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
// Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
// Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

// Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');


// Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'ShopController@search')->name('search');

Route::get('/search-algolia', 'ShopController@searchAlgolia')->name('search-algolia');

Route::middleware('auth')->group(function () {
    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

    Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
    Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');
});
