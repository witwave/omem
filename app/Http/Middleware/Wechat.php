<?php namespace App\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Cookie;
use Overtrue\Wechat\Auth;
use Config;
use Session;

class Wechat {
	/**
	* The Guard implementation.
	*
	* @var Guard
	*/
	protected $auth;
	/**
	* Create a new filter instance.
	*
	* @param  Guard  $auth
	* @return void
	*/
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
	/**
	* Handle an incoming request.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \Closure  $next
	* @return mixed
	*/
	public function handle($request, Closure $next)
	{
		$appId  = Config::get('wechat.appid');
		$secret = Config::get('wechat.appsecret');
		
		$auth = new Auth($appId, $secret);
		// 请一定要自己存储用户的登录信息，不要每次都授权
        //var_dump($request->url());exit();
		if (empty($_SESSION['wechat_user'])) {
			$user = $auth->authorize($request->url(), 'snsapi_userinfo',''); // 返回用户 Bag
			//Session::set('wechat_user',$user);
            $_SESSION['wechat_user']=$user;
			// 跳转到其它授权才能访问的页面

		}
	
		return $next($request);
	}
}