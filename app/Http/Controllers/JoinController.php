<?php namespace App\Http\Controllers;
use Input;
use Cookie;
use Session;
use Redirect;

use Illuminate\Http\Request;
class JoinController extends Controller {
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
		return view('join.index');
	}
	
	public function join(Request $request)
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
		return redirect('/')->with('msg', '申请加入成功！<br/>赶快分享给其它小伙伴吧，可能有意想不到的惊喜哟');
	}

	public function success(){
		return view('join.success');
	}
}