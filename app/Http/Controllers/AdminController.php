<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;
use Hash;
use DB;
use Session;
use App\UserPermission;
class AdminController extends Controller
{

	public function getLogin() {
			return view('apps.admin.login');
	}

	public function doLogin(Request $request) {
		$admin_model = new AdminModel();
		$username = $request->username;
		$admin = $admin_model->where('USER_ID','=',$username)->get()->toArray();
		if(!empty($admin)) {
			if(password_verify($request->password,$admin[0]['password'])) {
				Session::put('login',TRUE);
				Session::put('appName', 'admin');
				Session::put('admin',TRUE);
				Session::put('user_id','admin');
				return redirect('admin/dashboard');
			}
			else {
				return redirect('admin/login')->with('err_msg','Wrong Username or Password');
			}
		}
		else {
			return redirect('admin/login')->with('err_msg','Wrong Username or Password');
		}
	}

	public function dashboard() {
		return view('apps.admin.dashboard');
	}

	public function logout() {
		Session::flush();
		return redirect('admin/login');
	}

	public function showUser() {
		$user_permission_model = new UserPermission();
		$user_permissions = $user_permission_model->get()->toArray();
		return view('apps.admin.users',compact('user_permissions'));
	}

	public function createUserPermission() {
		return view('apps.admin.create-user-permission');
	}

	public function doCreateUserPermission(Request $request) {
		$viewer  = 0;
		$maker 	 = 0;
		$checker = 0;
		if(isset($request->viewer)) {
			$viewer = 1;
		}
		if(isset($request->maker)) {
			$maker = 1;
		}
		if(isset($request->checker)) {
			$checker = 1;
		}
		$user_permission_model = new UserPermission();
		$user_permission_model->user_id = $request->username;
		$user_permission_model->viewer = $viewer;
		$user_permission_model->maker = $maker;
		$user_permission_model->checker = $checker;
		$user_permission_model->save();
		return redirect('admin/users');
	}

	public function tempCode() {
		$admin_model = new AdminModel();
		$password = Hash::make('12345678');
		$admin_model->create(['USER_ID' => '123','PASSWORD' => $password,'STATUS' => '1']);
	}
}
