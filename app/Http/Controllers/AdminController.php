<?php

namespace App\Http\Controllers;

use App\TransactionModel;
use Illuminate\Http\Request;
use App\AdminModel;
use Hash;
use DB;
use Illuminate\Support\Facades\Input;
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

	public function createUserPermission(Request $request) {
		$user_permission = array();
		$user_permission[0] = Session::get('_old_input');
		if($request->user_id) {
			$user_id = $request->user_id;
			$user_permission_model = new UserPermission();
			$user_permission  = $user_permission_model->where('user_id','=',$user_id)->get()->toArray();
		}
		return view('apps.admin.create-user-permission',compact('user_permission'));
	}

	public function doCreateUserPermission(Request $request) {
		$viewer = 0;
		$maker = 0;
		$checker = 0;
		if ($request->permission == 'viewer') {
			$viewer = 1;
		}
		if ($request->permission == 'maker') {
			$maker = 1;
		}
		if ($request->permission == 'checker') {
			$checker = 1;
		}
		$user_permission_model = new UserPermission();
		if(!isset($request->user_id)) {
			$user_permission = $user_permission_model->where('user_id','=',$request->username)->where('application_name','=',$request->application_name)->get()->toArray();
			if(empty($user_permission)) {
				$user_permission_model->user_id = $request->username;
				$user_permission_model->application_name = $request->application_name;
				$user_permission_model->viewer = $viewer;
				$user_permission_model->maker = $maker;
				$user_permission_model->checker = $checker;
				$user_permission_model->save();
			}
			else {
				Session::flash('err_msg','User already exist into this application');
				return back()->withInput(Input::all());
				//return redirect('admin/create-user-permission')->with('err_msg','User already exist into this application');
			}
		}
		else {
			$user_permission_model->where('user_id','=',$request->username)->update(['viewer' => $viewer,'maker' => $maker,'checker' => $checker,'application_name'=>$request->application_name]);
		}
		return redirect('admin/users');
	}

	public function showChangePassword() {
		return view('apps.admin.change-password');
	}

	public function doChangePassword(Request $request) {
		if($request->password == $request->password_confirmation) {
			$admin_model = new AdminModel();
			$admin = $admin_model->where('user_id', '=', 'Admin')->get()->toArray();
			if (password_verify($request->old_password, $admin[0]['password'])) {
				$admin_model->where('user_id', '=', 'Admin')
					->update(['password' => Hash::make($request->password)]);
				return redirect('admin/dashboard')->with('success_msg', 'Password Update successfully done');
			}
			else {
				return redirect('admin/change-password')->with('err_msg', 'Old password does not match');
			}
		}
		else {
			return redirect('admin/change-password')->with('err_msg', 'New password and confirm password does not match');
		}
	}

	public function tempCode() {
		$admin_model = new AdminModel();
		$password = Hash::make('12345678');
		$admin_model->create(['USER_ID' => '123','PASSWORD' => $password,'STATUS' => '1']);
	}
}
