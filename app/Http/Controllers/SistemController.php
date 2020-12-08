<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use App\ProductosModel;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarRequest;
use App\Http\Requests\ValidarProductosRequest;

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

    public function catalogo()
    {
        $usus = ProductosModel::all();
        return  view("templates.catalogo")
        ->with(['usus' => $usus]);
    }

    public function usuarios()
    {
        $usus = UsuariosModel::all();
        return  view("templates.usuarios")
        ->with(['usus' => $usus]);
    }

    public function guardar(ValidarRequest $request){

    $usu = UsuariosModel::create($request->only('nombre', 'email', 'app' , 'apm' , 'pass', 'tel','matricula','fn'));
    return redirect()->route('registrarse');
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
        return view('templates.carrito');
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

}
