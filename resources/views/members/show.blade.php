@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Members / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$member->id}}</p>
                </div>
                <div class="form-group">
                     <label for="id">ID</label>
                     <p class="form-control-static">{{$member->id}}</p>
                </div>
                    <div class="form-group">
                     <label for="pid">PID</label>
                     <p class="form-control-static">{{$member->pid}}</p>
                </div>
                    <div class="form-group">
                     <label for=" openid"> OPENID</label>
                     <p class="form-control-static">{{$member-> openid}}</p>
                </div>
                    <div class="form-group">
                     <label for=" wechat"> WECHAT</label>
                     <p class="form-control-static">{{$member-> wechat}}</p>
                </div>
                    <div class="form-group">
                     <label for=" qq"> QQ</label>
                     <p class="form-control-static">{{$member-> qq}}</p>
                </div>
                    <div class="form-group">
                     <label for=" avatar"> AVATAR</label>
                     <p class="form-control-static">{{$member-> avatar}}</p>
                </div>
                    <div class="form-group">
                     <label for=" name"> NAME</label>
                     <p class="form-control-static">{{$member-> name}}</p>
                </div>
                    <div class="form-group">
                     <label for=" nickname"> NICKNAME</label>
                     <p class="form-control-static">{{$member-> nickname}}</p>
                </div>
                    <div class="form-group">
                     <label for=" sex"> SEX</label>
                     <p class="form-control-static">{{$member-> sex}}</p>
                </div>
                    <div class="form-group">
                     <label for=" email"> EMAIL</label>
                     <p class="form-control-static">{{$member-> email}}</p>
                </div>
                    <div class="form-group">
                     <label for=" company_name"> COMPANY_NAME</label>
                     <p class="form-control-static">{{$member-> company_name}}</p>
                </div>
                    <div class="form-group">
                     <label for=" company_site"> COMPANY_SITE</label>
                     <p class="form-control-static">{{$member-> company_site}}</p>
                </div>
                    <div class="form-group">
                     <label for=" position"> POSITION</label>
                     <p class="form-control-static">{{$member-> position}}</p>
                </div>
                    <div class="form-group">
                     <label for=" industry"> INDUSTRY</label>
                     <p class="form-control-static">{{$member-> industry}}</p>
                </div>
                    <div class="form-group">
                     <label for=" born_date"> BORN_DATE</label>
                     <p class="form-control-static">{{$member-> born_date}}</p>
                </div>
                    <div class="form-group">
                     <label for=" born_location"> BORN_LOCATION</label>
                     <p class="form-control-static">{{$member-> born_location}}</p>
                </div>
                    <div class="form-group">
                     <label for=" live_city"> LIVE_CITY</label>
                     <p class="form-control-static">{{$member-> live_city}}</p>
                </div>
                    <div class="form-group">
                     <label for=" address"> ADDRESS</label>
                     <p class="form-control-static">{{$member-> address}}</p>
                </div>
                    <div class="form-group">
                     <label for=" sign"> SIGN</label>
                     <p class="form-control-static">{{$member-> sign}}</p>
                </div>
                    <div class="form-group">
                     <label for=" mark"> MARK</label>
                     <p class="form-control-static">{{$member-> mark}}</p>
                </div>
                    <div class="form-group">
                     <label for=" deleted_at"> DELETED_AT</label>
                     <p class="form-control-static">{{$member-> deleted_at}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('members.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('members.edit', $member->id) }}">Edit</a>
            <form action="#/$member->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection