<?php namespace App\Http\Middleware;

use App\Member;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Cookie;
use Overtrue\Wechat\Auth;
use Config;
use Session;
use Log;
use Input;

class Wechat
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $appId = Config::get('wechat.appid');
        $secret = Config::get('wechat.appsecret');

        $auth = new Auth($appId, $secret);
        Log::debug("what handle");


        // 请一定要自己存储用户的登录信息，不要每次都授权
        //var_dump($request->url());exit();
        $member=Session::get('member');
        Log::debug('user' . json_encode($member));
        if (empty($member)) {
            Log::debug("no session, redirect to to wechat");
            $user = $auth->authorize(null, 'snsapi_userinfo', 'abc'); // 返回用户 Bag
            if ($user) {
                Log::debug("get the user");
                $member = Member::where('openid', '=', $user['openid'])->first();
                if (!$member) {

                    $member=  Member::create([
                        'group_id' => Input::get('gid', 0),
                        'pid' => Input::get('ref', 0),
                        'qq' => '',
                        'openid' => $user['openid'],
                        'nickname' => $user['nickname'],
                        'sex' => $user['sex'],
                        'live_city' => $user['city'],
                        'province' => $user['province'],
                        'avatar' => $user['headimgurl']
                    ]);
                    Log::debug("save the user"+$member->id);
                } else {
                    $member->nickname=$user['nickname'];
                    $member->live_city=$user['city'];
                    $member->sex=$user['sex'];
                    $member->province=$user['province'];
                    $member->avatar=$user['headimgurl'];
                    $member->save();
                    Log::debug("update the user"+$member->id);
                }
                Session::set('member',$member);
                Log::debug(json_encode($member));
                return $next($request);
            } else {
                Log::debug("user cancel to auth");
                return response('Unauthorized.', 401);
            }

            //Session::set('wechat_user',$user);

            // 跳转到其它授权才能访问的页面
            // mnnm,kn v gh
        } else {
            return $next($request);
        }

    }
}