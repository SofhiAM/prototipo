<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilEmp extends Controller
{
    public function index(){
        return view ('empresas.perfil');
    }
}
