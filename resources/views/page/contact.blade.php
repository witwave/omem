@extends('main')
@section('title')
    全球时领袖社群
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="container-fluid" style="margin-top:5px">
            <div class="alert alert-success" role="alert"><p>{!!Session::get('msg')!!}</p></div>
        </div>
    @endif
    <div class="jumbotron masthead">
        <div class="container">
            <h3>全球时领袖社群会员火热招幕中</h3>

            <div>让天下没有陌生的孰悉的人，打造全球最大的华人本地化文化交流社群</div>
            <p class="masthead-button-links">
                <a role="button" href="/join/apply" class="btn btn-lg btn-primary btn-shadow">立即加入</a>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="text-center text-primary">联系我们</h4>
            </div>
            <div class="col-xs-12">
                <dl>
                    <dt>QQ</dt>
                    <dd>
                        <p>xxx
                        </p>
                    </dd>
                    <dt>微信</dt>
                    <dd><p>xxxx</p>
                    </dd>
                    <dt>电话</dt>
                    <dd>
                        <p>xxxx
                        </p>
                    </dd>
                </dl>
            </div>
        </div>
        @include('partner')
    </div>
@endsection