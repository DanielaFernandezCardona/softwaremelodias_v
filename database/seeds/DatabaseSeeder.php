<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
       'idUsuario' => intval(56788764),
       'username' => 'odpndn',
       'email' => 'ajaddk@gmail.com',       
       'password' => '689ddjj'

      ));  

         DB::table('clientes')->insert(array(
       'nombreCompleto' => 'kodnd',
       'cedula' => intval(56788764),
       'direccion' => 'dfghj',
       'telefono' => '344455',
       'rol' => 'empleado',       
       'tipoDocumento' => 'cedula',
       'users_idUsuario' => intval(56788764)
       
     ));
    }
}
