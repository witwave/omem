@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Topics / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$topic->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$topic->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$topic->body}}</p>
                </div>
                    <div class="form-group">
                     <label for="cover">COVER</label>
                     <p class="form-control-static">{{$topic->cover}}</p>
                </div>
                    <div class="form-group">
                     <label for="uid">UID</label>
                     <p class="form-control-static">{{$topic->uid}}</p>
                </div>
                    <div class="form-group">
                     <label for="pv">PV</label>
                     <p class="form-control-static">{{$topic->pv}}</p>
                </div>
                    <div class="form-group">
                     <label for="uv">UV</label>
                     <p class="form-control-static">{{$topic->uv}}</p>
                </div>
                    <div class="form-group">
                     <label for="user_count">USER_COUNT</label>
                     <p class="form-control-static">{{$topic->user_count}}</p>
                </div>
                    <div class="form-group">
                     <label for="deleted_at">DELETED_AT</label>
                     <p class="form-control-static">{{$topic->deleted_at}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('topics.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('topics.edit', $topic->id) }}">Edit</a>
            <form action="#/$topic->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection