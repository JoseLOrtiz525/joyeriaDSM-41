
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

								
<h2>Usuarios registrados</h2>

<div>
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
				<td> @if($usu->gen == 0)
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

						</div>
					</div>

				@include ('layouts.menu')

			</div>

			@include ('layouts.footer')

	</body>
</html>
