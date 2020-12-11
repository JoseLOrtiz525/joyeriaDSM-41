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

	.pag {
		text-align: center;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')


				<h2>Catalogo de productos</h2>



				<form action="{{ route('buscar')}}" method="GET" name="buscar">
					{{ csrf_field() }}
					<div class="container">
						Buscar: <input type="text" name="buscar" value="{{ old('buscar')}}" placeholder="Buscar por nombre: Juan">
					</div>

					<div class="container">

						<!-- Precio Minimo:
						<input type="int" name="precioMin" value="{{ old('buscar')}}"><br>

						Precio Maximo:
						<input type="int" name="precioMax" value="{{ old('buscar')}}"> -->
					</div>

					<br>
					<input type="submit" value="Buscar">


				</form>

				<div>
					<div class="container">
						<div class="row">
							<div class="col-sm-3 bg-light">
								

							</div>
							<div class="card">
								<div class="row  justify-content-center">
									
									@forelse($usus as $usu)
									<div class="col-4 border p-5 mt-5 text-center">
										<img src="{{ asset('img/'.$usu->img) }} " alt="Imagen" width="200" height="200">
										
										<div class="container">
											{{ $usu->nombre_producto}}<br>
											{{ $usu->no_existencias}}<br>
											{{ $usu->descripcion}}<br>
											{{ $usu->medida }}<br>
											<P>$ {{ $usu->precio_oferta}}</P>
										</div>
										
										<a href="{{ route('detalleProducto', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Detalle</a><br></br>

										<form action="{{route('cart.add')}}" method="post">
											@csrf
											<input type="hidden" name="producto_id" value="{{$usu->id_producto}}">
											<input type="submit" name="btn" class="btn btn-success" value="ADD TO CART">
										</form>

									</div>
									@empty

									@endforelse
								</div>
							</div>
						</div>
					</div>



				</div>


				<div class='pag'>
					{{ $usus->links() }}
				</div>
			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>


</html>