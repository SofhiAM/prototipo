<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Estudiantes extends Controller
{
    public function index(){
        return view('estudiantes.listado');
    }

    public function login(){
        return view('estudiantes.login');
    }
}
