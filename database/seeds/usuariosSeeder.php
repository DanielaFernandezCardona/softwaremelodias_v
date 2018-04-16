<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

		  $faker = Faker::create();
			for ($i=2000; $i < 2050; $i++) {
			    \DB::table('users')->insert(array(
			           'idUsuario' => $i,
			           'username'  => $faker->userName,
			           'email' => $faker->freeEmail,
			           'password' => \Hash::make ('dfc')
    ));


                   \DB::table('clientes')->insert(array(
                       'cedula' => $i,
                       'nombreCompleto'  => $faker->name,
                       'direccion' => $faker->address,
                       'telefono' => $faker->phoneNumber,
                       'rol' => $faker->randomElement(['cliente','empleado']),
                       'tipoDocumento' => $faker->randomElement(['cedula','cedulaExtranjería','tarjetaIdentidad']),
                       'users_idUsuario' => $i               
    ));
}
    }
}
