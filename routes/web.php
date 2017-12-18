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
Route::get('/register', 'HomeController@getRegister');
Route::get('/login', 'HomeController@getLogin');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/dashboard', 'HomeController@getDashboard');
Route::get('/form-controls', 'HomeController@getFormControls');
Route::get('/responsive-tables', 'HomeController@getResponsiveTables');
