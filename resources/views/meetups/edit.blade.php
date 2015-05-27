@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Meetups / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('meetups.update', $meetup->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$meetup->id}}</p>
                </div>
                <div class="form-group">
                     <label for="
name">
NAME</label>
                     <input type="text" name="
name" class="form-control" value="{{$meetup->
name}}"/>
                </div>
                    <div class="form-group">
                     <label for="summary">SUMMARY</label>
                     <input type="text" name="summary" class="form-control" value="{{$meetup->summary}}"/>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <input type="text" name="content" class="form-control" value="{{$meetup->content}}"/>
                </div>
                    <div class="form-group">
                     <label for="end_time">END_TIME</label>
                     <input type="text" name="end_time" class="form-control" value="{{$meetup->end_time}}"/>
                </div>
                    <div class="form-group">
                     <label for="pv">PV</label>
                     <input type="text" name="pv" class="form-control" value="{{$meetup->pv}}"/>
                </div>
                    <div class="form-group">
                     <label for="uv">UV</label>
                     <input type="text" name="uv" class="form-control" value="{{$meetup->uv}}"/>
                </div>
                    <div class="form-group">
                     <label for="max_count">MAX_COUNT</label>
                     <input type="text" name="max_count" class="form-control" value="{{$meetup->max_count}}"/>
                </div>
                    <div class="form-group">
                     <label for="join_count">JOIN_COUNT</label>
                     <input type="text" name="join_count" class="form-control" value="{{$meetup->join_count}}"/>
                </div>
                    <div class="form-group">
                     <label for="online">ONLINE</label>
                     <input type="text" name="online" class="form-control" value="{{$meetup->online}}"/>
                </div>
                    <div class="form-group">
                     <label for="price">PRICE</label>
                     <input type="text" name="price" class="form-control" value="{{$meetup->price}}"/>
                </div>
                    <div class="form-group">
                     <label for="mark">MARK</label>
                     <input type="text" name="mark" class="form-control" value="{{$meetup->mark}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('meetups.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection