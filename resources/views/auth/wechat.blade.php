@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <div id="login_container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
    <script>
        var obj = new WxLogin({
            id:"login_container",
            appid: "{{ $appid }}",
            scope: "snsapi_login",
            redirect_uri: "{{ urlencode($callback_uri) }}",
            state: "",
            style: "",
            href: ""
        });
    </script>
@endsection

