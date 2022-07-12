@extends('layouts.app-master')
<title>Encuesta</title>

<script src="{{ url('/assets/js/jquery-3.4.1.min.js') }}"></script>
<link rel="stylesheet" href="{{ url('/assets/css/estiloInicio.css') }}">
@section('content')
    <p class="titulo">Registro de inventario faltante</p>

    <div class="form-group formas">
        <label for="exampleInputEmail1" class="datos">Codigo</label>
        <input type="text" class="form-control" id="doc" placeholder="Codigo" onblur="buscar();">
    </div>
    <div class="form-group formas">
        <label for="exampleInputEmail1" class="datos">Nombre del producto</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre" disabled>
    </div>

    <div class="form-check checkName">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked onchange="habilitarInputTexto();">
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
        if(parseInt(doc) > 30000 || doc.length != 6){
            alert("Codigo no cumple con el formato");
            return;
        }
        var parametros = {
            "doc" : doc,
            "buscar" : "1"
        };

        $.ajax({
            data: parametros,
            dataType: 'json',
            url: 'busqueda.php',
            type: 'POST',
        beforesend: function(){
            alert("enviando");
        },

        success: function(valores){
            $("#nombre").val(valores.nombre);
            
            
        },
        error: function(error){
            alert(error);
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
                    data: parametros,
                    dataType: 'json',
                    url: 'insertarDatos.php',
                    type: 'POST',
                    beforesend: function(){
                        $('#mostrar_mensaje').html("Mensaje antes de Enviar");
                    },

                    success: function(resultado){
                        if(resultado){
                            alert("Aniadido correctamente");
                        }
                        else{
                            alert("No se pudo aniadir");
                        }
                    },
                    error: function(resultado){
                        alert("Error");
                    }
                });
                location.reload(true);
            }
            else{
                alert("Codigo no cumple con el formato");
            }
        }
        else{
            alert("ERROR: Campo nombre o codigo vacio");
        }
    }
</script>

@endsection