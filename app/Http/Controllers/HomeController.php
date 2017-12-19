<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Method to call Home page view
	|--------------------------------------------------------------------------
	*/
	public function index()
	{
		return view('pages.home');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Register page view
	|--------------------------------------------------------------------------
	*/
	/*public function getRegister()
	{
		return view('pages.register');
	}*/
	
	/*
	|--------------------------------------------------------------------------
	| Method to Register users
	|--------------------------------------------------------------------------
	*/
	/*public function postRegister()
	{
	
	}*/
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Login page view
	|--------------------------------------------------------------------------
	*/
	public function getLogin()
	{
		if (Session::get('login')) {
			return redirect('dashboard');
		}
		return view('pages.login');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to login users
	|--------------------------------------------------------------------------
	*/
	public function postLogin(Request $request)
	{
		$url = '192.168.33.11/test.php';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, 1); // Do a regular HTTP POST
		$response = curl_exec($curl);
		if (isset($response) AND $response == 'true') {
			Session::put('login', $response);
			Session::put('role', 'viewer');
			return redirect('apps');
		}
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Logout page view
	|--------------------------------------------------------------------------
	*/
	public function getLogout()
	{
		Session::flush();
		return redirect('/');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Apps page view
	|--------------------------------------------------------------------------
	*/
	public function getApps()
	{
		return view('pages.apps');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Change App
	|--------------------------------------------------------------------------
	*/
	public function changeApp($appName)
	{
		Session::put('appName', $appName);
		return redirect('dashboard');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Dashboard page view
	|--------------------------------------------------------------------------
	*/
	public function getDashboard()
	{
		$app = Session::get('appName');
		return view('apps.' . $app . '.dashboard');
	}
	
	public function testing()
	{
		$app = Session::get('appName');
		return view('apps.'.$app.'.test');
	}
	/*
	|--------------------------------------------------------------------------
	| Method to call FormControls page view
	|--------------------------------------------------------------------------
	*/
	public function getFormControls()
	{
		return view('pages.form-controls');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call ResponsiveTables page view
	|--------------------------------------------------------------------------
	*/
	public function getResponsiveTables()
	{
		return view('pages.responsive-tables');
	}
}
