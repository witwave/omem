@extends('main')
@section('title')
    全球时领袖社群-线下活动
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="container" style="margin-top:5px">
            <div class="alert alert-success" role="alert"><p>{!!Session::get('msg')!!}</p></div>
        </div>
    @endif
    <div class="jumbotron masthead">
        <div class="container">
            <h3>精彩有趣的线下活动</h3>

            <div>让我们一起面对面的交流吧</div>

        </div>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><strong>线下活动</strong></div>
        <!-- List group -->
        <ul class="list-group">
            @foreach($meetups as $item)
                <li class="list-group-item">
                    <a href="{{ url('meetup',$item->id) }}">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>{{ $item->name }}</h4>

                                <p>
                                    <small>{{ $item->summary }}</small>
                                </p>
                                <p></p>
                                <p class="text-right">
                                    <small>截止日期:
                                        <?php if (strtotime($item->end_time) < strtotime(date('Y-m-d'))):?>
                                        <span class="text-danger">已结束</span>
                                        <?php else:?>
                                        {{ date('Y-m-d',strtotime($item->end_time)) }}
                                        <?php endif?>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection