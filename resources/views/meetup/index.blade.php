@extends('main')
@section('content')
@if (Session::has('msg'))
<div class="container" style="margin-top:5px">
	<div class="alert alert-success" role="alert"><p>{!!Session::get('msg')!!}</p></div>
</div>
@endif
<div class="jumbotron masthead">
	<div class="container">
		<h3>全球时领袖社群线下活动</h3>
		<div>让天下没有陌生的孰悉的人，打造全球最大的华人本地化文化交流社群</div>
		<p class="masthead-button-links">
			<a role="button"  href="/join/apply" class="btn btn-lg btn-primary btn-shadow">立即加入</a>
		</p>
	</div>
</div>
<div class="container">
	<div class="media">
		<div class="media-left">
			<a href="#">
				<img class="media-object" src="..." alt="...">
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading">Media heading</h4>
			<p></p>
		</div>
	</div>
</div>
@endsection