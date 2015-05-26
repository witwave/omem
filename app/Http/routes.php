<?php
use Endroid\QrCode\QrCode;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| 首页：
分为:线下活动,社群介绍，申请加入，联系我们
|
 */
Route::get('/', 'WelcomeController@index'); //首页
Route::get('/aboutus', 'PageController@about'); //介绍页
Route::get('/contactus', 'PageController@contact'); //联系页
Route::get('join/apply', 'JoinController@showJoin'); //显示加入表单页
Route::get('join', 'JoinController@index'); //显示加入介绍页
Route::post('join', 'JoinController@join'); //处理加入页
Route::get('meetup', 'MeetupController@index'); //显示活动主页
Route::get('meetup/{id}', 'MeetupController@show'); //显示活动详细
Route::post('meetup/{id}/join', 'MeetupController@join'); //报名参加
Route::get('home', 'HomeController@index');

Route::get('wechat', ['middleware' => 'auth.wechat', 'uses' => 'WelcomeController@index']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::resource("tweets", "TweetController");
Route::resource("topics", "TopicController");

Route::resource("pages","PageController");
Route::resource("members","MemberController");
Route::resource("events","EventController");


Route::any('test/{abc}', function () {
    echo Request::path();
});


Route::get('qrcode', function () {
    $size = Input::get('size');
    $text = Input::get('text');
    if (!$size || !$text) {
        return '';
    }
    $qrCode = new QrCode();
    $qrCode->setText($text);
    $qrCode->setSize($size);
    $qrCode->setPadding(10);
    $response = Response::make($qrCode->get(), 200);
    $response->header('content-type', 'image/png');
    return $response;
});


Route::any('captcha', function () {
    Debugbar::info('test');
    if (Request::getMethod() == 'POST') {
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        } else {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $form = '<form method="post" action="captcha">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});

Route::any('event', function () {
    $response = Event::fire(new App\Events\UserLog(123, 123456));
    var_dump($response);
});