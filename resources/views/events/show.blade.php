@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Events / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$event->id}}</p>
                </div>
                <div class="form-group">
                     <label for="id">ID</label>
                     <p class="form-control-static">{{$event->id}}</p>
                </div>
                    <div class="form-group">
                     <label for="member_id">MEMBER_ID</label>
                     <p class="form-control-static">{{$event->member_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="type">TYPE</label>
                     <p class="form-control-static">{{$event->type}}</p>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <p class="form-control-static">{{$event->content}}</p>
                </div>
                    <div class="form-group">
                     <label for="mark">MARK</label>
                     <p class="form-control-static">{{$event->mark}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('events.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('events.edit', $event->id) }}">Edit</a>
            <form action="#/$event->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection