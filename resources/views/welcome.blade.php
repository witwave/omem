@extends('main')
@section('title')
全球时领袖社群
@endsection

@section('content')
@if (Session::has('msg'))
<div class="container" style="margin-top:5px">
	<div class="alert alert-success" role="alert"><p>{!!Session::get('msg')!!}</p></div>
</div>
@endif
<div class="jumbotron masthead">
	<div class="container">
		<h3>全球时领袖社群</h3>
		<div>让天下没有陌生的孰悉的人，打造全球最大的华人本地化文化交流社群</div>
		<p class="masthead-button-links">
			<a role="button"  href="/join" class="btn btn-lg btn-primary btn-shadow">立即加入</a>
		</p>
	</div>
</div>
<div class="container">
	<div class="row text-center">
		<div class="col-xs-12">
			<h4 class="text-center text-primary"></h4>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3">
			<div class="thumbnail">
				<div class="caption">
					<a href="/meetup"><h3>线下活动</h3></a>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3">
			<div class="thumbnail">
				<div class="caption">
					<a href="/join"><h3>申请入会</h3></a>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3">
			<div class="thumbnail">
				<div class="caption">
					<a href="/aboutus"><h3>社群介绍</h3></a>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3">
			<div class="thumbnail">
				<div class="caption">
					<a href="/contactus"><h3>联系我们</h3></a>
				</div>
			</div>
		</div>
	</div>
	@include('partner')
</div>
@endsection