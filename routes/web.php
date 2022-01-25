<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::group([],__DIR__ . '/admin-routes.php');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[HomeController::class,'index']);
// Route::get('/product/{url}',"ProductController@show_product_page");

// Route::get('/product', function () {
//     return view('product_view');
// });

Route::get('/shopping/cart', function () {
    return view('product_cart');
});
Route::get('/login', 'LoginController@show_login_page');
Route::get('/register', 'LoginController@show_SignUp_page');

Route::get('confirm2',function(){
    return view('confirmation');
});
Route::get('cart_data',function(){
    return view('product_cart_data');
});

Route::get('aboutus',function(){
    return view('about');
});

Route::get('privacy-policy',function(){
    return view('policy');
});

Route::get('terms-of-service',function(){
    return view('tos');
});

Route::get('checkout','CheckoutController@checkout');
Route::post('checkout','CheckoutController@afterpayment')->name('checkout.credit-card');

Route::get('/checkout2','CheckoutController@checkout2');
Route::post("/create-checkout-session",'CheckoutController@CheckoutNewSession');
Route::get("/checkout-success","CheckoutController@checkoutsuccess");
Route::post('/handle-payment',"CheckoutController@handlepayment");

Route::get("/download/DB","CheckoutController@downloaddb");

Route::get("/testSquare","TestController@index_squarepayment");

Route::post("/processSquare","TestController@process_squarepayment")->name('ajaxprocess.post');
Route::post("/processTestSquare","TestController@test_processpayment")->name('ajaxtestprocess.post');

Route::get("/product/{url}","TestController@testProduct");
// function(){
//     return view('product-delta-8-temple-gummies');
// });
Route::get("/confirmation/{purchaseid}","CartController@confirmation");

Route::get("/checkout","CartController@showCheckout");
Route::get("/cart",'CartController@showCart');

Route::post('/cart/addtocart', 'CartController@addtoCart')->name('ajaxaddcart.post');
Route::post('/cart/updatetocart', 'CartController@updateCart')->name('ajaxupdatecart.post');
Route::post('/cart/deletefromcart', 'CartController@deletefromcart')->name('ajaxdelfromcart.post');
Route::post('/userloginajax', 'LoginController@user_login_ajax')->name('ajaxlogin.post');
Route::post('/setupAgeSession','HomeController@setAgeSession')->name('ajaxsetAge.post');
Route::post('/cart/getcart','CartController@getCartAjax')->name('ajaxgetCart.post');
Route::post('/cart/getAddedItemcart','CartController@getAddedItemCartAjax')->name('ajaxgetAddedItemCart.post');




Route::post('/userlogin', 'LoginController@user_login');
Route::get('/userlogout','LoginController@user_logout');
Route::get('/guestlogout','LoginController@clearGuestData');
Route::post('/register-submit','LoginController@customersubmit');

Route::get('customer/detail',"CustomerController@show_myaccount");
Route::get('customer/subscription',"CustomerController@show_mysubscription");

Route::get('customer/refer',"CustomerController@show_myrefer");
Route::get('customer/rewards',"CustomerController@show_myrewards");

Route::get('customer/myorder',"CustomerController@show_myorders");
Route::get('customer/editprofile',"CustomerController@show_editProfile");
Route::get('customer/change_password',"CustomerController@show_changepassword");

Route::post('customer/updateprofile/{id}',"CustomerController@updateuserprofile");
Route::post('customer/updatepassword/{id}',"CustomerController@updatepassword");

Route::get('/mail/{pay_id}','MailController@forgotPassword');

Route::get('/test/detail',"CustomerController@testDetail");
Route::get('/test/subscription',"CustomerController@testSubscription");
Route::get('/test/rewards',"CustomerController@testrewards");
Route::get('/test/refer',"CustomerController@testrefer");