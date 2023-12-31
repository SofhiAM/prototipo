@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h3>¡Bienvenido!</h3>
    <h6>Udepractis esta lista para contactarte con grandes empresas </h6>

@stop

@section('content')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://www.acofi.edu.co/wp-content/uploads/2013/10/UNIVERSIDAD-DE-NARINO-1-300x300.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Código estudiantil</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Contraseña</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"/>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar Sesión</button>

          </div>

        </form>
      </div>
    </div>
  </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
