@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
<h1>Registro de Estudiantes</h1>
    <form action= "{{url('estudiantes/registrar')}}" method= "POST" >
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="codigoEst" class="form-label">Cedula</label>
                <input type="text" class="form-control" id="codigoEst" name="codigoEst" placeholder="Ingrese el cedula">
            </div>
            <div class="col-6">
                <label for="codigoEst" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigoEst" name="codigoEst" placeholder="Ingrese el código">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="nombreEst" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreEst" name="nombreEst" placeholder="Ingrese el nombre">
            </div>

            <div class="col-6">
                <label for="edadEst" class="form-label">Dirección</label>
                <input type="number" class="form-control" id="edadEst" name="edadEst" placeholder="Ingrese la Direccion">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="fechaEst" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaEst" name="fechaEst" placeholder="Fecha de nacimiento">
            </div>

            <div class="col-4">
                <label for="sexEst" class="form-label">Télefono</label>
                <input type="text" class="form-control" id="sexEst" name="sexEst" placeholder="Ingrese el Télefono">
            </div>

            <div class="col-4">
                <label for="sexEst" class="form-label">Correo</label>
                <input type="email" class="form-control" id="sexEst" name="sexEst" placeholder="Ingrese el correo">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="ciudadEst" class="form-label">Programa Académico</label>
                <input type="text" class="form-control" id="ciudadEst" name="ciudadEst" placeholder="Ingrese el Programa">
            </div>

            <div class="col-4">
                <label for="barrioEst" class="form-label">Semestre</label>
                <input type="number" class="form-control" id="barrioEst" name="barrioEst" placeholder="Ingrese el semestre">
            </div>
        </div>
        <div class="col-8">
            <label for="proEst" class="form-label">Registra tu hoja de vida</label>
            <input type="file" class="form-control" id="proEst" name="proEst" placeholder="Hoja de vida">
        </div><br>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
