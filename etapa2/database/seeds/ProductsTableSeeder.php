<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(App\Product::class, 100)->create();

      // $ruta = $form["image_url"]->store('public');
      // $nombreArchivo = basename($ruta);
      // // $faker = Faker::create();
      // DB::table('products')->insert([
      //     'name' => 'Argentina',
      //     // 'image_url' => $faker->imageUrl($width = 800, $height = 800, 'sports'),
      //     'image_url' => url('/public/images/product-1.jpg'),
      //     'price' => 1000,
      //     'category_id' => 9,
      //     'promo' => true,
      //     'created_at' => date('Y-m-d'),
      //     'updated_at' => date('Y-m-d'),
      // ]);
    }
}
