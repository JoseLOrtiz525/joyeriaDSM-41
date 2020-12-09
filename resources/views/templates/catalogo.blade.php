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
				<l1 class="mr-1">
					<a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">
					Paypal
					</a>

					<form name="buscar" action="{{ route('productos') }}" method ="get">
					 {{ csrf_field() }}

					 Buscar Anillos: 
					 <a href="{{ route('productos',['buscar'=>'anillo']) }}">
					 	<img>
					 	<button>Anillos</button>
					 </a>
					 Buscar Pulseras: 
					 <a href="{{ route('productos',['buscar'=>'pulsera']) }}">
					 	<img>
					 	<button>Pulseras</button>
					 </a>
					 </form>

				<div>

					@foreach($usus as $usu)

					 

					 

					<table style="width:100%">
						<tr>
							<th>
								<div class="card">
									<img src="{{asset('images/joya1.jpg')}}" alt="Imagen">
									<!-- {{ asset('img/'.$usu->img) }} -->
									<div class="container">
										{{ $usu->nombre_producto}}
										{{ $usu->no_existencias}}
										{{ $usu->precio }}
										{{ $usu->descripcion}}
										{{ $usu->medida }}
										{{ $usu->precio_oferta}}
										<br></br>
										<a href="{{ route('addCarrito', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Agregar al carrito</a><br></br>
										<a href="{{ route('detalleProducto', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Detalle</a><br></br>
									</div>
								</div>
							</th>

							<th>
								<div class="card">
									<img src="{{asset('images/joya2.jpg')}}" alt="Imagen">
									<!-- {{ asset('img/'.$usu->img) }} -->
									<div class="container">
										{{ $usu->nombre_producto}}
										{{ $usu->no_existencias}}
										{{ $usu->precio }}
										{{ $usu->descripcion}}
										{{ $usu->medida }}
										{{ $usu->precio_oferta}}
										<br></br>
										<a href="{{ route('addCarrito', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Agregar al carrito</a><br></br>
										<a href="{{ route('detalleProducto', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Detalle</a><br></br>
									</div>
								</div>
							</th>

							<th>
								<div class="card">
									<img src="{{asset('images/joya3.jpg')}}" alt="Imagen">
									<!-- {{ asset('img/'.$usu->img) }} -->
									<div class="container">
										{{ $usu->nombre_producto}}
										{{ $usu->no_existencias}}
										{{ $usu->precio }}
										{{ $usu->descripcion}}
										{{ $usu->medida }}
										{{ $usu->precio_oferta}}
										<br></br>
										<a href="{{ route('addCarrito', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Agregar al carrito</a><br></br>
										<a href="{{ route('detalleProducto', ['id' => $usu->id_producto]) }}" class="button big" role="button" aria-pressed="true">Detalle</a><br></br>
									</div>
								</div>
							</th>

						</tr>

					</table>

					@endforeach


					<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->

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