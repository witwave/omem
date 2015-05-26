@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Pages</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>TITLE：STRING(200)</th>
                        <th>CONTENT</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page->id}}</td>
                    <td>{{$page->name}}</td>
                    <td>{{$page->title：string(200)}}</td>
                    <td>{{$page->content}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('pages.show', $page->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('pages.edit', $page->id) }}">Edit</a>
                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('pages.create') }}">Create</a>
        </div>
    </div>


@endsection