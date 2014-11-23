<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap-theme.min.css') }}" />
	@show
</head>
<body class="page @yield('page-classes')">
	<div class="container">
	@yield('content')		
	</div><!-- /.container -->

	@section('scripts')
	<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	@show
</body>
</html>