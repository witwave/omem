@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Topics</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>BODY</th>
                        <th>COVER</th>
                        <th>UID</th>
                        <th>PV</th>
                        <th>UV</th>
                        <th>USER_COUNT</th>
                        <th>DELETED_AT</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($topics as $topic)
                <tr>
                    <td>{{$topic->id}}</td>
                    <td>{{$topic->title}}</td>
                    <td>{{$topic->body}}</td>
                    <td>{{$topic->cover}}</td>
                    <td>{{$topic->uid}}</td>
                    <td>{{$topic->pv}}</td>
                    <td>{{$topic->uv}}</td>
                    <td>{{$topic->user_count}}</td>
                    <td>{{$topic->deleted_at}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('topics.show', $topic->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('topics.edit', $topic->id) }}">Edit</a>
                        <form action="{{ route('topics.destroy', $topic->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('topics.create') }}">Create</a>
        </div>
    </div>


@endsection