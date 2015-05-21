@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Topics / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('topics.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <input type="text" name="body" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="cover">COVER</label>
                     <input type="text" name="cover" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="uid">UID</label>
                     <input type="text" name="uid" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="pv">PV</label>
                     <input type="text" name="pv" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="uv">UV</label>
                     <input type="text" name="uv" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="user_count">USER_COUNT</label>
                     <input type="text" name="user_count" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="deleted_at">DELETED_AT</label>
                     <input type="text" name="deleted_at" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('topics.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection