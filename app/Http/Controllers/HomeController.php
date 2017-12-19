<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Adldap;

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
		//$a = 0;
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
		//$credentials = $request->only('riemann', 'password');
		$username = 'riemann';
		$password = 'password';

		$user_format = env('ADLDAP_USER_FORMAT', 'uid=%s,'.env('ADLDAP_BASEDN', ''));
		$userdn = "uid=riemann,dc=example,dc=com";

		if(Adldap::auth()->attempt($userdn, $password, $bindAsUser = true)) {
			// the user exists in the LDAP server, with the provided password

			$user = \App\User::where($this->username(), $username) -> first();
			if (!$user) {
				// the user doesn't exist in the local database, so we have to create one

				$user = new \App\User();
				$user->username = $username;
				$user->password = '';

				// you can skip this if there are no extra attributes to read from the LDAP server
				// or you can move it below this if(!$user) block if you want to keep the user always
				// in sync with the LDAP server
				$sync_attrs = $this->retrieveSyncAttributes($username);
				foreach ($sync_attrs as $field => $value) {
					$user->$field = $value !== null ? $value : '';
				}
			}

			// by logging the user we create the session so there is no need to login again (in the configured time)
			$this->guard()->login($user, true);
			return true;
		}

		// the user doesn't exist in the LDAP server or the password is wrong
		// log error
		return false;
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
		return view('apps.' . $app . '.test');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Dashboard page view
	|--------------------------------------------------------------------------
	*/
	public function getCustomers()
	{
		$app = Session::get('appName');
		return view('apps.' . $app . '.customers');
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
