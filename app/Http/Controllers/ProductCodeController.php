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
		$productCodes = $productCodeModel->orderBy('id', 'desc')->paginate(10);
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

        $enable = 'N';

        if ($request->enable == 'Y') {
            $enable = 'Y';
        }

        $productCodeModel = ProductCodeModel::where('scheme_code',$request->schemecode)
            ->where('transfer_type',$request->transfertype)
            ->where('enable',$enable)
            ->where('validation',$request->validation)
            ->get()->toArray();

        if(!empty($productCodeModel)){
            Session::flash('err_msg','Scheme Code Already Exist');
            return back()->withInput(Input::all());
        }

        $currentUser = Session::get('user_id');

        $productCodeModel = new ProductCodeModel();
		$productCodeModel->id = 2;
		$productCodeModel->scheme_code = $request->schemecode;
		$productCodeModel->transfer_type = $request->transfertype;
		$productCodeModel->enable = $enable;
		$productCodeModel->validation = $request->validation;
        $productCodeModel->created_at = date('dMy');
        $productCodeModel->updated_at = date('dMy');
        $productCodeModel->created_by = $currentUser;
        $productCodeModel->updated_by = $currentUser;
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
		$data['productcodes']['schemecode'] = $productCodes['scheme_code'];
		$data['productcodes']['transfertype'] = $productCodes['transfer_type'];
		$data['productcodes']['enable'] = $productCodes['enable'];
		$data['productcodes']['validation'] = $productCodes['validation'];
		return view('apps.' . $app . '.edit-product-code', array('data' => $data));
	}

	public function updateProductCode(Request $request) {

        $enable = 'N';

        if ($request->enable == 'Y') {
            $enable = 'Y';
        }

        $productCodeModel = ProductCodeModel::where('scheme_code',$request->schemecode)
            ->where('transfer_type',$request->transfertype)
            ->where('enable',$enable)
            ->where('validation',$request->validation)
            ->get()->toArray();

        if(!empty($productCodeModel)){
            Session::flash('err_msg','Scheme Code Already Exist');
            return back()->withInput(Input::all());
        }

        $currentUser = Session::get('user_id');

		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->where('id', $request->id)->update(['scheme_code' => $request->schemecode, 'transfer_type' => $request->transfertype, 'validation' => $request->validation, 'enable' => $enable, 'updated_at' => date('dMy'), 'updated_by' => $currentUser]);
		return redirect('product-codes');
	}
}
