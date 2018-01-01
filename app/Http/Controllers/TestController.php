<?php

namespace App\Http\Controllers;

use App\Test;
use App\TransactionModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index()
	{
		$test = new Test();
		$a = $test->get()->toArray();
		var_dump($a);
	}

    public function generateTransactions(){

        for($i=0;$i<10;$i++){
            $transactionModel = new TransactionModel();
            $transactionModel->bene_full_name = "Sample";
            $transactionModel->bene_account_no = 123456789;
            $transactionModel->bene_account_ifsc = "SAMPLE";
            $transactionModel->transfer_date = '2018-01-01 00:00:00';
            $transactionModel->transfer_amount = 0;
            $transactionModel->status_code = "SUCCESS";
            $transactionModel->req_no = 123;
            $transactionModel->bank_ref = "SAMPLE";
            $transactionModel->req_version = "SAMPLE";
            $transactionModel->req_timestamp = '2018-01-01 00:00:00';
            $transactionModel->customer_id = '123';
            $transactionModel->debit_account_no = '123';
            $transactionModel->attempt_no = '123';
            $transactionModel->save();
        }
        echo "10 Transactions Created Successfully";

    }
}
