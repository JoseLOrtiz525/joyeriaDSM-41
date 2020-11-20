<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Generic Page - Massively by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-loading">

	<!-- Wrapper -->
	<div id="wrapper">

		@include ('layouts.menu')

		<!-- Main -->
		<div id="main">

			<section>
				<h2>Registrarse</h2>
<!-- 
				<form method="post" action="{{ route ('guardar')}}" name="nuevo">

				{{ csrf_field() }}

					<div class="row uniform">
						<div class="12u 12u$(xsmall)">
							<input type="text" name="nombre" placeholder="Nombre" />
						</div>
						<div class="12u$ 12u$(xsmall)">
							<input type="email" name="email" placeholder="Email" />
						</div>

						<div class="6u 12u$(xsmall)">
							<input type="text" name="app" placeholder="Primer Apellido" />
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input type="text" name="apm" placeholder="Segundo Apellido" />
						</div>

						<div class="6u 12u$(xsmall)">
							<input type="text" name="pass" placeholder="Contraseña" />
						</div>

						<div class="12u 12u$(small)">
							<input type="text" name="tel" placeholder="Telefono" />
						</div>

						<div class="4u 12u$(small)">
							<input type="radio" name="gen" checked>
							<label for="demo-priority-low">Hombre</label>
						</div>
						<div class="4u 12u$(small)">
							<input type="radio" name="gen">
							<label for="demo-priority-normal">Mujer</label>
						</div> 

						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Enviar" class="special" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</div>
					</div>
				</form> -->

				<form action="{{ route ('guardar')}}" method="POST" name="nuevo">

{{ csrf_field() }}


@if(count($errors)>0)

@foreach($errors->all() as $error)

{{ $error }}<br>

@endforeach

<br>

@endif

Fecha de nacimiento : <input type="date" name="fn">

<div class="12u 12u$(small)">

Matricula : <input type="text" name="matricula" value="{{ old('matricula')}}">

</div>

@if($errors->first('matricula')) <i>{{$errors -> first ('matricula')}}</i>@endif
<div class="12u 12u$(small)">
Nombre : <input type="text" name="nombre" value="{{ old('nombre')}}">
</div>
@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

<div class="12u 12u$(small)">
Email : <input type="text" name="email"><br>
</div>

<div class="12u 12u$(small)">
Apellido Paterno : <input type="text" name="app" value="{{ old('app')}}"><br>
</div>

<div class="12u 12u$(small)">
Apellido Materno : <input type="text" name="apm"><br>
</div>

<div class="12u 12u$(small)">
Password : <input type="text" name="pass"><br>
</div>

<div class="12u 12u$(small)">
Telefono : <input type="text" name="tel"><br>
</div>
<hr>
<!--*Genero : <input type="text" name="gen"><br>
Imagen : <input type="text" name="img"><br>
Grupo : <input type="text" name="grupo"><br>
*Activo : <input type="text" name="activo"><br> -->

<input type="submit" value="Guardar">
</form>

				<hr />
			</section>


		</div>

		@include ('layouts.footer')

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>