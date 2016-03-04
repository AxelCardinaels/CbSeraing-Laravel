<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comité de Baptême de Seraing</title>

	<link href="{{ asset('/css/screen.css') }}" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
	<h1 class="hide">Site web du Comité De Baptême De Seraing</h1>
	@include('partials.nav')
	@yield('content')

	<!-- Scripts -->

@include('partials.footer')
