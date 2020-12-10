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

<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		transition: 0.3s;

		border-radius: 5px;
		text-align: center;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	img {
		border-radius: 5px 5px 0 0;
	}

	.container {
		padding: 2px 16px;
	}

	.izquierda {
		text-align: right;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')

				<div>
					<h2>Carrito de productos</h2>
					<div class="izquierda">
						<a href="{{ route('catalogo')}}" class="button big">Regresar</a><br>
					</div>
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
						<input type="hidden" name="total" value="{{$total=0}}">

						<?php

						?>

						@foreach($usus as $usu)
						@if($id == $usu->id_producto)
						<tbody>
							<tr>
								<td>{{ $usu->nombre_producto}}</td>
								<td>{{ $usu->no_existencias}}</td>
								<td> <strike> {{ $usu->precio }}</strike></td>
								<td>{{ $usu->descripcion}}</td>
								<td>{{ $usu->medida }}</td>
								<td>{{ $usu->precio_oferta}}</td>

							</tr>
						</tbody>
						<input type="hidden" name="total" value="{{$total=$total+ $usu->precio_oferta }}">


						@endif

						@endforeach
						<tfoot>

							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="2">Total</td>
								<td>${{$total}}</td>
							</tr>
						</tfoot>
					</table>



				</div>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>