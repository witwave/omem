<div class="container" style="margin-top:5px">
	@if (Session::has('success'))
	<div class="alert alert-success" role="alert">
		<p>{!! Session('success') !!}</p>
	</div>
	@endif
	@if (Session::has('warn'))
	<div class="alert alert-warning">
		<p>{!! Session('warn') !!}</p>
	</div>
	@endif
</div>