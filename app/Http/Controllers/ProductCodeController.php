<?php

namespace App\Http\Controllers;

use App\ProductCodeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductCodeController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Method to call Product Code page view
	|--------------------------------------------------------------------------
	*/
	public function productcodes()
	{
		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->orderBy('id', 'asc')->get()->toArray();
		$data = array();
		$data['productcodes'] = $productCodes;
		return view('apps.' . $app . '.product-codes', array('data' => $data));
	}
	
	public function getProductCode(Request $request)
	{
		$app = Session::get('appName');
		return view('apps.' . $app . '.create-product-code');
	}
	
	public function postProductCode(Request $request)
	{
		$productCodeModel = new ProductCodeModel();
		$productCodeModel->id = 2;
		$productCodeModel->schemecode = $request->schemecode;
		$productCodeModel->transfer_type = $request->transfertype;
		$productCodeModel->active = $request->status;
		$productCodeModel->save();
		return redirect('product-codes');
	}
	
	public function getEditProductCode(Request $request) {
		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->where('id', $request->id)->get()->toArray();
		$productCodes = array_shift($productCodes);
		$data = array();
		$data['productcodes']['id'] = $productCodes['id'];
		$data['productcodes']['schemecode'] = $productCodes['schemecode'];
		$data['productcodes']['transfertype'] = $productCodes['transfer_type'];
		$data['productcodes']['status'] = $productCodes['active'];
		return view('apps.' . $app . '.edit-product-code', array('data' => $data));
	}
	
	public function updateProductCode(Request $request) {
		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->where('id', $request->id)->update(['schemecode' => $request->schemecode, 'transfer_type' => $request->transfertype, 'active' => $request->status]);
		return redirect('product-codes');
	}
}
