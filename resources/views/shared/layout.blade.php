<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>С любов от Лето</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    @yield('head-content')
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
				<img src="/img/logo.png" width="40" height="40" align="center"></img>
				<img src="/img/log.png"  width="125" height="20" align="center"></img>
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Начало</a></li>
					<li><a href="{{ url('poems') }}">Поезия</a></li>
					<li><a href="{{ url('stories') }}">Разкази</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">

					@if (Auth::guest())

						<li><a href="{{ url('/auth/login') }}">Вход</a></li>
						<li><a href="{{ url('/auth/register') }}">Регистрация</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->first_name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
							    @if(Auth::user()->role == 'administrator')
                                    <li><a href="{{ url('/admin') }}">Панел</a></li>
                                @endif
								<li><a href="{{ url('/auth/logout') }}">Изход</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
    @yield('scripts')
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
