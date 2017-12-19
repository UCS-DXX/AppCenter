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
Route::get('/dashboard', ['middleware' => 'authenticate', 'uses' => 'HomeController@getDashboard']);
Route::get('/form-controls', ['middleware' => 'authenticate', 'uses' => 'HomeController@getFormControls']);
Route::get('/responsive-tables', ['middleware' => 'authenticate', 'uses' => 'HomeController@getResponsiveTables']);

/*
|--------------------------------------------------------------------------
| Test Controller Routes
|--------------------------------------------------------------------------
*/
Route::get('test', 'TestController@index');
