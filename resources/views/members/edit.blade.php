@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Members / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('members.update', $member->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$member->id}}</p>
                </div>
                <div class="form-group">
                     <label for="id">ID</label>
                     <input type="text" name="id" class="form-control" value="{{$member->id}}"/>
                </div>
                    <div class="form-group">
                     <label for="pid">PID</label>
                     <input type="text" name="pid" class="form-control" value="{{$member->pid}}"/>
                </div>
                    <div class="form-group">
                     <label for=" openid"> OPENID</label>
                     <input type="text" name=" openid" class="form-control" value="{{$member-> openid}}"/>
                </div>
                    <div class="form-group">
                     <label for=" wechat"> WECHAT</label>
                     <input type="text" name=" wechat" class="form-control" value="{{$member-> wechat}}"/>
                </div>
                    <div class="form-group">
                     <label for=" qq"> QQ</label>
                     <input type="text" name=" qq" class="form-control" value="{{$member-> qq}}"/>
                </div>
                    <div class="form-group">
                     <label for=" avatar"> AVATAR</label>
                     <input type="text" name=" avatar" class="form-control" value="{{$member-> avatar}}"/>
                </div>
                    <div class="form-group">
                     <label for=" name"> NAME</label>
                     <input type="text" name=" name" class="form-control" value="{{$member-> name}}"/>
                </div>
                    <div class="form-group">
                     <label for=" nickname"> NICKNAME</label>
                     <input type="text" name=" nickname" class="form-control" value="{{$member-> nickname}}"/>
                </div>
                    <div class="form-group">
                     <label for=" sex"> SEX</label>
                     <input type="text" name=" sex" class="form-control" value="{{$member-> sex}}"/>
                </div>
                    <div class="form-group">
                     <label for=" email"> EMAIL</label>
                     <input type="text" name=" email" class="form-control" value="{{$member-> email}}"/>
                </div>
                    <div class="form-group">
                     <label for=" company_name"> COMPANY_NAME</label>
                     <input type="text" name=" company_name" class="form-control" value="{{$member-> company_name}}"/>
                </div>
                    <div class="form-group">
                     <label for=" company_site"> COMPANY_SITE</label>
                     <input type="text" name=" company_site" class="form-control" value="{{$member-> company_site}}"/>
                </div>
                    <div class="form-group">
                     <label for=" position"> POSITION</label>
                     <input type="text" name=" position" class="form-control" value="{{$member-> position}}"/>
                </div>
                    <div class="form-group">
                     <label for=" industry"> INDUSTRY</label>
                     <input type="text" name=" industry" class="form-control" value="{{$member-> industry}}"/>
                </div>
                    <div class="form-group">
                     <label for=" born_date"> BORN_DATE</label>
                     <input type="text" name=" born_date" class="form-control" value="{{$member-> born_date}}"/>
                </div>
                    <div class="form-group">
                     <label for=" born_location"> BORN_LOCATION</label>
                     <input type="text" name=" born_location" class="form-control" value="{{$member-> born_location}}"/>
                </div>
                    <div class="form-group">
                     <label for=" live_city"> LIVE_CITY</label>
                     <input type="text" name=" live_city" class="form-control" value="{{$member-> live_city}}"/>
                </div>
                    <div class="form-group">
                     <label for=" address"> ADDRESS</label>
                     <input type="text" name=" address" class="form-control" value="{{$member-> address}}"/>
                </div>
                    <div class="form-group">
                     <label for=" sign"> SIGN</label>
                     <input type="text" name=" sign" class="form-control" value="{{$member-> sign}}"/>
                </div>
                    <div class="form-group">
                     <label for=" mark"> MARK</label>
                     <input type="text" name=" mark" class="form-control" value="{{$member-> mark}}"/>
                </div>
                    <div class="form-group">
                     <label for=" deleted_at"> DELETED_AT</label>
                     <input type="text" name=" deleted_at" class="form-control" value="{{$member-> deleted_at}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('members.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection