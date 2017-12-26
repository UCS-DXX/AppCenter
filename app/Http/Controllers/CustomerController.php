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
		$neft = 'N';
		$rtgs = 'N';
		$imps = 'N';
		$enable = 'N';
		if($request->allow_neft != '') {
			$neft = 'Y';
		}
		if($request->allow_rtgs != '') {
			$rtgs = 'Y';
		}
		if($request->allow_imps != '') {
			$imps = 'Y';
		}
		if($request->enabled != '') {
			$enable = 'Y';
		}
		$customerModel = new CustomerModel();
		$customerModel->app_id = $request->app_id;
		$customerModel->name = $request->name;
		$customerModel->customer_id = $request->customer_id;
		$customerModel->allow_neft = $neft;
		$customerModel->allow_rtgs = $rtgs;
		$customerModel->allow_imps = $imps;
		$customerModel->enabled = $enable;
		$customerModel->approval_status = 'u';
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
		$data['customer']['app_id'] = $customer['app_id'];
		$data['customer']['name'] = $customer['name'];
		/*$data['customer']['low_balance_alert_at'] = $customer['low_balance_alert_at'];
		$data['customer']['identity_user_id'] = $customer['identity_user_id'];*/
		$data['customer']['allow_neft'] = $customer['allow_neft'];
		$data['customer']['allow_imps'] = $customer['allow_imps'];
		$data['customer']['allow_rtgs'] = $customer['allow_rtgs'];
		/*$data['customer']['string'] = $customer['string'];*/
		$data['customer']['enabled'] = $customer['enabled'];
		/*$data['customer']['is_retail'] = $customer['is_retail'];*/
		$data['customer']['customer_id'] = $customer['customer_id'];
		/*$data['customer']['created_by'] = $customer['created_by'];
		$data['customer']['updated_by'] = $customer['updated_by'];
		$data['customer']['created_at'] = $customer['created_at'];
		$data['customer']['updated_at'] = $customer['updated_at'];
		$data['customer']['lock_version'] = $customer['lock_version'];
		$data['customer']['approval_status'] = $customer['approval_status'];
		$data['customer']['last_action'] = $customer['last_action'];
		$data['customer']['approved_version'] = $customer['approved_version'];
		$data['customer']['approved_id'] = $customer['approved_id'];
		$data['customer']['needs_purpose_code'] = $customer['needs_purpose_code'];
		$data['customer']['reply_with_bene_name'] = $customer['reply_with_bene_name'];
		$data['customer']['allow_all_accounts'] = $customer['allow_all_accounts'];
		$data['customer']['notify_app_code'] = $customer['notify_app_code'];
		$data['customer']['notify_on_status_change'] = $customer['notify_on_status_change'];
		$data['customer']['is_filetoapi_allowed'] = $customer['is_filetoapi_allowed'];
		$data['customer']['allow_apbs'] = $customer['allow_apbs'];
		$data['customer']['apbs_user_no'] = $customer['apbs_user_no'];
		$data['customer']['notification_sent_at'] = $customer['notification_sent_at'];
		$data['customer']['allowed_relns'] = $customer['allowed_relns'];
		$data['customer']['bene_backend'] = $customer['bene_backend'];*/
		return view('apps.' . $app . '.edit-customer', array('data' => $data));
	}
	
	public function updateCustomer(Request $request) {
		$neft = 'N';
		$rtgs = 'N';
		$imps = 'N';
		$enable = 'N';
		if($request->allow_neft != '') {
			$neft = 'Y';
		}
		if($request->allow_rtgs != '') {
			$rtgs = 'Y';
		}
		if($request->allow_imps != '') {
			$imps = 'Y';
		}
		if($request->enabled != '') {
			$enable = 'Y';
		}
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customerModel->app_id = $request->app_id;
		$customerModel->name = $request->name;
		$customerModel->customer_id = $request->customer_id;
		$customerModel->allow_neft = $neft;
		$customerModel->allow_rtgs = $rtgs;
		$customerModel->allow_imps = $imps;
		$customerModel->enabled = $enable;
		$customerModel->approval_status = 'u';
		$customerModel->save();
		//$customer = $customerModel->where('id', $request->id)->update(['name' => $request->name, 'customer_id' => $request->customer_id]);
		return redirect('customers');
	}
	
	public function viewCustomer($id) {
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customers = $customerModel->where('id', $id)->orderBy('name', 'asc')->get()->toArray();
		$customers = array_shift($customers);
		$data = array();
		$data['customers'] = $customers;
		return view('apps.' . $app . '.view-customer', array('data' => $data));
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
	
	public function activateCustomers(Request $request, $customerId,$row_id)
	{
		$app = Session::get('appName');
		$customerModel = new CustomerModel();
		$customers = $customerModel->where('customer_id', $customerId)->update(['approval_status' => 'r']);
		$customers = $customerModel->where('id','=',$row_id)->update(['approval_status' => 'a']);
		return redirect('activate-customers');
	}
}
