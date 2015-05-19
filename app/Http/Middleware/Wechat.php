<?php namespace App\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Overtrue\Wechat\Auth;
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
		$appId  = 'wx3cf0f39249eb0e60';
		$secret = 'f1c242f4f28f735d4687abb469072a29';
		$auth = new Auth($appId, $secret);
		// 请一定要自己存储用户的登录信息，不要每次都授权
		if (empty($_SESSION['logged_user'])) {
			$user = $auth->authorize($to = null, $scope = 'snsapi_userinfo', $state = 'STATE'); // 返回用户 Bag
			$_SESSION['logged_user'] = $user;
			// 跳转到其它授权才能访问的页面
		}
	
		return $next($request);
	}
}