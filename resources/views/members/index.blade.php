@extends('layout')
@section('content-header')
    <h1>
        会员
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>控制台 </a></li>
        <li class="active">会员</li>
    </ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('members.create') }}" class="btn btn-primary btn-block margin-bottom">新增</a>

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">社群</h3>

                    <div class='box-tools'>
                        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="{{ $gid==null?'active':''  }}">
                            <a href="{{ route('members.index') }}">所有</a>
                        </li>
                        @foreach($groups as $group)
                            <li class="{{ $gid==$group->id?'active':''  }}">
                                <a href="{{ route('members.index').'?gid='.$group->id }}">
                                    {{$group->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">所有会员</h3>

                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <form action="{{url('members')}}?gid={{$gid}}" method="GET">
                                <input type="text" name="q" class="form-control input-sm" placeholder="查找会员"
                                       value="{{$q}}"/>
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                        <div class="btn-group">
                            <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                        <div class="pull-right">
                            <?php if ($members->total() > 0):?>
                            <?php echo 1 + ($members->currentPage() - 1) * $size ?>-
                            <?php echo $members->currentPage() * $size?>/<?php echo $members->total()?>
                            <?php else:?>
                            没有数据
                            <?php endif?>
                            <div class="btn-group">
                                <a class="btn btn-default btn-sm"
                                   href="{{url('members')}}?gid={{$gid}}&page=<?php echo $members->perPage()?>">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                                <a class="btn btn-default btn-sm"
                                   href="{{url('members')}}?gid={{$gid}}&page=<?php echo $members->lastPage()?>">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.pull-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <td><input type="checkbox" value="{{$member->id}}"/></td>
                                    <td class="mailbox-name">
                                        <a href="{{ route('members.show', $member->id) }}" target="_blank">
                                            {{$member->name?$member->name:$member->nickname}}
                                        </a>
                                    </td>
                                    <td>{{$member->phone}}</td>
                                    <td>{{$member->wechat}}</td>
                                    <td>{{$member->sex==1?'男':($member->sex==2?'女':'N/A')}}</td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection