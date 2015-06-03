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

                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <form action="{{url('address')}}" method="GET">
                                <input type="text" name="q" class="form-control input-sm" placeholder="姓名|电话|微信|公司"
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
                            <th>性别</th>
                            <th>电话</th>
                            <th>微信</th>
                            <th>公司</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member->id}}</td>
                                <td class="mailbox-name">
                                    <a href="{{ route('members.show', $member->id) }}" target="_blank">
                                        {{$member->name?$member->name:$member->nickname}}
                                    </a>
                                </td>
                                <td>{{$member->sex==1?'男':($member->sex==2?'女':'N/A')}}</td>
                                <td>{{$member->phone}}</td>
                                <td>{{$member->wechat}}</td>
                                <td>{{$member->company_name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <?php echo $members->render()?>
                </div>
            </div>
        </div>
    </div>
@endsection
