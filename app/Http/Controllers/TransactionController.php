<?php

namespace App\Http\Controllers;

use App\TransactionModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

$GLOBALS = array(
    'flag' => 0
);

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('app');
    }

	public function getTransactions(Request $request) {
		$app = Session::get('appName');
		$transactionModel = new TransactionModel();

        $acc_no = $request->input('acc_no');
        $status = $request->input('status');
//        $transfer_date = $request->input('transfer_date');
        $req_no = $request->input('req_no');
        $bank_ref = $request->input('bank_ref');

        //$flag=0;
        $transactions = $transactionModel
            ->where(function ($query)  use ($acc_no) {
                if (!empty($acc_no)) {
                    $GLOBALS['flag'] = 1;
                    $query->where('bene_account_no', 'like', '%' . $acc_no . '%');
                }
            })
//            ->where(function ($query)  use ($transfer_date) {
//                if (!empty($transfer_date)) {
//                    $query->where('transfer_date', 'like', '%' . $transfer_date . '%');
//                }
//            })
            ->where(function ($query)  use ($status) {
                if (!empty($status)) {
                    $GLOBALS['flag'] = 1;
                    $query->where('status_code', 'like', '%' . $status . '%');
                }
            })
            ->where(function ($query)  use ($req_no) {
                if (!empty($req_no)) {
                    $GLOBALS['flag'] = 1;
                    $query->where('req_no', 'like', '%' . $req_no . '%');
                }
            })
            ->where(function ($query)  use ($bank_ref) {
                if (!empty($bank_ref)) {
                    $GLOBALS['flag'] = 1;
                    $query->whereRaw('LOWER(BANK_REF) LIKE \'%' . strtolower($bank_ref) . '%\'');
                }
            })
            ->orderBy('req_timestamp', 'asc');

        $a=1;

        if($GLOBALS['flag'] == 1)
            $transactions = $transactions->paginate(10,['*'],'resultPage');
        else
            $transactions = $transactions->paginate(10);


		return view('apps.' . $app . '.transactions')->with('transactions',$transactions);
	}
}
