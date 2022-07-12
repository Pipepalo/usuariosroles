<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Else_;

class RegisterController extends Controller
{
    public function show(){
        if( !Auth::check() ){
            return redirect('/home');
        }
        if( Auth::user()->rol != 'admin' ){
            return redirect('/home');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'Usuario creado exitosamente');
    }
}