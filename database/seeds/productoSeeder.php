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
      for ($i=3000; $i < 3005; $i++) {
          \DB::table('productos')->insert(array(
                 'codigoProducto' => $i,
                 'nombreProducto'  => $faker->randomElement(['cerveza águila','cerveza poker','cerveza']),
                 'unidadesDisponibles' => $faker->numberBetween($min = 4, $max = 20),
                 'precioCompra' => $faker->numberBetween($min = 4000, $max = 30000),
                 'precioVenta' => $faker->numberBetween($min = 4000, $max = 30000),
                 'descripcion' => $faker->text($maxNbChars = 20),
                 'imagen' => $faker->randomElement(['http://www.discordoba.com/images/stories/virtuemart/product/EL3817.png','https://cloud10.todocoleccion.online/coleccionismo-cerveza/tc/2016/10/05/10/61882220.jpg'])
          ));
      }
    }
}
