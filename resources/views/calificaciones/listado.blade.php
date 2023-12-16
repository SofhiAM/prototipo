@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ofertas</h1>


@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <h4 class="mb-0">Encuentra tu práctica y/o pasantía</h4>
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
                                    <div class="col-3 my-auto">
                                        <div class="position-relative justify-content-center">
                                            <img src="../imagenes/pasto.jpg" height="150" alt="logo" loading="lazy"/>
                                        </div>
                                    </div>
                                    <div class="col-3 my-auto">
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Contador</h2>
                                        </div>
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Alcaldia de Pasto</h2>
                                        </div>
                                    </div>
                                    <div class="col-3 my-auto" >
                                        <div class="ms-auto justify-content-rigth">
                                            <p class="mb-3 text-sm">La Alcaldia requiere para su área contable contador integral, para mantener la información contable al día</p>
                                        </div>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 20px">
                                        <i class="fas fa-map-marker"></i><p class="mb-3 text-sm">Pasto</p>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 20px">
                                        
                                        <a class="btn btn-success text-gradient px-3 mb-0" href="#"><i class="far fa-view-alt me-2"></i>Postularse</a>
                                       
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="row justify-content-center">  
                                    <div class="col-3 my-auto">
                                        <div class="position-relative justify-content-center">
                                            <img src="../imagenes/autos.png" height="150" alt="logo" loading="lazy"/>
                                        </div>
                                    </div>
                                    <div class="col-3 my-auto">
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Analista de Compras</h2>
                                        </div>
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Automotores S.A</h2>
                                        </div>
                                    </div>
                                    <div class="col-3 my-auto" >
                                        <div class="ms-auto justify-content-rigth">
                                            <p class="mb-3 text-sm">Importante empresa en el sector automotriz, se encuentra en búsqueda de una persona con aptitud</p>
                                        </div>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 20px">
                                        <i class="fas fa-map-marker"></i><p class="mb-3 text-sm">Pasto</p>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 20px">
                                        
                                        <a class="btn btn-success text-gradient px-3 mb-0" href="#"><i class="far fa-view-alt me-2"></i>Postularse</a>
                                       
                                    </div>
                                </div>
                            </li> 
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="row justify-content-center">  
                                    <div class="col-3 my-auto">
                                        <div class="position-relative justify-content-center">
                                            <img src="../imagenes/ferre.png" height="150" alt="logo" loading="lazy"/>
                                        </div>
                                    </div>
                                    <div class="col-3 my-auto">
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Auxiliar Contable</h2>
                                        </div>
                                        <div class="ms-auto justify-content-center">
                                            <h2 class="mb-3 text-sm">Ferreterias S.A</h2>
                                        </div>
                                    </div>
                                    <div class="col-3 my-auto" >
                                        <div class="ms-auto justify-content-rigth">
                                            <p class="mb-3 text-sm">Importante Constructora se encuentra en la búsqueda de técnico, tecnólogo o estudiante de Contaduría Públical</p>
                                        </div>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 20px">
                                        <i class="fas fa-map-marker"></i><p class="mb-3 text-sm">Pasto</p>
                                    </div>
                                    <div class="col-auto my-auto" style="margin-left: 20px">
                                        
                                        <a class="btn btn-success text-gradient px-3 mb-0" href="#"><i class="far fa-view-alt me-2"></i>Postularse</a>
                                       
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
