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

			@include ('layouts.header')


				<h2>Usuarios registrados</h2>

				<div>
					<table>
						<thead>
							<tr>

								<th>Nombre producto</th>
								<th>Numero existencias</th>
								<th>Precio</th>
								<th>Descripcion</th>
								<th>Medida</th>
								<th>Precio de oferta</th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						<tbody>
							<tr>
								<td>{{ $usu->nombre_producto}}</td>
								<td>{{ $usu->no_existencias}}</td>
								<td>{{ $usu->precio }}</td>
								<td>{{ $usu->descripcion}}</td>
								<td>{{ $usu->medida }}</td>
								<td>{{ $usu->precio_oferta}}</td>

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