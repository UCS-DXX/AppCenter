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
		$customerModel->name = $request->name;
		$customerModel->save();
		return redirect('customers');
	}
	
	public function getEditCustomer(Request $request, $id) {
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customer = $customerModel->where('id', $id)->get()->toArray();
		$customer = array_shift($customer);
		$data = array();
		$data['customer']['id'] = $customer['id'];
		$data['customer']['name'] = $customer['name'];
		return view('apps.' . $app . '.edit-customer', array('data' => $data));
	}
	
	public function updateCustomer(Request $request) {
		$app = Session::get('appName');
		//$id = Input::get('id');
		$customerModel = new CustomerModel();
		$customer = $customerModel->where('id', $request->id)->update('name', $request->name);
		return redirect('customers');
	}
}
