<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemController extends Controller
{
    public function login()
    {
    
        return  view("templates.login");
    }

    public function home()
    {
        return  view("templates.index");
    }

    public function registrarse()
    {
        return  view("templates.registrarse");
    }

}
