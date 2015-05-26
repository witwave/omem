@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Members</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID</th>
                        <th>PID</th>
                        <th> OPENID</th>
                        <th> WECHAT</th>
                        <th> QQ</th>
                        <th> AVATAR</th>
                        <th> NAME</th>
                        <th> NICKNAME</th>
                        <th> SEX</th>
                        <th> EMAIL</th>
                        <th> COMPANY_NAME</th>
                        <th> COMPANY_SITE</th>
                        <th> POSITION</th>
                        <th> INDUSTRY</th>
                        <th> BORN_DATE</th>
                        <th> BORN_LOCATION</th>
                        <th> LIVE_CITY</th>
                        <th> ADDRESS</th>
                        <th> SIGN</th>
                        <th> MARK</th>
                        <th> DELETED_AT</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($members as $member)
                <tr>
                    <td>{{$member->id}}</td>
                    <td>{{$member->id}}</td>
                    <td>{{$member->pid}}</td>
                    <td>{{$member-> openid}}</td>
                    <td>{{$member-> wechat}}</td>
                    <td>{{$member-> qq}}</td>
                    <td>{{$member-> avatar}}</td>
                    <td>{{$member-> name}}</td>
                    <td>{{$member-> nickname}}</td>
                    <td>{{$member-> sex}}</td>
                    <td>{{$member-> email}}</td>
                    <td>{{$member-> company_name}}</td>
                    <td>{{$member-> company_site}}</td>
                    <td>{{$member-> position}}</td>
                    <td>{{$member-> industry}}</td>
                    <td>{{$member-> born_date}}</td>
                    <td>{{$member-> born_location}}</td>
                    <td>{{$member-> live_city}}</td>
                    <td>{{$member-> address}}</td>
                    <td>{{$member-> sign}}</td>
                    <td>{{$member-> mark}}</td>
                    <td>{{$member-> deleted_at}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('members.show', $member->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('members.edit', $member->id) }}">Edit</a>
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('members.create') }}">Create</a>
        </div>
    </div>


@endsection