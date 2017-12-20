<?php

namespace App\Http\Controllers;

use App\TransactionModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
	public function getTransactions() {
		$app = Session::get('appName');
		$transactionModel = new TransactionModel();
		$transactions = $transactionModel->orderBy('req_timestamp', 'asc')->get()->toArray();
		$data = array();
		$data['transactions'] = $transactions;
		return view('apps.' . $app . '.transactions', array('data' => $data));
	}
}
