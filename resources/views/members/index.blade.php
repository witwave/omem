@extends('layout')

@section('content')
    <div class="page-header">
        <h1>会员</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>姓名</th>
                    <th>电话</th>
                    <th>微信</th>
                    <th>性别</th>
                    <th>邮箱</th>
                    <th class="text-right">操作</th>
                </tr>
                </thead>

                <tbody>

                @foreach($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->name?$member->name:$member->nickname}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->wechat}}</td>
                        <td>{{$member->sex==1?'男':($member->sex==2?'女':'N/A')}}</td>
                        <td>{{$member->email}}</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('members.show', $member->id) }}">详细</a>
                            <a class="btn btn-warning " href="{{ route('members.edit', $member->id) }}">编辑</a>
                            <form action="{{ route('members.destroy', $member->id) }}" method="POST"
                                  style="display: inline;"
                                  onsubmit="if(confirm('确认删除吗? ')) { return true } else {return false };"><input
                                        type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token"
                                                                                           value="{{ csrf_token() }}">
                                <button class="btn btn-danger" type="submit">删除</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('members.create') }}">新增</a>
        </div>
    </div>


@endsection