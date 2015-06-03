@extends('main')
@section('title')
    全球时领袖社群
@endsection
@section('content')
    @include('errors.flash')
    @if (Session::has('msg'))
        <div class="container-fluid" style="margin-top:5px">
            <div class="alert alert-success" role="alert"><p>{!!Session::get('msg')!!}</p></div>
        </div>
    @endif
    <div class="jumbotron masthead">
        <div class="container">
            <h3>{{ $meetup->name }}</h3>
            <div>{{ $meetup->summary }}</div>

            <p class="masthead-button-links">
                <a role="button" href="#fmJoin" class="btn btn-lg btn-primary btn-shadow">立即报名</a>
            </p>
        </div>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">详细介绍</div>
        <div class="panel-body">
            <p>{!! $meetup->content !!}</p>
        </div>

        <div class="panel-heading">报名</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('meetup',$meetup->id).'/join' }}" method="POST" id="fmJoin">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="meetup_id" class="form-control" value="{{ $meetup->id }}"/>
                        <input type="hidden" name="meetup_name" class="form-control" value="{{ $meetup->name }}"/>
                        <div class="form-group">
                            <label for="name">姓名<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ Input::old('name') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="mobile">电话<span class="text-danger">*</span></label>
                            <input type="text" name="mobile" class="form-control" value="{{ Input::old('mobile') }}"/>
                        </div>

                        <button class="btn btn-primary" type="submit">提交</button>
                        <?php if (strtotime($meetup->end_time) < strtotime(date('Y-m-d'))):?>
                          <span class="text-danger">报名已经结束</span>
                        <?php endif?>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection