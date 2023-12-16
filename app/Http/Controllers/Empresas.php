<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Empresas extends Controller
{
    public function index(){
        return view ('empresas.empresas');
    }
}
