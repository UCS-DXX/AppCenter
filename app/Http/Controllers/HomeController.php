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
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Register page view
	|--------------------------------------------------------------------------
	*/
	public function getRegister()
	{
		return view('pages.register');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Login page view
	|--------------------------------------------------------------------------
	*/
	public function getLogin()
	{
		return view('pages.login');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call Dashboard page view
	|--------------------------------------------------------------------------
	*/
	public function getDashboard()
	{
		return view('pages.dashboard');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call FormControls page view
	|--------------------------------------------------------------------------
	*/
	public function getFormControls()
	{
		return view('pages.form-controls');
	}
	
	/*
	|--------------------------------------------------------------------------
	| Method to call FormControls page view
	|--------------------------------------------------------------------------
	*/
	public function getResponsiveTables()
	{
		return view('pages.responsive-tables');
	}
}
