@extends('layout')

@section('content-header')
    <h1>
        活动
        <small>新增</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
        <li><a href="{{ url('/groups') }}">社群</a></li>
        <li class="active">新增活动</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">新增活动</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('meetups.store') }}" method="POST">
                    <div class="box-body">
                        @include('errors.flash')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name">标题</label>
                            <input type="text" name="title" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="summary">摘要</label>
                            <textarea type="text" name="summary" class="form-control" cols="60" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">内容</label>
                            <textarea class="textarea" name="content" placeholder=""
                                      style="width: 100%; min-height: 200px;
                                       font-size: 14px;
                                       line-height: 18px;
                                      border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="end_time">报名截止日期</label>

                                <div class="input-group">
                                    <input type="text" class="form-control date-mask" name="end_time"
                                           value="{{ date('Y-m-d') }}"/>

                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="max_count">最大人数</label>
                                <input type="number" name="max_count" class="form-control" min="0" value="0"/>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="price">价格</label>

                                <div class="input-group">
                                    <span class="input-group-addon">￥</span>
                                    <input type="number" class="form-control" name="price" value="0" min="0">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mark">备注</label>
                            <input type="text" name="mark" class="form-control" value=""/>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="online" value="1"> 是否发布
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">保存</button>
                        <a class="btn btn-default" href="{{ route('meetups.index') }}">返回</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
