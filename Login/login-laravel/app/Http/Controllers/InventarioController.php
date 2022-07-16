<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class InventarioController extends Controller
{
    public function reportar(Request $request){
        $result = shell_exec("python /assets/public/js/lectorDocs.py 2>&1");
        if($result == "HHHHHH"){
            // return redirect()->to("/home");
        }
        else{
            // return redirect()->to("/sistema");
        }
        
    }
}