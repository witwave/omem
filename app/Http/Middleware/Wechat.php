<?php namespace App\Http\Middleware;
use App\Member;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Cookie;
use Overtrue\Wechat\Auth;
use Config;
use Session;
use Log;

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

		if (empty(Session::get('wechat_user'))) {
			$user = $auth->authorize(null, 'snsapi_userinfo','abc'); // 返回用户 Bag
            if($user){
                Session::set('wechat_user',$user);
                Session::set('openid',$user['openid']);
                Member::create([
                    'pid'=>Input::get('ref',0),
                    'qq'=>'',
                    'openid'=>$user['openid'],
                    'nickname'=>$user['nickname'],
                    'sex'=>$user['sex'],
                    'live_city'=>$user['city'],
                    'province'=>$user['province'],
                    'avatar'=>$user['headimgurl']
                ]);
                return $next($request);
            }else{
                return response('Unauthorized.', 401);
            }
            Log::debug('user'.json_encode($user));
			//Session::set('wechat_user',$user);

			// 跳转到其它授权才能访问的页面
           // mnnm,kn v gh
		}
        else{
            return $next($request);
        }

	}
}