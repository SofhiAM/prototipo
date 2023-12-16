<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Empresas extends Controller
{
    public function index(){
        return view ('empresas.empresas');
    }

    public function registrar(){
        return view ('empresas.formulario');
    }

    public function perfil(){
        return view ('empresas.perfil');
    }

    public function login(){
        return view ('empresas.login');
    }

    public function oferta(){
        return view ('empresas.oferta');
    }
}
