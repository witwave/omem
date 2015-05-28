@extends('layout')

@section('content-header')
    <h1>
        社群
        <small>查看</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
        <li><a href="{{ url('/groups') }}">社群</a></li>
        <li class="active">查看</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">查看社群</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id">名称</label>
                            <p class="form-control-static">{{$group->name}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">描述</label>
                            <p class="form-control-static">{{$group->mark}}</p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-warning" href="{{ route('groups.edit', $group->id) }}">编辑</a>
                        <form action="#/$group->id" method="DELETE" style="display: inline;"
                              onsubmit="if(confirm('确认要删除吗?')) { return true } else {return false };">
                            <button class="btn btn-danger" type="submit">删除</button>
                        </form>
                        <a class="btn btn-default" href="{{ route('groups.index') }}">返回</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
