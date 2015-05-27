@extends('layout')

@section('content')
    <div class="page-header">
        <h1>社群</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>名称</th>
                    <th class="text-right">操作</th>
                </tr>
                </thead>

                <tbody>

                @foreach($groups as $group)
                    <tr>
                        <td>{{$group->id}}</td>
                        <td>{{$group->name}}</td>

                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('groups.show', $group->id) }}">查看</a>
                            <a class="btn btn-warning " href="{{ route('groups.edit', $group->id) }}">编辑</a>
                            <form action="{{ route('groups.destroy', $group->id) }}" method="POST"
                                  style="display: inline;"
                                  onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                <input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token"
                                                                                          value="{{ csrf_token() }}">
                                <button class="btn btn-danger" type="submit">删除</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('groups.create') }}">新增</a>
        </div>
    </div>


@endsection