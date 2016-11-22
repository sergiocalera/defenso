<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Defensoria de Audiencia</title>
		<meta charset="utf-8">
		<meta name="description" content="Defensor&iacute;a de Audiencia">
		<meta name="keywords" content="defensoria audiencia">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

        <!-- CSS gob -->
        <link rel="stylesheet" href="https://framework-gb.cdn.gob.mx/qa/assets/styles/main.css">
        <link rel="shortcut icon" href="{{ asset ('img/favicon.ico') }}" />

	</head>
	<body>
		<header>@yield('headerTemplate')</header>
		<main class="page">
			<!-- Botones de letras -->
			<div class="font-changer print" style="position: fixed; margin-top : 50px; left : 166.5px; top : 200px ! important;">
			 	<button class="inc-font" style="background-color: white; font-size: 13px;">Aa+</button>
				<button class="dec-font" style="background-color: white; font-size: 13px;">Aa-</button>
				<p class="fuente" style="font-size : 19px;"></p>
			 </div>
			<div class="container">
				@yield('bodyTemplate')
			</div>
		</main>
		<!-- js de gob -->
		<script src="https://framework-gb.cdn.gob.mx/qa/gobmx.js" type="text/javascript"></script>
		
		<footer>@yield('footerTemplate')</footer>


		<script type="text/javascript" src="{{ asset('js/fuente.js') }}"></script>
		<link href="{{ asset('css/fuente.css') }}" rel="stylesheet" />
	</body>
</html>