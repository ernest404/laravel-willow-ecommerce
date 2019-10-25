<?php

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

Route::get('/','PagesController@index');
Route::get('/men','PagesController@MensCategory');
Route::get('/Women','PagesController@WomensCategory');
Route::get('/women','PagesController@WomensCategory');
Route::get('/About','PagesController@About');
Route::resource('Sandal','PagesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cart', 'CartController');

Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

// Route::group(['prefix' => 'admin'], function() {
    
//     Route::get('/', function() {
//         return view('vendor.multiauth.admin.home');
//     });
//   Route::resource('product', 'ProductsController');
// Route::resource('category', 'CategoriesController');  
// });

// Route::get('checkout', 'CheckoutController@step1' );
Route::resource('address', 'AddressController' );




// Route::resource('cart.update1', 'CartController@update1');


Route::get('storePayment', 'CheckoutController@storePayment')->name('checkout.storePayment');
Route::get('confirmoder', 'CheckoutController@confirmorder')->name('checkout.confirmorder');
Route::get('placeorder', 'CheckoutController@placeorder')->name('checkout.placeorder');
Route::get('shippingform', 'CheckoutController@shippingform')->name('checkout.shippingform');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping', 'CheckoutController@shipping')->name('checkout.shipping');
    Route::resource('review','ProductReviewController');
});

Route::get('stripe1', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
Route::get('Shop/{type?}','PagesController@Shop');



