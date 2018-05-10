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

        /*
      DB::table('users')->insert(array(
             'id' => 1098,
             'username'  => 'pepitoAdmin',
             'email' => 'pepito@gmail.com',
             'password' => bcrypt('pepito'),
             'type' => 'admin'
      ));
*/
		  $faker = Faker::create();
			for ($i=20; $i < 27; $i++) {
			    \DB::table('users')->insert(array(
			           'id' => $i,
			           'username'  => $faker->userName,
			           'email' => $faker->freeEmail,
			           'password' => \Hash::make ('dfc')
    ));


     \DB::table('clientes')->insert(array(
         'cedula' => $i,
         'nombreCompleto'  => $faker->name,
         'direccion' => $faker->address,
         'telefono' => $faker->phoneNumber,
         'rol' => $faker->randomElement(['cliente']),
         'tipoDocumento' => $faker->randomElement(['cedula','cedulaExtranjería','tarjetaIdentidad']),
         'users_idUsuario' => $i
    ));

/*
    \DB::table('premios')->insert(array(
        'id' => $i,
        'nombre' => $faker->randomElement(['Viaje','200 mil','300 mil','1 millon de pesos']),
        'tipo' => $faker->randomElement(['Consumo','Efectivo','Redimible']),
        'descripcion' => $faker->paragraph
    ));
    */
}
    }
}
