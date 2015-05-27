@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Joiners / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$joiner->id}}</p>
                </div>
                <div class="form-group">
                     <label for="meetup_id">MEETUP_ID</label>
                     <p class="form-control-static">{{$joiner->meetup_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="member_id">MEMBER_ID</label>
                     <p class="form-control-static">{{$joiner->member_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$joiner->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="mobile">MOBILE</label>
                     <p class="form-control-static">{{$joiner->mobile}}</p>
                </div>
                    <div class="form-group">
                     <label for="meetup_name">MEETUP_NAME</label>
                     <p class="form-control-static">{{$joiner->meetup_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="signed">SIGNED</label>
                     <p class="form-control-static">{{$joiner->signed}}</p>
                </div>
                    <div class="form-group">
                     <label for="signed_time">SIGNED_TIME</label>
                     <p class="form-control-static">{{$joiner->signed_time}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('joiners.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('joiners.edit', $joiner->id) }}">Edit</a>
            <form action="#/$joiner->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection