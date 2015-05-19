<?php namespace App\Http\Controllers;
use Input;
use Cookie;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
class MeetupController extends Controller {
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
	public function index()
	{
		return view('meetup.index');
	}


	/**
	*
	*
	* @return Response
	*/
	public function show($id)
	{
		return view('meetup.detail');
	}
	
	/**
	*
	*
	* @return Response
	*/
	public function join($id)
	{
		return view('meetup.detail');
	}
}