<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('/assets/css/styleRegister.css') }}">
    <title>Iniciar Sesion</title>
</head>
<body>
    @include('layouts.partials.banner')    
    <header>
    
        @include('layouts.partials.navbar')
    </header>
    <p class="titulo">Iniciar Sesión</p>
    <form action="/login" method="POST" class="container registro">
        @csrf
        <div class="form-row">
            <div class="form-group formas">
                <label for="exampleInputEmail1" class="datos">Nombre de usuario</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre de usuario">
            </div>
            <div class="form-group formas">
                <label for="exampleInputEmail1" class="datos">Contraseña</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
            </div>
            <div class="envio">
                <input type="submit" class="btn btn-success " value="Entrar">
            </div>
        </div>
    </form>
    @include('layouts.partials.footer')


    
</body>
</html>