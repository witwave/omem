@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Events / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('events.update', $event->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$event->id}}</p>
                </div>
                <div class="form-group">
                     <label for="id">ID</label>
                     <input type="text" name="id" class="form-control" value="{{$event->id}}"/>
                </div>
                    <div class="form-group">
                     <label for="member_id">MEMBER_ID</label>
                     <input type="text" name="member_id" class="form-control" value="{{$event->member_id}}"/>
                </div>
                    <div class="form-group">
                     <label for="type">TYPE</label>
                     <input type="text" name="type" class="form-control" value="{{$event->type}}"/>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <input type="text" name="content" class="form-control" value="{{$event->content}}"/>
                </div>
                    <div class="form-group">
                     <label for="mark">MARK</label>
                     <input type="text" name="mark" class="form-control" value="{{$event->mark}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection