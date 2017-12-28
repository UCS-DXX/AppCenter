<?php

namespace App\Http\Controllers;

use App\CustomerModel;
use App\CustomerRevisionsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class CustomerController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Method to call Customer page view
	|--------------------------------------------------------------------------
	*/
	public function customers(Request $request)
	{
		$app = Session::get('appName');
		$data = array();

		$customerModel = new CustomerModel();

		$app_id = $request->input('app_id');
		$name = $request->input('name');
		$customer_id = $request->input('customer_id');



        $customers = $customerModel->where('approval_status', 'a')
            ->where(function ($query)  use ($app_id) {
                if (sizeof($app_id)>0) {
                    $query->where('app_id', 'like', '%' . $app_id . '%');
                }
            })
            ->where(function ($query)  use ($name) {
                if (sizeof($name)>0) {
                    $query->where('name', 'like', '%' . $name . '%');
                }
            })
            ->where(function ($query)  use ($customer_id) {
                if (sizeof($customer_id)>0) {
                    $query->where('customer_id', 'like', '%' . $customer_id . '%');
                }
            })
            ->orderBy('name', 'asc')->paginate(10, ['*'], 'customers');

        $pendingCustomers = CustomerRevisionsModel::whereIn('revision_status', ['Created','Pending'])->orderBy('id', 'asc')->paginate(10, ['*'], 'pendingCustomers');

        $checkUser = DB::table('FT_CUSTOMERS')
            ->join('FT_CUSTOMERS_REVISIONS','FT_CUSTOMERS.customer_id','=','FT_CUSTOMERS_REVISIONS.customer_id')
            ->where('FT_CUSTOMERS_REVISIONS.revision_status','=','Pending')
            ->select('FT_CUSTOMERS_REVISIONS.customer_id')
            ->get();

        $data = array();
        $data['checkUser'] = json_decode($checkUser, true);

		return view('apps.' . $app . '.customers', array('data' => $data))->with('customers',$customers)->with('pendingCustomers',$pendingCustomers);
	}
	
	public function getCustomer(Request $request)
	{
		$app = Session::get('appName');
		$customer = array();
		$customer = Session::get('_old_input');
		return view('apps.' . $app . '.create-customer',compact('customer'));
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
		$customerRevisionsModel = new CustomerRevisionsModel();
		$customer_model = new CustomerModel();
		$customer = $customer_model->where('customer_id','=',$request->customer_id)->get()->toArray();
		if(empty($customer)) {
			$customerRevisionsModel->app_id = $request->app_id;
			$customerRevisionsModel->name = $request->name;
			$customerRevisionsModel->customer_id = $request->customer_id;
			$customerRevisionsModel->allow_neft = $neft;
			$customerRevisionsModel->allow_rtgs = $rtgs;
			$customerRevisionsModel->allow_imps = $imps;
			$customerRevisionsModel->enabled = $enable;
			$customerRevisionsModel->customers_row_id = 0;
			$customerRevisionsModel->revision_status = 'Created';
			$customerRevisionsModel->save();
			return redirect('customers');
		}
		else {
			Session::flash('err_msg','Customer Id Already Exist');
			return back()->withInput(Input::all());
		}
	}
	
	public function getEditCustomer(Request $request) {
		$app = Session::get('appName');

        $customerModel = new CustomerModel();
        $customer = $customerModel->where('id', $request->id)->get()->toArray();
        $customer = array_shift($customer);

        $checkUser = DB::table('FT_CUSTOMERS')
            ->join('FT_CUSTOMERS_REVISIONS','FT_CUSTOMERS.customer_id','=','FT_CUSTOMERS_REVISIONS.customer_id')
            ->where('FT_CUSTOMERS_REVISIONS.revision_status','=','Pending')
            ->select('FT_CUSTOMERS_REVISIONS.customer_id')
            ->get();

        $data1 = array();
        $data1['checkUser'] = json_decode($checkUser, true);

        foreach ($data1['checkUser'] as $key => $value){
            if($value['customer_id'] == $customer['customer_id']){
                return redirect('customers');
            }
        }
        unset($data1);




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

        $customerModel = new CustomerModel();
        $customer = $customerModel->where('id', $request->id)->get()->toArray();
        $customer = array_shift($customer);

        $checkUser = DB::table('FT_CUSTOMERS')
            ->join('FT_CUSTOMERS_REVISIONS','FT_CUSTOMERS.customer_id','=','FT_CUSTOMERS_REVISIONS.customer_id')
            ->where('FT_CUSTOMERS_REVISIONS.revision_status','=','Pending')
            ->select('FT_CUSTOMERS_REVISIONS.customer_id')
            ->get();

        $data1 = array();
        $data1['checkUser'] = json_decode($checkUser, true);

        foreach ($data1['checkUser'] as $key => $value){
            if($value['customer_id'] == $customer['customer_id']){
                return redirect('customers');
            }
        }
        unset($data1);


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
        $customerRevisionModel = new CustomerRevisionsModel();
        $customerRevisionModel->app_id = $request->app_id;
        $customerRevisionModel->name = $request->name;
        $customerRevisionModel->customer_id = $request->customer_id;
        $customerRevisionModel->allow_neft = $neft;
        $customerRevisionModel->allow_rtgs = $rtgs;
        $customerRevisionModel->allow_imps = $imps;
        $customerRevisionModel->enabled = $enable;
        $customerRevisionModel->customers_row_id = $request->id;
        $customerRevisionModel->revision_status = 'Pending';
        $customerRevisionModel->save();
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
        $data = array();

        $customerRevisionsModel = new CustomerRevisionsModel();
        $customers = $customerRevisionsModel->where('revision_status', 'Created')->orWhere('revision_status', 'Pending')->orderBy('id', 'asc')->get()->toArray();
		$data['customers'] = $customers;

		return view('apps.' . $app . '.active-customers', array('data' => $data));
	}
	
	public function activateCustomers(Request $request, $customerId,$row_id)
	{
		$app = Session::get('appName');

		$customerRevisionModel = CustomerRevisionsModel::find($row_id);

		if($customerRevisionModel->revision_status == 'Created'){
            $customerModel = new CustomerModel();
            $customerModel->app_id = $customerRevisionModel->app_id;
            $customerModel->name = $customerRevisionModel->name;
            $customerModel->customer_id = $customerRevisionModel->customer_id;
            $customerModel->allow_neft = $customerRevisionModel->allow_neft;
            $customerModel->allow_rtgs = $customerRevisionModel->allow_rtgs;
            $customerModel->allow_imps = $customerRevisionModel->allow_imps;
            $customerModel->enabled = $customerRevisionModel->enabled;
            $customerModel->approval_status = 'a';
            $customerModel->save();

            $customerRevisionModel->revision_status = 'Approved';
            $customerRevisionModel->save();

            return redirect('activate-customers');
        }

        if($customerRevisionModel->revision_status == 'Pending'){
            $customerModel = CustomerModel::find($customerRevisionModel->customers_row_id);
            $customerModel->app_id = $customerRevisionModel->app_id;
            $customerModel->name = $customerRevisionModel->name;
            $customerModel->customer_id = $customerRevisionModel->customer_id;
            $customerModel->allow_neft = $customerRevisionModel->allow_neft;
            $customerModel->allow_rtgs = $customerRevisionModel->allow_rtgs;
            $customerModel->allow_imps = $customerRevisionModel->allow_imps;
            $customerModel->enabled = $customerRevisionModel->enabled;
            $customerModel->approval_status = 'a';
            $customerModel->approved_id = $customerRevisionModel->id;
            $customerModel->save();

            $customerRevisionModel->revision_status = 'Approved';
            $customerRevisionModel->save();

            return redirect('activate-customers');
        }

	}

    public function rejectCustomers($id)
    {
        $customerRevisionModel = CustomerRevisionsModel::find($id);
        $customerRevisionModel->revision_status = 'Rejected';
        $customerRevisionModel->save();
        return redirect('activate-customers');

    }
}
