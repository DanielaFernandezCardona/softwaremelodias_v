<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
      for ($i=1000; $i < 1020; $i++) {
          \DB::table('productos')->insert(array(
                 'codigoProducto' => $i,
                 'nombreProducto'  => $faker->randomElement(['cerveza águila','cerveza poker','cerveza']),
                 'descripcion' => $faker->text($maxNbChars = 20),
                 'unidades' => $faker->numberBetween($min = 4, $max = 20),
                 'preciocompra' => $faker->numberBetween($min = 4000, $max = 30000),
                 'precioventa' => $faker->numberBetween($min = 4000, $max = 30000),
                 'unidades' => $faker->numberBetween($min = 4000, $max = 30000), 
                 'imagen' => $faker->randomElement(['http://www.discordoba.com/images/stories/virtuemart/product/EL3817.png','https://cloud10.todocoleccion.online/coleccionismo-cerveza/tc/2016/10/05/10/61882220.jpg'])
    ));
}
    }
}

/*
$faker->randomElement(['cerveza águila','cerveza poker','cerveza Reds','vive 100','agua','cerveza costeña','1L aguardiente cristal','1L Ron Viejo de Caldas','cerveza Club Colombia', ,'Gaseosa','cerveza Michelada','1/2 Ron','1/2 Aguardiente cristal']

*/