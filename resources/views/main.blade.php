<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>{{ isset($title)?$title:'全球时领袖社群' }}</title>
		<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<!-- Fonts -->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link href="{{ url('css/nprogress.css')}}" rel="stylesheet">
		<link href="{{ url('css/main.css')}}" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand text-danger" href="/">全球时代领袖社群</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}">首页</a></li>
						<li><a href="{{ url('/meetup') }}">线下活动</a></li>
						<li><a href="{{ url('/join') }}">申请入会</a></li>
						<li><a href="{{ url('/aboutus') }}">关于社群</a></li>
						<li><a href="{{ url('/contantus') }}">联系我们</a></li>
					</ul>
				</div>
			</div>
		</nav>
		@yield('content')
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p class="text-center">版权所有  ©2015 全球时代领袖社群</p>
				</div>
			</div>
		</div>
		<!-- Scripts -->
		<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="{{ url('js/jquery.pjax.js') }}"></script>
		<script src="{{ url('js/nprogress.js') }}"></script>
	</body>
</html>