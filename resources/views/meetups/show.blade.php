@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Meetups / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$meetup->id}}</p>
                </div>
                <div class="form-group">
                     <label for="
name">
NAME</label>
                     <p class="form-control-static">{{$meetup->
name}}</p>
                </div>
                    <div class="form-group">
                     <label for="summary">SUMMARY</label>
                     <p class="form-control-static">{{$meetup->summary}}</p>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <p class="form-control-static">{{$meetup->content}}</p>
                </div>
                    <div class="form-group">
                     <label for="end_time">END_TIME</label>
                     <p class="form-control-static">{{$meetup->end_time}}</p>
                </div>
                    <div class="form-group">
                     <label for="pv">PV</label>
                     <p class="form-control-static">{{$meetup->pv}}</p>
                </div>
                    <div class="form-group">
                     <label for="uv">UV</label>
                     <p class="form-control-static">{{$meetup->uv}}</p>
                </div>
                    <div class="form-group">
                     <label for="max_count">MAX_COUNT</label>
                     <p class="form-control-static">{{$meetup->max_count}}</p>
                </div>
                    <div class="form-group">
                     <label for="join_count">JOIN_COUNT</label>
                     <p class="form-control-static">{{$meetup->join_count}}</p>
                </div>
                    <div class="form-group">
                     <label for="online">ONLINE</label>
                     <p class="form-control-static">{{$meetup->online}}</p>
                </div>
                    <div class="form-group">
                     <label for="price">PRICE</label>
                     <p class="form-control-static">{{$meetup->price}}</p>
                </div>
                    <div class="form-group">
                     <label for="mark">MARK</label>
                     <p class="form-control-static">{{$meetup->mark}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('meetups.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('meetups.edit', $meetup->id) }}">Edit</a>
            <form action="#/$meetup->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection