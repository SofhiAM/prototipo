@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Calificaciones</h1>


@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <h4 class="mb-0">Encuentra tu practica</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Type here...">
                                </div>
                            </div>
                        </div>        
                    </div>  
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">                        
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="row justify-content-center">  
                                    <div class="col-auto">
                                        <div class="position-relative justify-content-center">
                                            <img src=".\pasto.jpg" height="150" alt="logo" loading="lazy"/>
                                        </div>
                                    </div>
                                    <div class="col-auto my-auto">
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Economista</h2>
                                        </div>
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Alcaldia de Pasto</h2>
                                        </div>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 100px">
                                        <p>SE busva ksadskdksadksdkamls</p>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 270px">
                                        <div class="ms-auto justify-content-center">
                                            <a class="btn btn-success text-gradient px-3 mb-0" href="#"><i class="far fa-view-alt me-2"></i>Postularse</a>
                                        </div>
                                    </div>
                                </div>
                            </li>       
                        </ul>
                    </div>
                </div> 
            </div> 
        </div>                    
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
