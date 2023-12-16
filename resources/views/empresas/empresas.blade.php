@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Empresas</h1>


@stop

@section('content')
    <p>Estas son las empresas que colaboran con la misión de preparar en el campo laboral a nuestros estudiantes</p>

    <div class="container">
        <div class="card mb-3" >
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="https://2.bp.blogspot.com/-8iTV3tvjp7g/Tjl9WOm0-tI/AAAAAAAAABI/DMhoo9wBXN8/s320/colacteos.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Colacteos</strong></h4>
                        <p class="card-text">Somos la cooperativa lechera de Nariño que impacta la cadena alimentaria con productos de calidad, aportando bienestar social y económico en su entorno.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-info">Saber más</button>
                </div>
            </div>
        </div>
        
        <div class="card mb-3" >
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="https://th.bing.com/th/id/OIP.U_xRm68pEzo_WuGXGJlRwQHaE7?rs=1&pid=ImgDetMain" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Alkosto</strong></h4>
                        <p class="card-text">Alkosto es una cadena de almacenes colombiana, comercializadora de electrodomésticos, mercado, llantas, tecnología, motos y productos del hogar.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-info">Saber más</button>
                </div>
            </div>
        </div>

        <div class="card mb-3" >
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="https://www.nuva.co/wp-content/uploads/2019/07/cliente-logo-cedenar.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Cedenar</strong></h4>
                        <p class="card-text">Generamos energía limpia preservando y cuidando el medio ambiente con altos estándares de Calidad y continuidad en el mercado, mejorando el bienestar y las condiciones de vida de nuestros usuarios, para esto contamos con 4 Centrales Hidroeléctricas Rio Mayo, Rio Bobo, Rio Sapuyes y Julio Bravo.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-info">Saber más</button>
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
