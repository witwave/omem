@extends('layout')
@section('content-header')
    <h1>
        社群
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>控制台 </a></li>
        <li class="active">社群</li>
    </ol>
@endsection
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">所有社群</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>名称</th>
                            <th class="text-right">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                            <tr>
                                <td>{{$group->id}}</td>
                                <td>{{$group->name}}</td>
                                <td class="text-right">
                                    <a class="btn btn-primary" href="{{ route('groups.show', $group->id) }}">查看</a>
                                    <a class="btn btn-warning " href="{{ route('groups.edit', $group->id) }}">编辑</a>

                                    <form action="{{ route('groups.destroy', $group->id) }}" method="POST"
                                          style="display: inline;"
                                          onsubmit="if(confirm('确认要删除吗?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-danger" type="submit">删除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('groups.create') }}">新增</a>
                </div>
            </div>
        </div>
    </div>
@endsection