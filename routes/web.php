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

// Route::get('/', function () {
//     return view('auth/login');
// });

Route::get('/', function () {
    return view('layouts/master');
});


Route::get('/admin', function () {
    return view('layouts/index');
});

Route::get('/loginform', function () {
    return view('frontend/login');
});

Route::get('/registerform', function () {
    return view('frontend/register');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/logout', 'DashboardController@adminlogout');
Route::get('/profile', 'ProfileController@profile');
Route::get('/delete/{id}', 'ProfileController@destroy');
Route::get('/edit/{id}', 'ProfileController@edit');
Route::get('addcategory', 'AddCatageoryController@addcategory');
Route::post('addcategory', 'AddCatageoryController@category');
Route::get('viewcategory', 'AddCatageoryController@viewcategory');
Route::get('/products', 'AddProductController@products');
Route::post('/products', 'AddProductController@addproduct');
Route::get('/viewproduct', 'AddProductController@viewproduct');


Route::get('/product', 'ProductController@productlist');
Route::get('/productdetail', 'ProductDetailController@productdetail');
Route::get('/cart', 'CartController@cart');
Route::get('/checkout', 'CheckoutController@checkout');
Route::get('/myaccount', 'MyAccountController@myaccount');
Route::get('/wishlist', 'MorePagesController@wishlist');
Route::get('/category', 'CategoryController@category');
Route::get('/delete/{id}', 'CategoryController@delete');


Route::get('/log', function () {
    return view('frontend/login');
});

Route::get('/contact', function () {
    return view('frontend/contact');
});


Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');



/*
// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/', 'HomeController@index')->name('user_dashboard');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin_dashboard');
});

*/