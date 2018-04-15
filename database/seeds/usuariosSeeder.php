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
			for ($i=1000; $i < 1001; $i++) {
			    \DB::table('users')->insert(array(
			           'idUsuario' => $faker->randomElement(['2000','9000','7890']),
			           'username'  => $faker->firstNameFemale,
			           'email' => $faker->randomElement(['chocolate','vainilla','cheesecake']),
			           'password' => $faker->randomElement(['chocolate','vainilla','cheesecake'])
    ));
}
    }
}
