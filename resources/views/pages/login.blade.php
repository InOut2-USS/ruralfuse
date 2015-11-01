<!DOCTYPE html>
<html lang="en" style="height: 100%; width: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RuralFuse: Login</title>
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/animate.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('landing/css/lightbox.css') }}" rel="stylesheet"> 
	<link href="{{ asset('landing/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="height: 100%; width: 100%;">
	
	<div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; align-items: center; width: 100%; height: 100%;">
		<a href="{{ url('login/middleman') }}" class="btn btn-common">Representative Login</a>
        <a href="{{ url('login/employer') }}" class="btn btn-common">Employer Login</a>
	</div>

    <script type="text/javascript" src="{{ asset('landing/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/main.js') }}"></script>   
</body>
</html>
