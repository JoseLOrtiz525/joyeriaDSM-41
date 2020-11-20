<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarRequest;

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

    public function elements()
    {
        return  view("templates.elements");
    }

}
