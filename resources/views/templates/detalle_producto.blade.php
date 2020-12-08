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
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')


				<h2>Detalle Producto</h2>

				<div>


					<div class="card">
						<img src="{{asset('images/joya1.jpg')}}" alt="Imagen">
						<div class="container">
							Nombre del producto: {{ $usu->nombre_producto}}  <br>
							Numero de existencias actuales: {{ $usu->no_existencias}} <br>
							Precio: {{ $usu->precio }} <br>
							Descripcion: {{ $usu->descripcion}} <br>
							Medida: {{ $usu->medida }} <br>
							Precio de oferta: {{ $usu->precio_oferta}} <br>
							<br></br>
							<a href="{{ route('addCarrito', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Agregar al carrito</a><br></br>
							<a href="{{ route('catalogo')}}" class="button big">Regresar</a><br>

						</div>
					</div>




				</div>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>