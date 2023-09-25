<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<title>@yield('title') - Habanero</title>

	<meta name="title" content="Habanero">
	<meta name="description" content="Habanero">
	<meta name="author" content="Pentesting-28 Agencia Web">

	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:title" content="Habanero">
	<meta property="og:description" content="Habanero">
	{{-- <meta property="og:image" content="{{url('')}}"> --}}

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="">
	<meta property="twitter:title" content="Habanero">
	<meta property="twitter:description" content="Habanero">
	{{-- <meta property="twitter:image" content="{{url('')}}"> --}}

	@yield('styles')

    <link rel="stylesheet" type="text/css" href="{{asset('/resources/css/main.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="{{asset('resources/css/bootstrap.min.css')}}" rel="stylesheet">

    <script src="{{asset('resources/js/jquery.js')}}"></script>
    <script src="{{asset('resources/js/jquery.vimeo.api.js')}}"></script>
    <script src="{{asset('resources/js/videos.js')}}"></script>
    <script src="{{asset('resources/js/funciones.js')}}"></script>

</head>
