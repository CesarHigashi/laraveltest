<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', function(){
    return view('landingpage');
});

Route::get('/contacto/{test?}', function($test = null){
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
});