@extends('layout')

@section('content')
    <div class="page-header">
        <h1>社群 / 创建 </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('groups.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name">名称</label>
                    <input type="text" name="name" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="mark">描述</label>
                    <input type="text" name="mark" class="form-control" value=""/>
                </div>

                <button class="btn btn-primary" type="submit">保存</button>
                <a class="btn btn-default" href="{{ route('groups.index') }}">返回</a>
            </form>
        </div>
    </div>


@endsection