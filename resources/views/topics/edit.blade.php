@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Topics / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('topics.update', $topic->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$topic->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$topic->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <input type="text" name="body" class="form-control" value="{{$topic->body}}"/>
                </div>
                    <div class="form-group">
                     <label for="cover">COVER</label>
                     <input type="text" name="cover" class="form-control" value="{{$topic->cover}}"/>
                </div>
                    <div class="form-group">
                     <label for="uid">UID</label>
                     <input type="text" name="uid" class="form-control" value="{{$topic->uid}}"/>
                </div>
                    <div class="form-group">
                     <label for="pv">PV</label>
                     <input type="text" name="pv" class="form-control" value="{{$topic->pv}}"/>
                </div>
                    <div class="form-group">
                     <label for="uv">UV</label>
                     <input type="text" name="uv" class="form-control" value="{{$topic->uv}}"/>
                </div>
                    <div class="form-group">
                     <label for="user_count">USER_COUNT</label>
                     <input type="text" name="user_count" class="form-control" value="{{$topic->user_count}}"/>
                </div>
                    <div class="form-group">
                     <label for="deleted_at">DELETED_AT</label>
                     <input type="text" name="deleted_at" class="form-control" value="{{$topic->deleted_at}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('topics.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection