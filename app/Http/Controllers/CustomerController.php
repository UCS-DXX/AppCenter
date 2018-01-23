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
    public function __construct()
    {
        $this->middleware('app');
    }

    public function customers(Request $request)
    {
        $app = Session::get('appName');
        $data = array();

        $customerModel = new CustomerModel();

        $app_id = $request->input('app_id');
        $name = $request->input('name');
        $customer_id = $request->input('customer_id');


        $customers = $customerModel->whereIn('approval_status', ['a', 'u'])
            ->where(function ($query) use ($app_id) {
                if (sizeof($app_id) > 0) {
                    $query->where('app_id', 'like', '%' . $app_id . '%');
                }
            })
            ->where(function ($query) use ($name) {
                if (sizeof($name) > 0) {
                    $query->whereRaw('LOWER(NAME) LIKE \'%' . strtolower($name) . '%\'');
                }
            })
            ->where(function ($query) use ($customer_id) {
                if (sizeof($customer_id) > 0) {
                    $query->where('customer_id', 'like', '%' . $customer_id . '%');
                }
            })
            ->orderBy('name', 'asc')->paginate(10, ['*'], 'customers');

        $pendingCustomers = CustomerRevisionsModel::whereIn('revision_status', ['Created', 'Pending'])->orderBy('id', 'asc')->paginate(10, ['*'], 'pendingCustomers');

        $checkUser = DB::table('FT_CUSTOMERS')
            ->join('FT_CUSTOMERS_REVISIONS', 'FT_CUSTOMERS.customer_id', '=', 'FT_CUSTOMERS_REVISIONS.customer_id')
            ->where('FT_CUSTOMERS_REVISIONS.revision_status', '=', 'Pending')
            ->select('FT_CUSTOMERS_REVISIONS.customer_id')
            ->get();

        $data = array();
        $data['checkUser'] = json_decode($checkUser, true);

        return view('apps.' . $app . '.customers', array('data' => $data))->with('customers', $customers)->with('pendingCustomers', $pendingCustomers);
    }

    public function getCustomer(Request $request)
    {
        $app = Session::get('appName');
        $customer = array();
        $customer = Session::get('_old_input');
        return view('apps.' . $app . '.create-customer', compact('customer'));
    }

    public function postCustomer(Request $request)
    {
        $neft = 'N';
        $rtgs = 'N';
        $imps = 'N';
        $enable = 'N';
        $is_dailylimit = 'N';
        $is_transactionlimit = 'N';
        if ($request->allow_neft != '') {
            $neft = 'Y';
        }
        if ($request->allow_rtgs != '') {
            $rtgs = 'Y';
        }
        if ($request->allow_imps != '') {
            $imps = 'Y';
        }
        if ($request->enabled != '') {
            $enable = 'Y';
        }
        if ($request->is_dailylimit != '') {
            $is_dailylimit = 'Y';
        }
        if ($request->is_transactionlimit != '') {
            $is_transactionlimit = 'Y';
        }

        $customerRevisionsModel = new CustomerRevisionsModel();
        $customer_model = new CustomerModel();
        $customer = $customer_model->where([['customer_id', '=', $request->customer_id],['app_id', '=', $request->app_id]])->get()->toArray();
        $customerPending = $customerRevisionsModel->where([['customer_id', '=', $request->customer_id],['app_id', '=', $request->app_id]])->get()->toArray();
        if (empty($customer) && empty($customerPending)) {
            $customerRevisionsModel->app_id = $request->app_id;
            $customerRevisionsModel->name = $request->name;
            $customerRevisionsModel->customer_id = $request->customer_id;
            $customerRevisionsModel->mobile_no = $request->mobile_no;
            $customerRevisionsModel->mmid = $request->mmid;
            $customerRevisionsModel->identity_user_id = $request->identity_user_id;
            $customerRevisionsModel->is_dailylimit = $is_dailylimit;
            $customerRevisionsModel->daily_limit_amt = $request->daily_limit_amt;
            $customerRevisionsModel->is_transactionlimit = $is_transactionlimit;
            $customerRevisionsModel->transaction_limit_amt = $request->transaction_limit_amt;
            $customerRevisionsModel->allow_neft = $neft;
            $customerRevisionsModel->allow_rtgs = $rtgs;
            $customerRevisionsModel->allow_imps = $imps;
            $customerRevisionsModel->enabled = $enable;
            $customerRevisionsModel->customers_row_id = 0;
            $customerRevisionsModel->revision_status = 'Created';
            $customerRevisionsModel->created_at = date('dMy');
            $customerRevisionsModel->updated_at = date('dMy');
            $customerRevisionsModel->save();
            return redirect('customers');
        } else {
            Session::flash('err_msg', 'Customer Id with App ID Already Exist');
            return back()->withInput(Input::all());
        }
    }

    public function getEditCustomer(Request $request)
    {
        $app = Session::get('appName');

        if (Session::get('maker') != 1) {
            return redirect('dashboard');
        }

        $customerModel = new CustomerModel();
        $customer = $customerModel->where('id', $request->id)->get()->toArray();
        $customer = array_shift($customer);

        $checkUser = DB::table('FT_CUSTOMERS')
            ->join('FT_CUSTOMERS_REVISIONS', 'FT_CUSTOMERS.customer_id', '=', 'FT_CUSTOMERS_REVISIONS.customer_id')
            ->where('FT_CUSTOMERS_REVISIONS.revision_status', '=', 'Pending')
            ->select('FT_CUSTOMERS_REVISIONS.customer_id')
            ->get();

        $data1 = array();
        $data1['checkUser'] = json_decode($checkUser, true);

        foreach ($data1['checkUser'] as $key => $value) {
            if ($value['customer_id'] == $customer['customer_id']) {
                return redirect('customers');
            }
        }
        unset($data1);


        $data = array();
        $data['customer']['id'] = $customer['id'];
        $data['customer']['app_id'] = $customer['app_id'];
        $data['customer']['name'] = $customer['name'];
        $data['customer']['allow_neft'] = $customer['allow_neft'];
        $data['customer']['allow_imps'] = $customer['allow_imps'];
        $data['customer']['allow_rtgs'] = $customer['allow_rtgs'];
        $data['customer']['enabled'] = $customer['enabled'];
        $data['customer']['customer_id'] = $customer['customer_id'];

        $data['customer']['mobile_no'] = $customer['mobile_no'];
        $data['customer']['mmid'] = $customer['mmid'];
        $data['customer']['identity_user_id'] = $customer['identity_user_id'];
        $data['customer']['is_dailylimit'] = $customer['is_dailylimit'];
        $data['customer']['daily_limit_amt'] = $customer['daily_limit_amt'];
        $data['customer']['is_transactionlimit'] = $customer['is_transactionlimit'];
        $data['customer']['transaction_limit_amt'] = $customer['transaction_limit_amt'];

        return view('apps.' . $app . '.edit-customer', array('data' => $data));
    }

    public function updateCustomer(Request $request)
    {

        if (Session::get('maker') != 1) {
            return redirect('dashboard');
        }

        $customerModel = new CustomerModel();
        $customer = $customerModel->where('id', $request->id)->get()->toArray();
        $customer = array_shift($customer);

        $customerID = $customer['customer_id'];

        $checkUser = DB::table('FT_CUSTOMERS')
            ->join('FT_CUSTOMERS_REVISIONS', 'FT_CUSTOMERS.customer_id', '=', 'FT_CUSTOMERS_REVISIONS.customer_id')
            ->where('FT_CUSTOMERS_REVISIONS.revision_status', '=', 'Pending')
            ->select('FT_CUSTOMERS_REVISIONS.customer_id')
            ->get();

        $data1 = array();
        $data1['checkUser'] = json_decode($checkUser, true);

        foreach ($data1['checkUser'] as $key => $value) {
            if ($value['customer_id'] == $customer['customer_id']) {
                return redirect('customers');
            }
        }
        unset($data1);


        $neft = 'N';
        $rtgs = 'N';
        $imps = 'N';
        $enable = 'N';
        $is_dailylimit = 'N';
        $is_transactionlimit = 'N';
        if ($request->allow_neft != '') {
            $neft = 'Y';
        }
        if ($request->allow_rtgs != '') {
            $rtgs = 'Y';
        }
        if ($request->allow_imps != '') {
            $imps = 'Y';
        }
        if ($request->enabled != '') {
            $enable = 'Y';
        }
        if ($request->is_dailylimit != '') {
            $is_dailylimit = 'Y';
        }
        if ($request->is_transactionlimit != '') {
            $is_transactionlimit = 'Y';
        }
        $customerRevisionModel = new CustomerRevisionsModel();
        $customerRevisionModel->app_id = $request->app_id;
        $customerRevisionModel->name = $request->name;
        $customerRevisionModel->customer_id = $customerID;

        $customerRevisionModel->mobile_no = $request->mobile_no;
        $customerRevisionModel->mmid = $request->mmid;
        $customerRevisionModel->identity_user_id = $request->identity_user_id;
        $customerRevisionModel->is_dailylimit = $is_dailylimit;
        $customerRevisionModel->daily_limit_amt = $request->daily_limit_amt;
        $customerRevisionModel->is_transactionlimit = $is_transactionlimit;
        $customerRevisionModel->transaction_limit_amt = $request->transaction_limit_amt;

        $customerRevisionModel->allow_neft = $neft;
        $customerRevisionModel->allow_rtgs = $rtgs;
        $customerRevisionModel->allow_imps = $imps;
        $customerRevisionModel->enabled = $enable;
        $customerRevisionModel->customers_row_id = $request->id;
        $customerRevisionModel->revision_status = 'Pending';
        $customerRevisionModel->created_at = date('dMy');
        $customerRevisionModel->updated_at = date('dMy');
        $customerRevisionModel->save();

        $customerModel = $customerModel->where('id', $request->id)->update(['approval_status' => 'u']);

        return redirect('customers');
    }

    public function viewCustomer($id)
    {
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

        if (Session::get('checker') != 1) {
            return redirect('dashboard');
        }

        $customers = CustomerRevisionsModel::where('revision_status', 'Created')->orWhere('revision_status', 'Pending')->orderBy('id', 'asc')->paginate(10);

        return view('apps.' . $app . '.active-customers')->with('customers', $customers);
    }

    public function activateCustomers(Request $request, $customerId, $row_id)
    {
        $app = Session::get('appName');

        if (Session::get('checker') != 1) {
            return redirect('dashboard');
        }

        $customerRevisionModel = CustomerRevisionsModel::find($row_id);

        if ($customerRevisionModel->revision_status == 'Created') {
            $customerModel = new CustomerModel();
            $customerModel->app_id = $customerRevisionModel->app_id;
            $customerModel->name = $customerRevisionModel->name;
            $customerModel->customer_id = $customerRevisionModel->customer_id;

            $customerModel->mobile_no = $customerRevisionModel->mobile_no;
            $customerModel->mmid = $customerRevisionModel->mmid;
            $customerModel->identity_user_id = $customerRevisionModel->identity_user_id;
            $customerModel->is_dailylimit = $customerRevisionModel->is_dailylimit;
            $customerModel->daily_limit_amt = $customerRevisionModel->daily_limit_amt;
            $customerModel->is_transactionlimit = $customerRevisionModel->is_transactionlimit;
            $customerModel->transaction_limit_amt = $customerRevisionModel->transaction_limit_amt;

            $customerModel->allow_neft = $customerRevisionModel->allow_neft;
            $customerModel->allow_rtgs = $customerRevisionModel->allow_rtgs;
            $customerModel->allow_imps = $customerRevisionModel->allow_imps;
            $customerModel->enabled = $customerRevisionModel->enabled;
            $customerModel->approval_status = 'a';
            $customerModel->created_at = date('dMy');
            $customerModel->updated_at = date('dMy');
            $customerModel->save();

            $customerRevisionModel->revision_status = 'Approved';
            $customerRevisionModel->updated_at = date('dMy');
            $customerRevisionModel->save();

            return redirect('activate-customers');
        }

        if ($customerRevisionModel->revision_status == 'Pending') {
            $customerModel = CustomerModel::find($customerRevisionModel->customers_row_id);
            $customerModel->app_id = $customerRevisionModel->app_id;
            $customerModel->name = $customerRevisionModel->name;
            $customerModel->customer_id = $customerRevisionModel->customer_id;

            $customerModel->mobile_no = $customerRevisionModel->mobile_no;
            $customerModel->mmid = $customerRevisionModel->mmid;
            $customerModel->identity_user_id = $customerRevisionModel->identity_user_id;
            $customerModel->is_dailylimit = $customerRevisionModel->is_dailylimit;
            $customerModel->daily_limit_amt = $customerRevisionModel->daily_limit_amt;
            $customerModel->is_transactionlimit = $customerRevisionModel->is_transactionlimit;
            $customerModel->transaction_limit_amt = $customerRevisionModel->transaction_limit_amt;

            $customerModel->allow_neft = $customerRevisionModel->allow_neft;
            $customerModel->allow_rtgs = $customerRevisionModel->allow_rtgs;
            $customerModel->allow_imps = $customerRevisionModel->allow_imps;
            $customerModel->enabled = $customerRevisionModel->enabled;
            $customerModel->approval_status = 'a';
            //$customerModel->approved_id = $customerRevisionModel->id;
            $customerModel->updated_at = date('dMy');
            $customerModel->save();

            $customerRevisionModel->revision_status = 'Approved';
            $customerRevisionModel->updated_at = date('dMy');
            $customerRevisionModel->save();

            return redirect('activate-customers');
        }

    }

    public function rejectCustomers($id)
    {

        if (Session::get('checker') != 1) {
            return redirect('dashboard');
        }

        $customerRevisionModel = CustomerRevisionsModel::find($id);

        if ($customerRevisionModel->revision_status == 'Pending') {
            $customerModel = CustomerModel::find($customerRevisionModel->customers_row_id);
            $customerModel->approval_status = 'a';
            $customerModel->save();
        }

        $customerRevisionModel->revision_status = 'Rejected';
        $customerRevisionModel->save();

        return redirect('activate-customers');

    }
}
