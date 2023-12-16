<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrarEmp extends Controller
{
    public function index(){
        return view ('empresas.formulario');
    }
}
