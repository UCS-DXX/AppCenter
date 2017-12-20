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

/*Route::get('/', function () {
	return view('welcome');
});*/

/*
|--------------------------------------------------------------------------
| Home Controller Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@getLogin');
//Route::get('/register', 'HomeController@getRegister');
//Route::post('/register', 'HomeController@postRegister');
Route::get('/login', 'HomeController@getLogin');
Route::post('/login', 'HomeController@postLogin');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/apps', ['middleware' => 'authenticate', 'uses' => 'HomeController@getApps']);
Route::get('/changeapp/{appName}', ['middleware' => 'authenticate', 'uses' => 'HomeController@changeApp']);
Route::get('/dashboard', ['middleware' => 'authenticate', 'uses' => 'HomeController@getDashboard']);
Route::get('/form-controls', ['middleware' => 'authenticate', 'uses' => 'HomeController@getFormControls']);
Route::get('/responsive-tables', ['middleware' => 'authenticate', 'uses' => 'HomeController@getResponsiveTables']);
Route::get('/testing', 'HomeController@testing');

/*
|--------------------------------------------------------------------------
| Customer Controller Routes
|--------------------------------------------------------------------------
*/
Route::get('/customers', ['middleware' => 'authenticate', 'uses' => 'CustomerController@customers']);
Route::get('/create-customer', ['middleware' => 'authenticate', 'uses' => 'CustomerController@getCustomer']);
Route::post('/create-customer', ['middleware' => 'authenticate', 'uses' => 'CustomerController@postCustomer']);
Route::get('/customer/edit/{id}', ['middleware' => 'authenticate', 'uses' => 'CustomerController@getEditCustomer']);
Route::post('/update-customer', ['middleware' => 'authenticate', 'uses' => 'CustomerController@updateCustomer']);
Route::get('/activate-customers', ['middleware' => 'authenticate', 'uses' => 'CustomerController@getInactivateCustomers']);
Route::get('/activate-customers/{id}', ['middleware' => 'authenticate', 'uses' => 'CustomerController@activateCustomers']);

Route::get('admin/login', 'AdminController@getLogin');
Route::post('admin/login', 'AdminController@doLogin');
Route::get('admin/logout', 'AdminController@logout');
Route::group(['prefix' => '/admin', 'middleware' => ['admin']], function () {
	Route::get('/dashboard', 'AdminController@dashboard');
	Route::get('/users', 'AdminController@showUser');
	Route::get('/create-user-permission/{user_id?}', 'AdminController@createUserPermission');
	Route::post('/create-user-permission', 'AdminController@doCreateUserPermission');
	Route::get('/change-password', 'AdminController@showChangePassword');
	Route::post('/change-password', 'AdminController@doChangePassword');
});

/*
|--------------------------------------------------------------------------
| Transaction Controller Routes
|--------------------------------------------------------------------------
*/
Route::get('/transactions', ['middleware' => 'authenticate', 'uses' => 'TransactionController@getTransactions']);

/*
|--------------------------------------------------------------------------
| Product Code Controller Routes
|--------------------------------------------------------------------------
*/
Route::get('/product-codes', ['middleware' => 'authenticate', 'uses' => 'ProductCodeController@productcodes']);
Route::get('/create-product-code', ['middleware' => 'authenticate', 'uses' => 'ProductCodeController@getProductCode']);
Route::post('/create-product-code', ['middleware' => 'authenticate', 'uses' => 'ProductCodeController@postProductCode']);
Route::get('/product-code/edit/{id}', ['middleware' => 'authenticate', 'uses' => 'ProductCodeController@getEditProductCode']);
Route::post('/update-product-code', ['middleware' => 'authenticate', 'uses' => 'ProductCodeController@updateProductCode']);

/*
|--------------------------------------------------------------------------
| Test Controller Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/temp-code', 'AdminController@tempCode');
Route::get('test', 'TestController@index');
