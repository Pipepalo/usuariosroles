<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EncuestaController extends Controller
{
    public function show(){
        if(Auth::check()){
            return view('encuesta.encuesta');
        }
        return view('auth.login');
    }

    public function buscar(Request $request){
        if($request->ajax()){
            if(isset($_POST["buscar"])){
                $codigo = $_POST["doc"];
                $valores = array();
                $valores["existe"] = "0";
                $valores["nombre"] = "No encontrado";
                if(!is_numeric($codigo) || intval($codigo) > 30000 || $codigo == NULL){
                    echo "<center>El campo codigo no es valido</center>";
                }
                else{            
                    $host = "172.16.0.10";
                    $user = "BIABLE17";
                    $pw = "BIABLE17";
                    $db = "BD_BIABLE17";
                
                    $conexionItem = mysqli_connect($host, $user, $pw) or die("Unable to Connect to '$host'");
                    mysqli_select_db($conexionItem, $db) or die("Could not open the db '$db'");	

                    $consulta = "SELECT DESCRIPCION FROM ITEMS WHERE ID_ITEM=".$codigo;
        
                    $result = mysqli_query($conexionItem, $consulta);
                    
                    if($result == true){
                        $row = mysqli_fetch_array($result);
                        $valores["existe"] = "1";
                        $valores["nombre"] = $row["DESCRIPCION"];
                        
                        return $valores;
                    }
                    else{
                        return;
                    }
                    
                }
            }
        }
    }

    public function insertarDatos(Request $request){
        if($request->ajax()){
            $codigo = $_POST["doc"];
            $nombre = $_POST["nombre"];
        
        
            $sql =  "INSERT INTO vtiger_encuestadata (nombre, codigo) VALUES ('{$nombre}', '{$codigo}')";

            $host="172.16.1.19";
            $user="root";
            $pw="CRMsanjorge.admin2021";
            $db="crmsanjorge";
        
            //Conexion a MYSQL
            $conexion = mysqli_connect($host,$user,$pw) or die("Unable to Connect to '$host'");
            mysqli_select_db($conexion, $db) or die("Could not open the db '$db'");

            $result = mysqli_query($conexion, $sql);
            if ($result == true) {
                return 1;
            }
            else{
                return 0;
            }
        }
    }
}
