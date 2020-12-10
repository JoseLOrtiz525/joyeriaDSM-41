<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use App\ProductosModel;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarRequest;
use App\Http\Requests\ValidarProductosRequest;
use Illuminate\Support\Facades\DB;

class SistemController extends Controller
{
    
    public function login()
    {
    
        return  view("templates.login");
    }

    public function home()
    {
        return  view("layouts.index");
    }

    public function registrarse()
    {
        return  view("templates.registrarse");
    }

    public function iniciar_sesion()
    {
        return  view("templates.iniciar_sesion");
    }

    public function catalogo(Request $request, $buscar=null)
    {
        $usus = ProductosModel::paginate(3);
        $orders = ProductosModel::Buscar($request->get('buscar'))
        ->orderBy('nombre');
        return  view("templates.catalogo")
        ->with(['usus' => $usus])
        ->with(['orders' => $orders]);
    }

    public function usuarios()
    {
        $usus = UsuariosModel::all();
        return  view("templates.usuarios")
        ->with(['usus' => $usus]);
    }

    public function guardar(ValidarRequest $request){

    $usu = UsuariosModel::create($request->only('nombre', 'email', 'app' , 'apm' , 'pass', 'tel','matricula','fn'));
    return redirect()->route('layouts.index');
    }

    public function modificar(UsuariosModel $id){
        return view("templates.editar")
            ->with(['usu' => $id]);
    }
    public function salvar(UsuariosModel $id, Request $request){

             $id->update($request->only('nombre', 'email', 'app' , 'apm' , 'pass', 'tel','matricula','fn'));

            return redirect()->route('usuarios');
    }

    public function borrar(UsuariosModel $id){
        $id->delete();
        return redirect()->route('usuarios');
    }



    public function guardarProductos(ValidarProductosRequest $request2){

        $usu = ProductosModel::create($request2->only('nombre_producto','no_existencias', 'precio','descripcion','medida','precio_oferta'));
        return redirect()->route('registrarProductos');
        }

    public function registrarProductos()
    {
        return  view("templates.registrar_productos");
    }

    public function modificarProductos(ProductosModel $id){
        return view("templates.editarProductos")
            ->with(['usu' => $id]);
    }
    public function salvarProductos(ProductosModel $id, Request $request){

             $id->update($request->only('nombre_producto','no_existencias', 'precio','descripcion','medida','precio_oferta'));

            return redirect()->route('productos');
    }

    public function borrarProducto(ProductosModel $id){
        $id->delete();
        return redirect()->route('productos');
    }



    public function productos()
    {
        $usus = ProductosModel::all();
        return  view("templates.productos")
        ->with(['usus' => $usus]);
    }

    public function carrito()
    {
        $usus = ProductosModel::all();
        return view('templates.carrito')
        ->with(['usus' => $usus]);
    }

    public function addCarrito($id=null)
    {
        $usus = ProductosModel::all();
        return view('templates.carrito')
        ->with('id', $id)
        ->with(['usus' => $usus]);
    }

    public function detalleProducto($id=null)
    {
        $usus = ProductosModel::find($id);
        return view('templates.detalle_producto')
        ->with('id', $id)
        ->with(['usu' => $usus]);
    }

    public function buscar(Request $request)
    {
       
        
        $query = ProductosModel::Buscar($request->get('buscar'))->paginate(3);
        // dd($query);
        return view("templates.catalogo")
        ->with(['usus' => $query]);

    }

}
