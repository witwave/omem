@extends('layout')
@section('content-header')
    <h1>
        会员
        <small>新增</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
        <li><a href="{{ url('/members') }}">会员</a></li>
        <li class="active">新增</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">新增会员</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('members.store') }}" method="POST">
                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="name">姓名</label>
                                <input type="text" name="name" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="nickname">昵称</label>
                                <input type="text" name="nickname" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="phone">电话</label>
                                <input type="text" name="phone" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="sex">性别</label>
                                <input type="text" name="sex" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="email">常用邮箱</label>
                                <input type="text" name="email" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="pid">引推人</label>
                                <input type="text" name="pid" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="group_id">社群</label>
                                <input type="text" name="group_id" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="wechat">微信</label>
                                <input type="text" name="wechat" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="qq">QQ</label>
                                <input type="text" name="qq" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="avatar">图像</label>
                                <input type="text" name="avatar" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="company_name">公司名称</label>
                                <input type="text" name="company_name" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="company_site">公司网站</label>
                                <input type="text" name="company_site" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="position">职位</label>
                                <input type="text" name="position" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="industry">行业</label>
                                <input type="text" name="industry" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="born_date">出生年月</label>
                                <input type="text" name="born_date" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="born_location">出生位置</label>
                                <input type="text" name="born_location" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="live_city">居住城市</label>
                                <input type="text" name="live_city" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="address">常住地址</label>
                                <input type="text" name="address" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="sign">签名</label>
                                <input type="text" name="sign" class="form-control" value=""/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="mark">备注</label>
                                <input type="text" name="mark" class="form-control" value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">保存</button>
                        <a class="btn btn-default" href="{{ route('members.index') }}">返回</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

