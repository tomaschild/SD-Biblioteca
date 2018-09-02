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
					<a class="link_izq" href="{{ route('welcome') }}">Buscar</a>
					<a class="link_der" href="{{ route('upload') }}">Subir</a>
				</div>
			</div>
		</div>
	</div>

	<div class="titulo_busqueda">Mostrando ({{ $documents->count() }}) resultados para: "{{ request()->input('busqueda') }}"</div>
	<div class="container_resultados">

		<div class="header_resultados">
			<div class="header_titulo">Título</div>
			<div class="header_autor">Autor</div>
			<div class="header_año">Año</div>
			<div class="header_tipo">Tipo</div>
		</div>

		@foreach ($documents as $document)
			<div class="item_resultado">
				<a class="resultado_titulo" href="#">{{ $document->document_title }}</a>
				<div class="resultado_autor" href="#">{{ $document->document_author }}</div>
				<div class="resultado_año" href="#">{{ $document->document_year }}</div>
				<div class="resultado_tipo" href="#">{{ $document->document_type }}</div>
			</div>
		@endforeach
	</div>

</body>
</html>

@section('content')
    <div class="titulo_busqueda">Mostrando ({{ $documents->count() }}) resultados para: "{{ request()->input('busqueda') }}"</div>
    <div class="container_resultados">

        <div class="header_resultados">
            <div class="header_titulo">Título</div>
            <div class="header_autor">Autor</div>
            <div class="header_año">Año</div>
            <div class="header_tipo">Tipo</div>
        </div>

        @foreach ($documents as $document)
            <div class="item_resultado">
                <a class="resultado_titulo" href="#">{{ $document->document_title }}</a>
                <div class="resultado_autor" href="#">{{ $document->document_author }}</div>
                <div class="resultado_año" href="#">{{ $document->document_year }}</div>
                <div class="resultado_tipo" href="#">{{ $document->document_type }}</div>
            </div>
        @endforeach
    </div>
@endsection