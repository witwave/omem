<?php namespace App\Http\Controllers;
use Input;
use Cookie;
use Session;
use Redirect;

use Illuminate\Http\Request;
class SignController extends Controller {
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
	* 显示签到二群码，用户扫描二维码可以进行签到
	*
	* @return Response
	*/
	public function index()
	{
		return view('sign.index');
	}
	
	/**
	* 签到，
	* 
	*/
	public function sign(Request $request)
	{
		/*
		$this->validate($request, [
			'name' => 'required|max:10',
			'mobile' => 'required|digits|max:13',
			'wechat'=>'required|uniqid|max:100',
			'city'=>'required|max:100',
			'company'=>'required|max:120',
			'title'=>'required|max:120',
			'job'=>'required|max:120',
			'email'=>'email|max:120',
			'sign'=>'max:200'
		]);
		$inputs=Input::only('name','mobile','wechat','city','company','title','job','email','sign');
		$inputs['pid']=Cookie::get('ref_pid');
		*/
		return redirect('sign.index')->with('msg', '签到成功！');
	}

	public function success(){
		return view('join.success');
	}
}