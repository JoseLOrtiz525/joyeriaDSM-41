<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <title>Carrito</title>
</head>
<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card header">Carrito de Compras</div>

                        <div class="card-body">
                        @if(session('status'))
                         <div class="alert alert-success" role="alert">
                         {{ session('status') }}
                        </div>
                        @endif
                        
                        @if(session('addCarrito'))
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
                        @endif
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>   
    
    
</body>
</html>