<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contacto;

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
        
        return view('contacto', compact('std_field'));
    }

    /* Metodo para recibir del formulario */
    public function recibeFormContacto(Request $request){
        /* Recibe */

        /* Nombre de los inputs / valores que revcibe */
        /* dd($request->all()); */
        /* dd($request->only('name')); */
        /* dd($request->email); */

        /* Validar */

        $request->validate([
            /* name sera requerido, con minimo de 3 y maximo de 50 */
            'name' => 'required|max:50|min:3',
            /* email sera requerido y con formato de email */
            'email' => 'required|email',
            /* Los comentarios son requeridos, con minimo de 2 y maximo de 150 */
            'message' => 'required|min:2|max:150',
        ]);
        
        echo "paso de validaciones";

        /* Insertar a BD */

        /* Guardar segunda version, con modelo */
        Contacto::create([
            'name'=> $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        /* Si las columans se llaman igual que los inputs, se puede usar lo siguiente */
        /* Contacto::create($request->all()); */

        /* como guardar en base de datos primera version */
        //DB::table('contactos')->insert([
            /* $request->all() */
            /* Columnas / lo que viene del formulario */
        //    'name' => $request->name,
        //    'email'=> $request->email,
        //    'message'=> $request->message,
        //    'created_at' => now(),
        //    'updated_at' => now(),
        //]);

        /* Redirigir */
        
        return redirect('/contacto');
    }
}
