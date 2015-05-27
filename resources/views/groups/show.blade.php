@extends('layout')

@section('content')
    <div class="page-header">
        <h1>社群 / 显示详细 </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="#">
                <div class="form-group">
                    <label for="id">名称</label>
                    <p class="form-control-static">{{$group->name}}</p>
                </div>
                <div class="form-group">
                    <label for="name">描述</label>
                    <p class="form-control-static">{{$group->mark}}</p>
                </div>
            </form>
            <a class="btn btn-warning" href="{{ route('groups.edit', $group->id) }}">编辑</a>
            <form action="#/$group->id" method="DELETE" style="display: inline;"
                  onsubmit="if(confirm('确认要删除吗?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">删除</button>
            </form>
            <a class="btn btn-default" href="{{ route('groups.index') }}">返回</a>
        </div>
    </div>

@endsection