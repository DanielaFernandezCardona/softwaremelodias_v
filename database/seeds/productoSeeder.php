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
      for ($i=20; $i < 27; $i++) {
          \DB::table('productos')->insert(array(
                 'codigoProducto' => $i,
                 'nombreProducto'  => $faker->randomElement(['cerveza Aguila','cerveza poker','cerveza Club Colombia','botella agua','vive 100','botella vino','cerveza Redds','aguardiente Blanco del Valle']),
                 'unidades' => $faker->numberBetween($min = 4, $max = 20),
                 'precioCompra' => $faker->numberBetween($min = 4000, $max = 30000),
                 'precioVenta' => $faker->numberBetween($min = 4000, $max = 30000),
                 'descripcion' => $faker->text($maxNbChars = 20),
                 'imagen' => $faker->randomElement(['https://www.superama.com.mx/Content/images/products/img_large/0750619250584L.jpg', 'http://www.discordoba.com/images/stories/virtuemart/product/EL3817.png', 'https://cloud10.todocoleccion.online/coleccionismo-cerveza/tc/2016/10/05/10/61882220.jpg','https://http2.mlstatic.com/aguardiente-blanco-del-valle-sin-azucar-375-ml-caneca-29-D_NQ_NP_716865-MCO25880962679_082017-F.jpg', 'http://www.bavaria.co/sites/g/files/ogq8776/f/201709/BOTELLA%20REDDS%20SILUETEADA%20OUT%2030%20%281%29.png', 'http://www.europrestandina.com/28-78-thickbox/club-colombia-roja.jpg', 'https://licorya.com/wp-content/uploads/2017/05/Cerveza-Club-Colombia-Negra.jpg', 'https://super.walmart.com.mx/images/product-images/img_large/00750105314362L.jpg', 'http://www.ventasinstitucionales.com/media/com_eshop/products/resized/vino_carinosito-560x560.jpg', 'https://www.ofistore.com/nphotos/3803.jpg'])

          ));
      }
    }
}
