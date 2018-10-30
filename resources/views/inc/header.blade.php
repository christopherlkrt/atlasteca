<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

<!-- Styles -->
@if($app->environment('local'))
	<link href="{!! asset('css/all.css') !!}" rel="stylesheet">
@else
	<link href="{{ asset(elixir('css/all.css')) }}" rel="stylesheet">
@endif

<title>Atlasteca</title>

<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->





