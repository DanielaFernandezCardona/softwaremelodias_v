<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testPersona extends TestCase
{
    /**
     * Prueba para verificar si un dato ya está registrado
     *
     * @return void
     */
    public function testPersonaDB()
    {
        $this->assertDatabaseHas('clientes', [
        'cedula' => '2005'

    ]);
    }
}
