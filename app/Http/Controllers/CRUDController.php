<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use App\VentasModel;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarRequest;
use App\Http\Requests\ValidarVentasRequest;

class CRUDController extends Controller
{
    
    //--------------------------- Ventas  -----------------------------------------------
    
        public function guardarVentas(ValidarVentasRequest $request){
    
            $usus = VentasModel::create($request->only('monto_total', 'direcciones_id', 'clientes_id'));
            return redirect()->route('registrarVentas');
        }
    
        public function registrarVentas()
        {
            return  view("templates.registrar_ventas");
        }
    
        public function ventas()
        {
            $usus = VentasModel::all();
            return  view("templates.ventas")
            ->with(['usus' => $usus]);
        }

        
        public function modificarVentas(VentasModel $id){
            return view("templates.editarVentas")
                ->with(['usu' => $id]);
        }
        public function salvarVentas(VentasModel $id, Request $request){

                //  $id = AlumnosModel::find($id);
                 $id->update($request->only('monto_total', 'direcciones_id', 'clientes_id'));

                return redirect()->route('ventas');

        }

        public function borrarVenta(VentasModel $id){
            $id->delete();
            return redirect()->route('ventas');
        }
}
