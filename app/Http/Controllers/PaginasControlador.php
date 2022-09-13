<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasControlador extends Controller
{
    /* Cotrolador para vista principal */
    public function welcome(){
        return view('welcome');
    }

    public function landingpage(){
        return view('landingpage');
    }

    public function contacto($test = null){
        $std_field=[];
        if($test == '1234' or $test == 1234){
            $std_nombre="test";
            $std_correo="test@gmail.com";

            $std_field=[$std_nombre, $std_correo];
        }
        else{
            $std_nombre = "";
            $std_correo = "";

            $std_field=[$std_nombre, $std_correo];
        }
        
        return view('contacto', compact('std_field'));
    }

    /* Metodo para recibir del formulario */
    public function recibeFormContacto(Request $request){
        /* dd($request->all()); */
        /* Recibe */
        /* Validar */
        $request->validate([
            'name' => 'required | max:32 | min:3',
            'email' => 'required | email',
            'message' => 'required | max:2 | min:150',
        ]);
        /* Insertar a BD */
        /* Redirigir */
    }
}
