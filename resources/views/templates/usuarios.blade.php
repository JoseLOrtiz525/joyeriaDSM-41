<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Usuarios Registrados</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<link rel="stylesheet" href="{{ asset('css/nombre.css') }}">
</head>

<body class="is-loading">

	<!-- Wrapper -->
	<div id="wrapper">

		@include ('layouts.menu')

		<!-- Main -->
		<div id="main">

			<section>

				<h2>Usuarios registrados</h2>

				<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>ID</th>
													<th>Matricula</th>
													<th>Nombre</th>
													<th>Genero</th>
													<th>Email</th>
												</tr>
											</thead>
											@foreach($usus as $usu)
											<tbody>
												<tr>
													<td>{{ $usu->id_usuario}}</td>
													<td>{{ $usu->matricula}}</td>
													<td>{{ $usu->app }} {{ $usu->apm }} {{ $usu->nombre }}</td>
													<td>	@if($usu->gen == 0)
						Masculino
						@else
						Femenino
						@endif</td>
													<td>{{ $usu->email}}</td>
												</tr>
											</tbody>

											@endforeach
											<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->
										</table>
									</div>

				

				<!-- <div id="">
					<div class=""></div>
					<h1>
						
					</h1>
					<div class="">

					 <br>
						
						 <br>
						{{ $usu->pass }} <br>
						{{ $usu->img }} <br>
						{{ $usu->id_grupo }} <br>
						{{ $usu->id_tipo}} <br>
						{{ $usu->activo }} <br>
					</div>
				</div> -->

	
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