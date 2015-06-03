@extends('layout')
@section('content-header')
    <h1>
        活动
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>控制台 </a></li>
        <li class="active">活动</li>
    </ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">所有活动</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>标题</th>
                            <th>报名结束时间</th>
                            <th>最大人数</th>
                            <th>报名人数</th>
                            <th>是否发布</th>
                            <th>价格</th>
                            <th>浏览次数</th>
                            <th>浏览人数</th>
                            <th class="text-right">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($meetups as $meetup)
                            <tr>
                                <td>{{$meetup->id}}</td>
                                <td>{{$meetup->name}}</td>
                                <td>{{$meetup->end_time}}</td>
                                <td>{{$meetup->max_count}}</td>
                                <td>{{$meetup->join_count}}</td>
                                <td>{{$meetup->online}}</td>
                                <td>{{$meetup->price}}</td>
                                <td>{{$meetup->pv}}</td>
                                <td>{{$meetup->uv}}</td>
                                <td class="text-right">
                                    <a class="btn btn-default" title="显示签到二维码" target="_blank"
                                       href="{{ url('qrcode').'?size=300&text='.urlencode( url('meetup',$meetup->id).'/sign') }}">签到</a>
                                    <a class="btn btn-primary" title="查看活动报名"
                                       href="{{ route('meetups.show', $meetup->id) }}">查看</a>
                                    <a class="btn btn-warning " href="{{ route('meetups.edit', $meetup->id) }}">编辑</a>

                                    <form action="{{ route('meetups.destroy', $meetup->id) }}" method="POST"
                                          style="display: inline;"
                                          onsubmit="if(confirm('确认要删除吗')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden"
                                               name="_token"
                                               value="{{ csrf_token() }}">
                                        <button class="btn btn-danger" type="submit">删除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('meetups.create') }}">新增</a>
                </div>
            </div>
        </div>
    </div>
@endsection
