@extends('layouts.app-master')
<title>Encuesta</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ url('/assets/css/estiloInicio.css') }}">
@section('content')
    <p class="titulo">Registro de agotados y no codificados</p>

    <div class="form-group formas">
        <label class="datos">Codigo</label>
        <input type="text" class="form-control" id="doc" placeholder="Codigo" onblur="buscar();">
    </div>
    <div class="form-group formas">
        <label class="datos">Nombre del producto</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre" disabled>
    </div>

    <div class="form-check checkName">
        <input class="form-check-input" type="checkbox" id="flexCheckChecked" onchange="habilitarInputTexto();" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Confirme si es correcto el nombre
        </label>
    </div>
    
    <div class="enviar">
        <button type="submit" class="btn btn-success mb-3" onclick="verificarDatos();">Enviar</button>
    </div>

<script>
	function buscar(){
        doc = $("#doc").val();
        if(parseInt(doc) == 0){
            alert("Ingrese el nombre manualmente");
            habilitarInputTexto();
            return;
        }
        if(parseInt(doc) > 30000 || doc.length != 6){
            alert("Codigo no cumple con el formato");
            return;
        }
        var parametros = {
            "doc" : doc,
            "buscar" : "1"
        };

        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: parametros,
            method: "POST",
            url: "{{ route('encuesta.busqueda') }}",
        beforesend: function(){
            alert("enviando");
        },

        success: function(valores){
            $("#nombre").val(valores.nombre);

        },
        error: function(error){
            alert("Error");
        }
        });
    }

    function habilitarInputTexto(){ 
        if(document.getElementById("nombre").disabled == false){
            document.getElementById("nombre").disabled = true;
        }
        else{
            document.getElementById("nombre").disabled = false;
        }
    }
    
    function verificarDatos(){
        doc = $("#doc").val(); 
        name = $("#nombre").val();

        if(doc != "" && name != ""){
            if(parseInt(doc, 10) < 30000 || doc.length == 6){
                var parametros = {
                    "doc" : doc,
                    "nombre" : name
                }
                $.ajax({ 
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: parametros,
                    method: 'POST',
                    url: "{{ route('encuesta.insertarDatos') }}",
                    beforesend: function(){
                        $('#mostrar_mensaje').html("Mensaje antes de Enviar");
                    },

                    success: function(resultado){
                        alert("Entrando");
                        if(resultado == 1){
                            alert("Aniadido correctamente");
                        }
                        else{
                            alert("No se pudo aniadir");
                        }
                    },
                    error: function(){
                        alert("Error");
                    }
                });
                location.reload(true);
            }
            else{
                if(parseInt(doc, 10) > 30000){
                    alert("Codigo supera los 30000");
                }
                else if(doc.length != 6){
                    alert("El codigo es diferente a 6 carácteres");
                }
                
            }
        }
        else{
            alert("ERROR: Campo nombre o codigo vacio");
        }
    }
</script>

@endsection