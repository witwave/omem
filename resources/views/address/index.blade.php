@extends('layout')
@section('content-header')
    <h1>
        通讯录
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>控制台 </a></li>
        <li class="active">通讯录</li>
    </ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">所有联系人</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>电话</th>
                            <th>微信</th>
                            <th>公司</th>
                            <th class="text-right">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td><input type="checkbox" value="{{$member->id}}"/></td>
                                <td class="mailbox-name">
                                    <a href="{{ route('address.show', $member->id) }}" target="_blank">
                                        {{$member->name?$member->name:$member->nickname}}
                                    </a>
                                </td>
                                <td>{{$member->sex==1?'男':($member->sex==2?'女':'N/A')}}</td>
                                <td>{{$member->phone}}</td>
                                <td>{{$member->wechat}}</td>
                                <td>{{$member->company_name}}</td>
                                <td class="text-right">
                                    <a class="btn btn-primary" href="{{ route('address.show', $member->id) }}">查看</a>
                                    <a class="btn btn-warning " href="{{ route('address.edit', $member->id) }}">编辑</a>
                                    <form action="{{ route('address.destroy', $member->id) }}" method="POST"
                                          style="display: inline;"
                                          onsubmit="if(confirm('确认要删除吗')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE"><input type="hidden"
                                                                                                  name="_token"
                                                                                                  value="{{ csrf_token() }}">
                                        <button class="btn btn-danger" type="submit">删除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('address.create') }}">新增</a>
                </div>
            </div>
        </div>
    </div>
@endsection
