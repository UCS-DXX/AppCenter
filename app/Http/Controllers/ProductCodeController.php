<?php

namespace App\Http\Controllers;

use App\ProductCodeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProductCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('app');
    }

	public function productcodes()
	{
		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->orderBy('id', 'asc')->orderBy('id', 'asc')->paginate(10);
		$data = array();
		$data['productcodes'] = $productCodes;
		return view('apps.' . $app . '.product-codes', array('data' => $data));
	}

	public function getProductCode(Request $request)
	{
		$app = Session::get('appName');

        $product_code = array();
        $product_code = Session::get('_old_input');

		return view('apps.' . $app . '.create-product-code',compact('product_code'));
	}

	public function postProductCode(Request $request)
	{

        $productCodeModel = ProductCodeModel::where('schemecode',$request->schemecode)
            ->where('transfer_type',$request->transfertype)
//            ->where('active',$request->status)
            ->where('validation',$request->validation)
            ->get()->toArray();

        if(!empty($productCodeModel)){
            Session::flash('err_msg','Product Code Already Exist');
            return back()->withInput(Input::all());
        }

		$productCodeModel = new ProductCodeModel();
		$productCodeModel->id = 2;
		$productCodeModel->schemecode = $request->schemecode;
		$productCodeModel->transfer_type = $request->transfertype;
//		$productCodeModel->active = $request->status;
		$productCodeModel->validation = $request->validation;
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
//		$data['productcodes']['status'] = $productCodes['active'];
		$data['productcodes']['validation'] = $productCodes['validation'];
		return view('apps.' . $app . '.edit-product-code', array('data' => $data));
	}

	public function updateProductCode(Request $request) {

        $productCodeModel = ProductCodeModel::where('schemecode',$request->schemecode)
            ->where('transfer_type',$request->transfertype)
//            ->where('active',$request->status)
            ->where('validation',$request->validation)
            ->get()->toArray();

        if(!empty($productCodeModel)){
            Session::flash('err_msg','Product Code Already Exist');
            return back()->withInput(Input::all());
        }

		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->where('id', $request->id)->update(['schemecode' => $request->schemecode, 'transfer_type' => $request->transfertype, 'validation' => $request->validation]);
		return redirect('product-codes');
	}
}
