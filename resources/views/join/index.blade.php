@extends('main')
@section('content')
@include('flash')
<div class="jumbotron masthead">
	<div class="container">
		<h3>全球时领袖社群会员火热招幕中</h3>
		<div>让天下没有陌生的孰悉的人，打造全球最大的华人本地化文化交流社群</div>
		<p class="masthead-button-links">
			<a role="button"  href="/join/apply" class="btn btn-lg btn-primary btn-shadow">立即加入</a>
		</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h4 class="text-center text-primary">会员特权</h4>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>会员特权</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>会员特权</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>会员特权</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>会员特权</h3>
				</div>
			</div>
		</div>
	</div>
	@include('partner')
</div>
@endsection