@extends('layout')

@section('content-header')
    <h1>
        社群
        <small>编辑</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
        <li><a href="{{ url('/groups') }}">社群</a></li>
        <li class="active">编辑</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">编辑社群</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('groups.update', $group->id) }}" method="POST">
                    <div class="box-body">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name">名称</label>
                            <input type="text" name="name" class="form-control" value="{{$group->name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="name">描述</label>
                            <input type="text" name="mark" class="form-control" value="{{$group->mark}}"/>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">保存</button>
                        <a class="btn btn-default" href="{{ route('groups.index') }}">返回</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
