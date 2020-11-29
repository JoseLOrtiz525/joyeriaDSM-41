<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Inicio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				<!-- Header -->
				<header id="header">
					<a href="{{ route('home')}}" class="logo"><strong>Joyeria</strong> Luminoseté</a>
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
					</ul>
				</header>


				<form action="{{ route ('guardarProductos')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					<div style="padding: 1%;">
						Nombre Del Producto : <input type="text" name="nombre_producto" value="{{ old('nombre_producto')}}">
					</div>
					@if($errors->first('nombre_producto')) <i>{{$errors -> first ('nombre_producto')}}</i>@endif

					<div style="padding: 1%;">
						Numero de existencias : <input type="number" name="no_existencias" value="{{ old('no_existencias')}}">
					</div>
					@if($errors->first('no_existencias')) <i>{{$errors -> first ('no_existencias')}}</i>@endif
					

					<div style="padding: 1%;">
						Precio : <input type="number" name="precio"><br>
					</div>
					@if($errors->first('precio')) <i>{{$errors -> first ('precio')}}</i>@endif

					<div style="padding: 1%;">
					<!-- como cambiar el tamaño -->
						Descripcion : <input type="textarea" name="descripcion" value="{{ old('descripcion')}}"><br>
					</div>
					@if($errors->first('descripcion')) <i>{{$errors -> first ('descripcion')}}</i>@endif

					<div style="padding: 1%;">
						Medida : <input type="number" name="medida"><br>
					</div>
					@if($errors->first('medida')) <i>{{$errors -> first ('medida')}}</i>@endif

					<div style="padding: 1%;">
						Precio oferta : <input type="number" name="precio_oferta"><br>
					</div>
					@if($errors->first('precio_oferta')) <i>{{$errors -> first ('precio_oferta')}}</i>@endif
					

					<hr>
					<!--*Genero : <input type="text" name="gen"><br>
Imagen : <input type="text" name="img"><br>
Grupo : <input type="text" name="grupo"><br>
*Activo : <input type="text" name="activo"><br> -->

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>