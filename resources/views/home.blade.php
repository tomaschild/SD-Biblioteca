<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Digital</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
</head>
<body>
	<div class="container_fondo">
		<div class="fondo">

			<div class="barra_navegacion">
				<div class="contenedor_links">
					<a class="link_izq" href="{{ route('home') }}">Buscar</a>
					<a class="link_der" href="{{ route('upload') }}">Subir</a>
				</div>
			</div>

			<div class="titulo">Biblioteca Digital</div>

			<div class="contenedor">
				<div class="centrador"></div>
				<div class="contenedor_barra_busqueda">
					<form action="{{ route('results')}}" method="get">
						<input class="barra_busqueda" type="text" name="busqueda" id="busqueda" value="{{ request()->input('busqueda') }}">
						<!-- <input type="submit"  name="buscar" value="Buscar"> -->
					</form>
				</div>
				<div class="centrador"></div>
			</div>
		</div>

	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>