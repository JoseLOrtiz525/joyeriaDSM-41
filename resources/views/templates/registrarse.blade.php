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


				<form action="{{ route ('guardar')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					Fecha de nacimiento : <input type="date" name="fn">
					@if($errors->first('matricula')) <i>{{$errors -> first ('fn')}}</i>@endif

					<div>
						Matricula : <input type="text" name="matricula" value="{{ old('matricula')}}">
					</div>
					@if($errors->first('matricula')) <i>{{$errors -> first ('matricula')}}</i>@endif
					<div>
						Nombre : <input type="text" name="nombre" value="{{ old('nombre')}}">
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

					<div>
						Email : <input type="text" name="email"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('email')}}</i>@endif

					<div>
						Apellido Paterno : <input type="text" name="app" value="{{ old('app')}}"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('app')}}</i>@endif

					<div>
						Apellido Materno : <input type="text" name="apm"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('apm')}}</i>@endif
					<div>
						Password : <input type="text" name="pass"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('pass')}}</i>@endif
					<div>
						Telefono : <input type="text" name="tel"><br>
						@if($errors->first('nombre')) <i>{{$errors -> first ('tel')}}</i>@endif
					</div>

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