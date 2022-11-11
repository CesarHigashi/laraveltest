<?php

namespace Tests\Feature;

use App\Models\Contacto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
    }
    //El test de arriba puede servir para corroborar que el direccionamiento funciona correctamente

    public function test_campos()
    {
        $response = $this->get('/contacto');
        //El listado que recibe es contendio entre las etiquetas de los label
        $response->assertSeeText(['Nombre', 'Correo electronico', 'Comentarios']);
    }

    public function test_validacion()
    {
        $response = $this->post('/contacto', [
            'name' => 'Cesar Seigi',
            'email' => 'cesar@gmail.com',
            'message' => 'Muy buenas tardes',
        ]);

        $response->assertSessionDoesntHaveErrors([
            'name',
            'email',
            'message',
        ]);
        //Este caso de prueba testea entradas validas
    }

    public function test_parametro()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);
        $response->assertSee('test');
        $response->assertSee('test@gmail.com');
        //Esta prueba verifica que dentro de la respuesta vengan estas cadenas
        $response->assertSeeInOrder(['test', 'test@gmail.com']);
        //Esta prueba verifica que las cadenas vengan en ese orden
    }
}
