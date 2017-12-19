<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index()
	{
		$test = new Test();
		$a = $test->get()->toArray();
		var_dump($a);
	}
}
