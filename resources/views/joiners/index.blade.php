@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Joiners</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>MEETUP_ID</th>
                        <th>MEMBER_ID</th>
                        <th>NAME</th>
                        <th>MOBILE</th>
                        <th>MEETUP_NAME</th>
                        <th>SIGNED</th>
                        <th>SIGNED_TIME</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($joiners as $joiner)
                <tr>
                    <td>{{$joiner->id}}</td>
                    <td>{{$joiner->meetup_id}}</td>
                    <td>{{$joiner->member_id}}</td>
                    <td>{{$joiner->name}}</td>
                    <td>{{$joiner->mobile}}</td>
                    <td>{{$joiner->meetup_name}}</td>
                    <td>{{$joiner->signed}}</td>
                    <td>{{$joiner->signed_time}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('joiners.show', $joiner->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('joiners.edit', $joiner->id) }}">Edit</a>
                        <form action="{{ route('joiners.destroy', $joiner->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('joiners.create') }}">Create</a>
        </div>
    </div>


@endsection