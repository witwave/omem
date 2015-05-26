@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Pages / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$page->id}}</p>
                </div>
                <div class="form-group">
                     <label for="id">ID</label>
                     <p class="form-control-static">{{$page->id}}</p>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$page->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="title：string(200)">TITLE：STRING(200)</label>
                     <p class="form-control-static">{{$page->title：string(200)}}</p>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <p class="form-control-static">{{$page->content}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('pages.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('pages.edit', $page->id) }}">Edit</a>
            <form action="#/$page->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection