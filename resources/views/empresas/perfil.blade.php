@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


@stop

@section('content')
<section style="background-color: #eee;">
  <div class="container">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://2.bp.blogspot.com/-8iTV3tvjp7g/Tjl9WOm0-tI/AAAAAAAAABI/DMhoo9wBXN8/s320/colacteos.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Colacteos</h5>
            
          </div>
        </div>

        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://colacteos.com</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">colacteos</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@colacteos</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">colacteos</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">colacteos</p>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NIT</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">8912012944</p>
              </div>
            </div>
            
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">talentohumano@colacteos.com</p>
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Teléfono</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">+57 317 7816234</p>
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Dirección</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Cra 36 No. 13-26 / Av. Panamericana, Pasto</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Mision</span></p>
                <p class="mb-1" style="font-size: .90rem;">Somos la cooperativa lechera de Nariño que impacta la cadena alimentaria con productos de calidad, aportando bienestar social y económico en su entorno”.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Vision</span></p>
                <p class="mb-1" style="font-size: .90rem;">Nuestra visión es ser una empresa de carácter social que genere satisfacción y bienestar a sus grupos de interés de manera sostenible, con innovación, calidad y precio justo</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col">
            <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">Descripción</span></p>
                        <p class="mb-1" style="font-size: .90rem;">
                        Nacimos en los años 60 como fruto de la unión  de los ganaderos de Nariño y la visión de generar oportunidades para el departamento y toda su comunidad.
                        Con el paso de los años nos hemos posicionamos en el corazón de los colombianos gracias al compromiso de llevar bienestar con cada alimento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
