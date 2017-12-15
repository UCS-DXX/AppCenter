<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Method to call Home page view
	|--------------------------------------------------------------------------
	*/
	public function index()
	{
		return view('pages.home');
	}
	public function getRegister()
	{
		return view('pages.register');
	}
	public function getLogin()
	{
		return view('pages.login');
	}
}
