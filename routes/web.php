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
Route::get('/', 'HomeController@index');
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

/*
|--------------------------------------------------------------------------
| Test Controller Routes
|--------------------------------------------------------------------------
*/
Route::get('test', 'TestController@index');
