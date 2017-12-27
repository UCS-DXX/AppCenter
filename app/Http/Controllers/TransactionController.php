<?php

namespace App\Http\Controllers;

use App\TransactionModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
	public function getTransactions(Request $request) {
		$app = Session::get('appName');
		$transactionModel = new TransactionModel();

        $acc_no = $request->input('acc_no');
        $status = $request->input('status');

        $transactions = $transactionModel
            ->where(function ($query)  use ($acc_no) {
                if (sizeof($acc_no)>0) {
                    $query->where('bene_account_no', 'like', '%' . $acc_no . '%');
                }
            })
            ->where(function ($query)  use ($status) {
                if (sizeof($status)>0) {
                    $query->where('status_code', 'like', '%' . $status . '%');
                }
            })
            ->orderBy('req_timestamp', 'asc')->get()->toArray();

//		$transactions = $transactionModel->orderBy('req_timestamp', 'asc')->get()->toArray();
		$data = array();
		$data['transactions'] = $transactions;
		return view('apps.' . $app . '.transactions', array('data' => $data));
	}
}
