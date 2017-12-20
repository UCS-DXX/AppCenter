<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;
use Hash;
use DB;
use Session;
class AdminController extends Controller
{

	public function getLogin() {
			return view('pages.admin.login');
	}

	public function doLogin(Request $request) {
		$admin_model = new AdminModel();
		$username = $request->username;
		$admin = $admin_model->where('USER_ID','=',$username)->get()->toArray();
		if(!empty($admin)) {
			if(password_verify($request->password,$admin[0]['password'])) {
				Session::put('login',TRUE);
				Session::put('admin',TRUE);
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
		return view('pages.admin.dashboard');
	}

	public function tempCode() {
		$admin_model = new AdminModel();
		$password = Hash::make('12345678');
		$admin_model->create(['USER_ID' => '123','PASSWORD' => $password,'STATUS' => '1']);
		//$admin = $admin_model->get()->toArray();
	}
}
