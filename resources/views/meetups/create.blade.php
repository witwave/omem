@extends('layout')

@section('content')
    <div class="page-header">
        <h1>新增活动</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('meetups.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="text" name="name" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="end_time">END_TIME</label>
                    <input type="text" name="end_time" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="max_count">MAX_COUNT</label>
                    <input type="text" name="max_count" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="online">ONLINE</label>
                    <input type="text" name="online" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="price">PRICE</label>
                    <input type="text" name="price" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="summary">SUMMARY</label>
                    <textarea type="text" name="summary" class="form-control" cols="60" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">CONTENT</label>
                    <textarea type="text" name="summary" class="form-control" cols="60" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="mark">MARK</label>
                    <input type="text" name="mark" class="form-control" value=""/>
                </div>
                <button class="btn btn-primary" type="submit">保存</button>
                <a class="btn btn-default" href="{{ route('meetups.index') }}">返回</a>
            </form>
        </div>
    </div>
@endsection