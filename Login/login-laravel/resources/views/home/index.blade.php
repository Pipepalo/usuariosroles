@extends('layouts.app-master')

@section('content')
    <H1>Home</H1>

    @auth
        <p>Esta logeado</p>
        <a href="/logout">Logout</a>
        <button type="button" class="btn btn-primary">Tickets</button>
        <button type="button" class="btn btn-primary">Encuestas</button>
        <button type="button" class="btn btn-primary">Camaras</button>
        <button type="button" class="btn btn-primary">Domis</button>
        <button type="button" class="btn btn-primary">Warning</button>
        <button type="button" class="btn btn-primary">Info</button>
        <button type="button" class="btn btn-primary">Light</button>
        <a type="button" href="http://172.16.1.19/crmsanjorge/empleado/prueba.php" class="btn btn-primary">Dark</a>
        
        @if ( Auth::user()->rol == 'estudiante' )
            <p> Hola soy estudiante </p>
    
        
        @endif

        @if ( Auth::user()->rol == 'profesor' )
            <p> Hola soy el profesor </p>

            <input type="submit" value="Enviar notas">
        @endif
    @endauth
    
    
@endsection