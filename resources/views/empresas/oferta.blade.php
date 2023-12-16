@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registra una oferta</h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">

@stop

@section('content')

    <div class="container">
        <div class="wrap">
            <form>
           
            <div class="form-body">
                <fieldset>
                <legend></i>Información de la Oferta</legend>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-briefcase"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Cargo a desempeñar" type="text">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="¿Donde se va a desempeñar?" type="text">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-industry"></i> </span>
                        </div>
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Área de desempeño
                            </button>
                        </div>
                    </div>

                <fieldset>
                <legend></i>¿De qué se trata tu oferta?</legend>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-file-alt"></i> </span>
                        </div>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción de la oferta"></textarea>
                    </div> <!-- form-group// -->
                </fieldset>

                    
                </fieldset>
                <fieldset>
                <legend></i>Funciones</legend>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-tasks"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Enumera lo que debe hacer el estudiante" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                <legend></i>Requisitos</legend>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Enumera lo que necesitas para tu empresa" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                    </div>
                </fieldset>

                </fieldset>
                <fieldset>
                <legend></i>Consideraciones</legend>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-clock"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Horario" type="text">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-money-bill"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Remuneración" type="text">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-calendar-alt"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Duración" type="text">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-users"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Vacantes disponibles" type="text">
                    </div>
                </fieldset>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Publicar oferta</button>
                </div>
            </form>
</div>
<!-- partial -->
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Aquí podrías realizar alguna lógica adicional antes de mostrar el modal

                // Muestra el modal
                $('#successModal').modal('show');
            });
        });
    </script>

@stop
