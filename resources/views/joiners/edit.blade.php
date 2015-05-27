@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Joiners / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('joiners.update', $joiner->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$joiner->id}}</p>
                </div>
                <div class="form-group">
                     <label for="meetup_id">MEETUP_ID</label>
                     <input type="text" name="meetup_id" class="form-control" value="{{$joiner->meetup_id}}"/>
                </div>
                    <div class="form-group">
                     <label for="member_id">MEMBER_ID</label>
                     <input type="text" name="member_id" class="form-control" value="{{$joiner->member_id}}"/>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value="{{$joiner->name}}"/>
                </div>
                    <div class="form-group">
                     <label for="mobile">MOBILE</label>
                     <input type="text" name="mobile" class="form-control" value="{{$joiner->mobile}}"/>
                </div>
                    <div class="form-group">
                     <label for="meetup_name">MEETUP_NAME</label>
                     <input type="text" name="meetup_name" class="form-control" value="{{$joiner->meetup_name}}"/>
                </div>
                    <div class="form-group">
                     <label for="signed">SIGNED</label>
                     <input type="text" name="signed" class="form-control" value="{{$joiner->signed}}"/>
                </div>
                    <div class="form-group">
                     <label for="signed_time">SIGNED_TIME</label>
                     <input type="text" name="signed_time" class="form-control" value="{{$joiner->signed_time}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('joiners.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection