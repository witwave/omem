<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>成为会员</title>
		<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<!-- Fonts -->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
		.bs-callout {
			-moz-border-bottom-colors: none;
			-moz-border-left-colors: none;
			-moz-border-right-colors: none;
			-moz-border-top-colors: none;
			border-color: #eee;
			border-image: none;
			border-radius: 3px;
			border-style: solid;
			border-width: 1px 1px 1px 5px;
			margin: 20px 0;
			padding: 20px;
		}
		.masthead {
			padding: 90px 0 110px;
		}
		.masthead {
		color: #fff;
		margin-bottom: 0;
		padding: 60px 0 80px;
		}
		.masthead .masthead-button-links {
			margin-top: 30px;
		}
		.btn-lg.btn-shadow {
		padding: 13px 35px 17px;
		}
		.btn-primary.btn-shadow {
		border: 0 none;
		box-shadow: 0 -4px 0 #2a6496 inset;
		color: #fff;
		}
		.jumbotron::after {
			background: url("/img/masthead-pattern.png") repeat scroll center center rgba(0, 0, 0, 0);
			bottom: 0;
			content: "";
			display: block;
			left: 0;
			opacity: 0.4;
			position: absolute;
			right: 0;
			top: 0;
		}
		.jumbotron {
			background: linear-gradient(45deg, #020031 0px, #6d3353 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
			box-shadow: 0 3px 7px rgba(0, 0, 0, 0.2) inset, 0 -3px 7px rgba(0, 0, 0, 0.2) inset;
			color: #fff;
			padding: 40px 0;
			position: relative;
			text-align: center;
			text-shadow: 0 1px 3px rgba(0, 0, 0, 0.4), 0 0 30px rgba(0, 0, 0, 0.075);
		}
		.jumbotron .container {
			position: relative;
			z-index: 2;
		}
		</style>
	</head>
	<body>
		@yield('content')
		<!-- Scripts -->
		<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
		<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>