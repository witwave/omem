<?php $config_events = Config::get('wechat.events') ?>
@extends('layout')

@section('content-header')
    <h1>
        会员
        <small>查看</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
        <li><a href="{{ url('/members') }}">会员</a></li>
        <li class="active">查看</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-6">
            <div class="box box-danger">
                <div class="box-header">
                    时间线
                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal">新增事件</button>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">

                        <ul class="timeline">
                            @foreach($events as $day=>$items)

                                <li class="time-label">
                                  <span class="bg-red">
                                    {{ date('Y-m-d',strtotime($member->created_at))  }}
                                  </span>
                                </li>
                                @foreach($items as $event)
                                    <li>
                                        <i class="fa fa-{{$event->type}} bg-green"></i>

                                        <div class="timeline-item">
                                            <span class="time">
                                                <i class="fa fa-clock-o"></i>
                                                {{ date('H:m',strtotime($event->created_at))  }}
                                            </span>

                                            <h3 class="timeline-header">{{ isset($config_events[$event->type])?$config_events[$event->type]:$event->type }}</h3>

                                            <div class="timeline-body">
                                                {{ $event->content }}
                                                <p>
                                                    <small>{{ $event->mark }}</small>
                                                </p>
                                            </div>
                                            <div class='timeline-footer'>
                                                <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                                      style="display: inline;"
                                                      onsubmit="if(confirm('确认删除?')) { return true } else {return false };">
                                                    <input type="hidden" name="_method" value="DELETE"><input
                                                            type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-danger btn-xs" type="submit">删除</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach

                            <li class="time-label">
                              <span class="bg-green">
                                {{ date('Y-m-d',strtotime($member->created_at))  }}
                              </span>
                            </li>
                            <li>
                                <i class="fa fa-circle bg-blue"></i>

                                <div class="timeline-item">
                                    <span class="time">
                                        <i class="fa fa-clock-o"></i>
                                        {{ date('H:m',strtotime($member->created_at))  }}
                                    </span>

                                    <h3 class="timeline-header">申请加入</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- left column -->
        <div class="col-xs-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">会员信息</div>
                </div>
                <form>
                    <div class="box-body">
                        <div class="form-group">
                            <?php
                            /**
                            1:  BEGIN:VCARD
                            2:  VERSION:3.0
                            3:  N:Gump;Forrest
                            4:  FN:Forrest Gump
                            5:  ORG:Bubba Gump Shrimp Co.
                            6:  TITLE:Shrimp Man
                            7:  PHOTO;VALUE=URL;TYPE=GIF:http://www.site.com/dir_photos/my_photo.gif
                            8:  TEL;TYPE=WORK,VOICE:(111) 555-1212
                            9:  TEL;TYPE=HOME,VOICE:(404) 555-1212
                            10:  ADR;TYPE=WORK:;;100 Waters Edge;Baytown;LA;30314;United States of America
                            11:  LABEL;TYPE=WORK:100 Waters Edge\nBaytown, LA 30314\nUnited States of America
                            12:  ADR;TYPE=HOME:;;42 Plantation St.;Baytown;LA;30314;United States of America
                            13:  LABEL;TYPE=HOME:42 Plantation St.\nBaytown, LA 30314\nUnited States of America
                            14:  EMAIL;TYPE=PREF,INTERNET:forrestgump#qq.com
                            15:  REV:20080424T195243Z
                            16:  END:VCARD
                             **/

                            $card = "BEGIN:VCARD\nVERSION:3.0\n";
                            $card .= "FN:$member->name\nNICKNAME:$member->nickname\norG:$member->company_name\n";
                            $card .= "TITLE:$member->position\nTEL;TYPE=work:\nTEL:$member->phone\nEMAIL:$member->email\n";
                            $card .= "ADR;TYPE=HOME:;;$member->address\n";
                            $card .= "END:VCARD";
                            ?>
                            <label for="name">二维码名片</label>
                            <img src="{{ url('qrcode').'?size=200&text='.urlencode($card) }}"/>
                        </div>
                        <div class="form-group">
                            <label for="name">姓名</label>

                            <p class="form-control-static">{{$member->name}}</p>
                        </div>
                        <div class="form-group">
                            <label for="nickname">昵称</label>

                            <p class="form-control-static">{{$member->nickname}}</p>
                        </div>
                        <div class="form-group">
                            <label for="nickname">电话</label>

                            <p class="form-control-static">{{$member->phone}}</p>
                        </div>
                        <div class="form-group">
                            <label for="sex">性别</label>

                            <p class="form-control-static">{{$member->sex==1?'男':($member->sex==2?'女':'N/A')}}</p>
                        </div>
                        <div class="form-group">
                            <label for="wechat">微信</label>

                            <p class="form-control-static">{{$member->wechat}}</p>
                        </div>
                        <div class="form-group">
                            <label for="qq">QQ</label>

                            <p class="form-control-static">{{$member->qq}}</p>
                        </div>
                        <div class="form-group">
                            <label for="avatar">图像</label>

                            <p class="form-control-static">{{$member->avatar}}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">邮箱</label>

                            <p class="form-control-static">{{$member->email}}</p>
                        </div>
                        <div class="form-group">
                            <label for="company_name">公司</label>

                            <p class="form-control-static">{{$member->company_name}}</p>
                        </div>
                        <div class="form-group">
                            <label for="company_site">公司网站</label>

                            <p class="form-control-static">{{$member->company_site}}</p>
                        </div>
                        <div class="form-group">
                            <label for="position">职位</label>

                            <p class="form-control-static">{{$member->position}}</p>
                        </div>
                        <div class="form-group">
                            <label for="industry">行业</label>

                            <p class="form-control-static">{{$member->industry}}</p>
                        </div>
                        <div class="form-group">
                            <label for="born_date">出生年月</label>

                            <p class="form-control-static">{{$member->born_date}}</p>
                        </div>
                        <div class="form-group">
                            <label for="born_location">出生位置</label>

                            <p class="form-control-static">{{$member->born_location}}</p>
                        </div>
                        <div class="form-group">
                            <label for="live_city">出生城市</label>

                            <p class="form-control-static">{{$member->live_city}}</p>
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>

                            <p class="form-control-static">{{$member->address}}</p>
                        </div>
                        <div class="form-group">
                            <label for="sign">签名</label>

                            <p class="form-control-static">{{$member->sign}}</p>
                        </div>
                        <div class="form-group">
                            <label for="mark">备注</label>

                            <p class="form-control-static">{{$member->mark}}</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('modal')
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">新增事件</h4>
    </div>
    <div class="modal-body">
        @include('events.create')
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary btn-submit">保存</button>
    </div>
@endsection