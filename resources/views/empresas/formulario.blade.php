@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrate aquí</h1>


@stop

@section('content')
    <p>¡Bienvenidas empresas! Únete a nosotros para brindar a estudiantes de la Universidad de Nariño la oportunidad de poner en práctica sus conocimientos.</p>

    <div class="container">
        <form>
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Nit de la empresa" type="text">
            </div>
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-building"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Nombre de la empresa" type="text">
            </div> <!-- form-group// -->
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Correo Electrónico" type="email">
            </div> <!-- form-group// -->
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Número de teléfono" type="text">
            </div> <!-- form-group// -->
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-briefcase"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Área de trabajo" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-book"></i> </span>
                </div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="¡Queremos conocerte!, escribe una pequeña descrición de tu empresa"></textarea>
            </div> <!-- form-group// -->

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Enviar solicitud</button>
            </div> <!-- form-group// -->      
        </form>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Solicitud enviada con éxito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¡Gracias por enviar tu solicitud! Uno de nuestros coordinadores evaluará la información proporcionada.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
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
