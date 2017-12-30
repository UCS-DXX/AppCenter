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
        $transfer_date = $request->input('transfer_date');
        $req_no = $request->input('req_no');
        $bank_ref = $request->input('bank_ref');

        $transactions = $transactionModel
            ->where(function ($query)  use ($acc_no) {
                if (sizeof($acc_no)>0) {
                    $query->where('bene_account_no', 'like', '%' . $acc_no . '%');
                }
            })
            ->where(function ($query)  use ($transfer_date) {
                if (sizeof($transfer_date)>0) {
                    $query->where('transfer_date', 'like', '%' . $transfer_date . '%');
                }
            })
            ->where(function ($query)  use ($status) {
                if (sizeof($status)>0) {
                    $query->where('status_code', 'like', '%' . $status . '%');
                }
            })
            ->where(function ($query)  use ($req_no) {
                if (sizeof($req_no)>0) {
                    $query->where('req_no', 'like', '%' . $req_no . '%');
                }
            })
            ->where(function ($query)  use ($bank_ref) {
                if (sizeof($bank_ref)>0) {
                    $query->where('bank_ref', 'like', '%' . $bank_ref . '%');
                }
            })
            ->orderBy('req_timestamp', 'asc')->paginate(10);


		return view('apps.' . $app . '.transactions')->with('transactions',$transactions);
	}
}
