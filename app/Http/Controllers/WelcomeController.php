<?php namespace App\Http\Controllers;
use Input;
use Cookie;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
class WelcomeController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/
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
	* Show the application welcome screen to the user.
	*
	* @return Response
	*/
	public function index()
	{
		$response=new Response(view('welcome',['title'=>'全球时领袖社群']));
		$pid=Input::get('ref');
		return $response->withCookie(cookie()->forever('ref_pid', $pid));
	}
}