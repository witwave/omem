<?php namespace App\Http\Controllers;

use App\Member;
use Input;
use Cookie;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Log;

class JoinController extends Controller
{
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

    public function showJoin()
    {
        $openid=$this->getMember()->openid;

        return view('join.join',compact('openid'));
    }

    public function join(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:10',
            'mobile' => 'required|digits:11',
            'openid' => 'required|unique:members',
            'wechat' => 'required|unique:members|max:100',
            'city' => 'required|max:100',
            'company' => 'required|max:120',
            'title' => 'required|max:120',
            'job' => 'required|max:120',
            'email' => 'email|max:120',
            'sign' => 'max:200'
        ]);
       // $inputs = Input::only('name', 'mobile', 'wechat', 'city', 'company', 'title', 'job', 'email', 'sign');
        $member_id=$this->getMemberId();
        Log:debug("member id:".$member_id);

        if($member_id!=null){
            $member= Member::find($member_id);
            $member->pid = Cookie::get('ref_pid',0);
            if(!$member->pid)
                $member->pid=0;
            $member->name = $request->input("name");
            $member->wechat = $request->input("wechat", '');
            $member->phone = $request->input("mobile");
            $member->qq = $request->input("qq", '');
            $member->email = $request->input("email",'');
            $member->position = $request->input("title");
            $member->industry = $request->input("job", '');
            $member->company_name = $request->input("company");
            $member->address = $request->input("address", '');
            $member->sign = $request->input("sign");
            if ($member->save()) {
                return redirect('/join')->with('success', '申请加入成功！<br/>赶快分享给其它小伙伴吧，可能有意想不到的惊喜哟');
            }
            else{
                return redirect('/join')->back('fail','申请失败，请重试');
            }
        }
        else{
            Log::debug('no find session member id');
            return redirect('/');
        }
    }

    public function success()
    {
        return view('join.success');
    }
}