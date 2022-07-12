@extends('layouts.app-master')
<title>Inicio</title>

<link rel="stylesheet" href="{{ url('/assets/css/estiloInicio.css') }}">
@section('content')
    <p class="recursos">Recursos</p>


    @auth
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 tarjeta">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Encuesta</h5>
                        <p class="card-text">Registro de items agotados</p>
                        <a href="/encuesta" class="btn btn-success">Encuestas</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tickets</h5>
                        <p class="card-text">Creacion de tickets</p>
                        <a href="#" class="btn btn-success">Tickets</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Domicilios</h5>
                        <p class="card-text">Acceda al servicio de domicilios</p>
                        <a href="#" class="btn btn-success">Domicilios</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 tarjeta">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Camaras</h5>
                        <p class="card-text">Control de camaras</p>
                        <a href="#" class="btn btn-success">Camaras</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-success">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-success">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

    

        @if ( Auth::user()->rol == 'estudiante' )
            <p> Hola soy estudiante </p>
    
        
        @endif

        @if ( Auth::user()->rol == 'profesor' )
            <p> Hola soy el profesor </p>

            <input type="submit" value="Enviar notas">
        @endif
    @endauth
    
    @guest
        <p class="inicie">Por favor inicie sesión para acceder a todas las funcionalidades</p>
    @endguest
@endsection