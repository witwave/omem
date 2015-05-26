@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Events</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID</th>
                        <th>MEMBER_ID</th>
                        <th>TYPE</th>
                        <th>CONTENT</th>
                        <th>MARK</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->id}}</td>
                    <td>{{$event->member_id}}</td>
                    <td>{{$event->type}}</td>
                    <td>{{$event->content}}</td>
                    <td>{{$event->mark}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('events.show', $event->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('events.edit', $event->id) }}">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('events.create') }}">Create</a>
        </div>
    </div>


@endsection