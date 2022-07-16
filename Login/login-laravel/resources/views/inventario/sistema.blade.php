@extends('layouts.app-master')
<title>Sistema inventario</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
    <form action="/convertir" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Cargue el archivo</label>
            <input class="form-control" name="file" type="file" id="formFile">
        </div>
        <button class="button login__submit" value="Entrar">
			<span class="button__text">Enviar</span>
			<i class="button__icon fas fa-chevron-right"></i>
		</button>
    </form>    
@endsection