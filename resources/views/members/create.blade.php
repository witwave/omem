@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Members / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('members.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="pid">PID</label>
                    <input type="text" name="pid" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="group_id">GROUP_ID</label>
                    <input type="text" name="group_id" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="openid">OPENID</label>
                    <input type="text" name="openid" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="wechat">WECHAT</label>
                    <input type="text" name="wechat" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="qq">QQ</label>
                    <input type="text" name="qq" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="avatar">AVATAR</label>
                    <input type="text" name="avatar" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="text" name="name" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="nickname">NICKNAME</label>
                    <input type="text" name="nickname" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="phone">电话</label>
                    <input type="text" name="phone" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="sex">SEX</label>
                    <input type="text" name="sex" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="company_name">COMPANY_NAME</label>
                    <input type="text" name="company_name" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="company_site">COMPANY_SITE</label>
                    <input type="text" name="company_site" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="position">POSITION</label>
                    <input type="text" name="position" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="industry">INDUSTRY</label>
                    <input type="text" name="industry" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="born_date">BORN_DATE</label>
                    <input type="text" name="born_date" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="born_location">BORN_LOCATION</label>
                    <input type="text" name="born_location" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="live_city">LIVE_CITY</label>
                    <input type="text" name="live_city" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="address">ADDRESS</label>
                    <input type="text" name="address" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="sign">SIGN</label>
                    <input type="text" name="sign" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="mark">MARK</label>
                    <input type="text" name="mark" class="form-control" value=""/>
                </div>
                <button class="btn btn-primary" type="submit">保存</button>
                <a class="btn btn-default" href="{{ route('members.index') }}">返回</a>
            </form>
        </div>
    </div>


@endsection