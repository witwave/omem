@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Events / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('events.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="id">ID</label>
                     <input type="text" name="id" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="member_id">MEMBER_ID</label>
                     <input type="text" name="member_id" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="type">TYPE</label>
                     <input type="text" name="type" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <input type="text" name="content" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="mark">MARK</label>
                     <input type="text" name="mark" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection