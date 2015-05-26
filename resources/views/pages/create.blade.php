@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Pages / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('pages.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="id">ID</label>
                     <input type="text" name="id" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="title：string(200)">TITLE：STRING(200)</label>
                     <input type="text" name="title：string(200)" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <input type="text" name="content" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('pages.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection