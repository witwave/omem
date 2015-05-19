<?php namespace App\Http\Controllers;
use Input;
use Cookie;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
class PageController extends Controller {
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware('guest');
	}
	
	/**
	*
	*
	* @return Response
	*/
	public function about()
	{
		return view('page.about');
	}
	
	public function contact()
	{
		return view('page.contact');
	}
}