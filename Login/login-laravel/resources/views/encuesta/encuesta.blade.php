<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="shortcut icon" href="/crmsanjorge/layouts/v7/skins/images/favicon.ico">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/time.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <style>
        .footer-logo {
            display:block;
            margin:auto;	
            height: 90px;
            padding-top: 1px;
            padding-bottom: 20px;
            background-color: transparent;
        }
        h3, h4 {
            margin-top: 0px;
        }
        .user-logo {
            display:block;
            height: 170px;
            margin: auto;
            padding-top: 20px;
            padding-bottom: 10px;
        }
        div.fecha{
            padding: 20px 20px 20px 20px;
            margin: 10px 0px;
        }
        p.indicaciones{
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            line-height: 10%;
        }
        div.selector-sede{
            padding: 0 20px 20px 20px;
            margin: 20px 0px;
            
        }
        div.codigo{
            padding: 0 20px 20px 20px;
        }
        div.nombre{
            padding: 30px 20px 20px 20px;
        }
        p.notafinal{
            position: relative;
            text-align: center;
            font-weight: bold;
            color: #008e54;
            font-size: 12px;
            line-height: 10%;

        }
        p.notafinal2{
            text-align: center;
            font-weight: bold;
            color: #008e54;
            font-size: 10px;
            line-height: 10%;

        }
        div.enviar{
            padding-top: 20px;
        }
        div.formato{
            width: 100%;
            background-color: #2aa15d;			

            border-radius: 4px;
            height: 100%;
            line-height: 20px;
        }
    
    </style>
</head>


<body>
    <img class="img-responsive user-logo" src="images/Sanjorge.png">
    
    <div class="formato">
        <div class="fecha">
            <p class="indicaciones">La fecha de entrada es: </p>
            <div id="getTime">
                <script type="text/javascript">
                    getTime();
                </script>
            </div>              
        </div>
        
        <div class="selector-sede">
            <p class="indicaciones">Debe seleccionar la sede donde se encuentra</p>

            <select class="form-select" aria-label="Default select example">
                <option selected>Elija una sede</option>
                <option value="1">001 - </option>
                <option value="2">002 - </option>
                <option value="3">003 - </option>
            </select>
        </div>
        
        <div class="codigo">
            <p class="indicaciones">Ingrese el codigo item del producto (6 caracteres)</p>
            <div class="row justify-content-center">
                <div class="col-xs-5">

                    <div placeholder=".col-xs-5">
                        <input id="doc" type="text" name="codigo" id="Codigo" onblur="buscar();">
                    </div>
                </div>
            </div>
        </div>

        <div class="nombre">
            <p class="indicaciones">Nombre del producto</p>
            <div class="row justify-content-center">
                <div class="col-xs-5">
                    <div placeholder=".col-xs-5">
                        <input id="nombre" type="text" placeholder="Nombre del producto" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked onchange="habilitarInputTexto();">
        <label class="form-check-label" for="flexCheckChecked">
            Confirme si es correcto el nombre
        </label>
    </div>


    <div class="enviar">
        <button type="submit" class="btn btn-success mb-3" onclick="verificarDatos();">Enviar</button>
    </div>
    
    <img class="img-responsive footer-logo" src="images/GestionHumana.png">
    <p class="notafinal">Iniciativa del &aacute;rea de gesti&oacute;n humana con el apoyo del &aacute;rea de sistemas de farmacia Droguer&iacute;a San Jorge.</p>
    <p class="notafinal2">Todos los derechos reservados * Farmacia Droguer&iacute;a San Jorge 2011. </p>


</body>

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
        error: function(){
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
</html>