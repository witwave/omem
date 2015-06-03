@extends('layout')
@section('content-header')
    <h1>
        报名会员
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>控制台 </a></li>
        <li><a href="{{ url('/meetups') }}"><i class="fa fa-task"></i>活动 </a></li>
        <li class="active">报名会员</li>
    </ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{ $meetup->name }}</h3>

                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <form action="{{url('address')}}" method="GET">
                                <input type="text" name="q" class="form-control input-sm" placeholder="姓名|电话"
                                       value="{{$q}}"/>
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>报名时间</th>
                            <th>是否签到</th>
                            <th>签到时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($joiners as $joiner)
                            <tr>
                                <td>{{$joiner->id}}</td>
                                <td class="mailbox-name">
                                    @if($joiner->member_id>0)
                                        <a href="{{ route('members.show', $joiner->member_id) }}" target="_blank">
                                            {{$joiner->name}}
                                        </a>
                                    @else
                                        {{$joiner->name}}
                                    @endif
                                </td>
                                <td>{{$joiner->mobile}}</td>
                                <td>{{$joiner->created_at}}</td>
                                <td>{{$joiner->signed==1?'是':'否'}}</td>
                                <td>{{$joiner->signed_time}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <?php echo $joiners->render()?>
                </div>
            </div>
        </div>
    </div>
@endsection
