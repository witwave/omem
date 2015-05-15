@extends('main')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<blockquote style=" border-left-color: #1b809e;margin-top:5px;" class="bs-callout">
				<p>欢迎加入全球时领袖社群</p>
				<small>为了更好的服务，请如实填写以下信息</small>
			</blockquote>
			
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>注意!</strong> 您有一些信息填写出错.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/join') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="col-md-4 control-label">姓名</label><span style="color:red">*</span>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" placeholder="必填项" value="{{ old('name') }}" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">电话</label><span style="color:red">*</span>
					<div class="col-md-6">
						<input type="text" class="form-control" name="mobile" placeholder="必填项" value="{{ old('mobile') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">微信号</label><span style="color:red">*</span>
					<div class="col-md-6">
						<input type="text" class="form-control" name="wechat" placeholder="必填项" value="{{ old('wechat') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">常住城市</label><span style="color:red">*</span>
					<div class="col-md-6">
						<input type="text" class="form-control" name="city" placeholder="必填项" value="{{ old('city') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">所在行业</label><span style="color:red">*</span>
					<div class="col-md-6">
						<input type="text" class="form-control" name="job" placeholder="必填项" value="{{ old('job') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">公司名称</label><span style="color:red">*</span>
					<div class="col-md-6">
						<input type="text" class="form-control" name="company" placeholder="必填项" value="{{ old('company') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">职位</label><span style="color:red">*</span>
					<div class="col-md-6">
						<input type="text" class="form-control" name="title" placeholder="必填项"  value="{{ old('title') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">常用邮箱</label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="mail" placeholder="可选项" value="{{ old('email') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">个性签名</label>
					<div class="col-md-6">
						<textarea class="form-control" rows="3" name="sign" placeholder="请填写一名喜欢的话或者名言">{{ old('wechat') }}</textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
						提交申请
						</button>
						
						<a href="/" style="margin-left:20px">返回</a>
					</div>
				</div>
			</form>
		</div>
		
	</div>
</div>
@endsection