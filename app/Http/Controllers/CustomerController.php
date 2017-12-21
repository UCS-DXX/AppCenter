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
		$customers = $customerModel->where('approval_status', 'a')->orderBy('name', 'asc')->get()->toArray();
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
		$customerModel->customer_id = $request->customer_id;
		$customerModel->approval_status = 'a';
		$customerModel->save();
		return redirect('customers');
	}
	
	public function getEditCustomer(Request $request) {
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customer = $customerModel->where('id', $request->id)->get()->toArray();
		$customer = array_shift($customer);
		$data = array();
		$data['customer']['id'] = $customer['id'];
		$data['customer']['name'] = $customer['name'];
		$data['customer']['customer_id'] = $customer['customer_id'];
		return view('apps.' . $app . '.edit-customer', array('data' => $data));
	}
	
	public function updateCustomer(Request $request) {
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customerModel->name = $request->name;
		$customerModel->customer_id = $request->customer_id;
		$customerModel->approval_status = 'u';
		$customerModel->save();
		//$customer = $customerModel->where('id', $request->id)->update(['name' => $request->name, 'customer_id' => $request->customer_id]);
		return redirect('customers');
	}
	
	public function getInactivateCustomers()
	{
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customers = $customerModel->where('approval_status', 'u')->orderBy('name', 'asc')->get()->toArray();
		$data = array();
		$data['customers'] = $customers;
		return view('apps.' . $app . '.active-customers', array('data' => $data));
	}
	
	public function activateCustomers(Request $request, $customerId)
	{
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customers = $customerModel->where('customer_id', $customerId)->update(['approval_status' => 'a']);
		return redirect('activate-customers');
	}
}
