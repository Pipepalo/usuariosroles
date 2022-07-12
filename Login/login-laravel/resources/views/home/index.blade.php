@extends('layouts.app-master')
<title>Inicio</title>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
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
                        <a href="http://winserver.local:12000/portal" class="btn btn-success">Tickets</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Domicilios</h5>
                        <p class="card-text">Acceda al servicio de domicilios</p>
                        <a href="http://domisj.local:3001/#!/form" class="btn btn-success">Domicilios</a>
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
                        @if( Auth::user()->email == "002" )
                            <a href="http://172.16.2.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "003" )
                            <a href="http://172.16.3.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "004" )
                            <a href="http://172.16.4.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "005" )
                            <a href="http://172.16.5.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "006" )
                            <a href="http://172.16.6.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "007" )
                            <a href="http://172.16.7.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "008" )
                            <a href="http://172.16.8.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "009" )
                            <a href="http://172.16.9.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "010" )
                            <a href="http://172.16.10.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "011" )
                            <a href="http://172.16.11.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "012" )
                            <a href="http://172.16.12.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "013" )
                            <a href="http://172.16.13.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "014" )
                            <a href="http://172.16.14.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "015" )
                            <a href="http://172.16.15.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "016" )
                            <a href="http://172.16.16.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "017" )
                            <a href="http://172.16.17.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "018" )
                            <a href="http://172.16.18.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "019" )
                            <a href="http://172.16.19.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "023" )
                            <a href="http://172.16.23.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "024" )
                            <a href="http://172.16.24.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "026" )
                            <a href="http://172.16.26.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "027" )
                            <a href="http://172.16.27.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "028" )
                            <a href="http://172.16.28.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "029" )
                            <a href="http://172.16.29.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "101" )
                            <a href="http://172.16.101.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "103" )
                            <a href="http://172.16.103.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                        @if( Auth::user()->email == "104" )
                            <a href="http://172.16.104.12:8081" class="btn btn-success">Camaras</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Marcaciones</h5>
                        <p class="card-text">Acceda al servicio de marcaciones</p>
                        <a href="http://winserver.local/CronosegWeb/Account/Login.aspx?ReturnUrl=%2fCronosegWeb%2fDefault.aspx" class="btn btn-success">Marcaciones</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rappi</h5>
                        <p class="card-text">Domicilios con rappi</p>
                        <a href="https://mitienda.rappi.com.co/" class="btn btn-success">Rappi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 tarjeta">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Preparaciones</h5>
                        <p class="card-text">Servicio de preparaciones</p>
                        <a href="http://prepas.local/aplicacion/prepa/index.php" class="btn btn-success">Camaras</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Plan cap</h5>
                        <p class="card-text">Plan cap</p>
                        <a href="http://plancap.co/drogueria/default/login" class="btn btn-success">Plan cap</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sip asociado</h5>
                        <p class="card-text">Sip asociado</p>
                        <a href="https://sipasociados.coopidrogas.com.co/drogueria/login" class="btn btn-success">Sip asociado</a>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 tarjeta">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Urbanos</h5>
                        <p class="card-text">Urbanos</p>
                        <a href=" https://plataforma.mensajerosurbanos.com/page/login" class="btn btn-success">Urbanos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Correo coopidrogas</h5>
                        <p class="card-text">Correo coopidrogas</p>
                        <a href="https://mail.coopidrogas.org" class="btn btn-success">Correo coopidrogas</a>
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