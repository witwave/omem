@extends('layout')

@section('content')
    <div class="page-header">
        <h1>活动</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>标题</th>
                    <th>报名结束时间</th>
                    <th>最大人数</th>
                    <th>报名人数</th>
                    <th>是否发布</th>
                    <th>价格</th>
                    <th>浏览次数</th>
                    <th>浏览人数</th>
                    <th class="text-right">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($meetups as $meetup)
                    <tr>
                        <td>{{$meetup->id}}</td>
                        <td>{{$meetup->name}}</td>
                        <td>{{$meetup->end_time}}</td>
                        <td>{{$meetup->max_count}}</td>
                        <td>{{$meetup->join_count}}</td>
                        <td>{{$meetup->online}}</td>
                        <td>{{$meetup->price}}</td>
                        <td>{{$meetup->pv}}</td>
                        <td>{{$meetup->uv}}</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('meetups.show', $meetup->id) }}">View</a>
                            <a class="btn btn-warning " href="{{ route('meetups.edit', $meetup->id) }}">Edit</a>

                            <form action="{{ route('meetups.destroy', $meetup->id) }}" method="POST"
                                  style="display: inline;"
                                  onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                <input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token"
                                                                                          value="{{ csrf_token() }}">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-success" href="{{ route('meetups.create') }}">新增</a>
        </div>
    </div>


@endsection