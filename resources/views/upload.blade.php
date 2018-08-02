<!DOCTYPE html>
<html>
<head>
	<title>Agregar un registro</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/upload.css')}}">
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

	<div class="title">Agregar un registro</div>
	<div class="form_container">
		<div class="form_section">
			<div class="section_title">Datos del archivo</div>

			<form action="/upload" method="post"> 
				{!! csrf_field() !!}
				<input type="text" name="document_title" placeholder="Título del archivo"><br>
				<input type="text" name="document_author" placeholder="Autor del archivo"><br>
				<input type="text" name="document_year" placeholder="Año del archivo"><br>
				<input type="text" name="document_type" placeholder="Tipo de archivo"><br>
				<input type="submit" name="upload_document" value="Subir">
			</form>

		</div>
	</div>

</body>
</html>