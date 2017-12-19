<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Adldap;
use App\UserPermission;
use App\Test;

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
		//$username = 'riemann';
		$username = $request->username;
		//$password = 'passwor1d';
		$password = $request->password;
/*		$test_model = new Test();
		$test = $test_model->get()->toArray();*/
		$userdn = "uid=".$username.",dc=example,dc=com";
		$user_permission_model = new UserPermission();
		if(Adldap::auth()->attempt($userdn, $password, $bindAsUser = true)) {
			$user_permission = $user_permission_model->where('USER_ID','=',$username)->get()->toArray();
			if(empty($user_permission) || ($user_permission[0]['VIEWER'] == 0 && $user_permission[0]['CHECKER'] == 0 && $user_permission[0]['MAKER'] == 0)) {
				return redirect('/login')->with('err_msg','You do not have permission');
			}
			else {
				$viewer = 0;
				$checker = 0;
				$maker = 0;
				if($user_permission[0]['VIEWER'] == 1)
					$viewer = 1;
				if($user_permission[0]['CHECKER'] == 1)
					$checker = 1;
				if($user_permission[0]['MAKER'] == 1)
					$maker = 1;

				Session::put('login', TRUE);
				Session::put('viewer', $viewer);
				Session::put('checker', $checker);
				Session::put('maker', $maker);
				return redirect('dashboard');
			}
			// the user exists in the LDAP server, with the provided password

			/*$user = \App\User::where($this->username(), $username) -> first();
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
			return true;*/
		}
		else {
			return redirect('/login')->with('err_msg','Invalid User Id or Password');
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
