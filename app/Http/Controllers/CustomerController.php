<?php

namespace App\Http\Controllers;

use App\CustomerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Method to call Customer page view
	|--------------------------------------------------------------------------
	*/
	public function customers()
	{
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customers = $customerModel->get()->toArray();
		$data = array();
		$data['customers'] = $customers;
		return view('apps.' . $app . '.customers', array('data' => $data));
	}
	
	public function getCustomer(Request $request)
	{
		$app = Session::get('appName');
		return view('apps.' . $app . '.create-customer');
	}
	
	public function postCustomer(Request $request)
	{
		$customerModel = new CustomerModel();
		//$customerModel->id = 1;
		$customerModel->name = $request->name;
		$customerModel->save();
		return redirect('customers');
	}
}
