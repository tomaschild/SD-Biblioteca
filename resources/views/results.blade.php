<!DOCTYPE html>
<html>
<head>
	<title>Resultados de Búsqueda</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/results.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
</head>
<body>
	<div class="container_banner">
		<div class="banner">
			<div class="barra_navegacion">
				<div class="contenedor_links">
					<a class="link_izq" href="{{ route('home') }}">Buscar</a>
					<a class="link_der" href="{{ route('upload') }}">Upload</a>
				</div>
			</div>
		</div>
	</div>

	<div class="titulo_busqueda">Mostrando resultados para: "{{ request()->input('busqueda') }}"</div>
	<div class="container_resultados">
		@foreach ($documents as $document)
			<div class="item_resultado">{{ $document->document_title }}</div>
		@endforeach
	</div>

</body>
</html>