<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $name1 = 'Internacional';
      DB::table('categories')->insert([
          'name' => $name1,
          'created_at' => date('Y-m-d'),
          'updated_at' => date('Y-m-d'),
          'slug' => Str::slug($name1)
      ]);

      $name2 = 'URBA';
      DB::table('categories')->insert([
          'name' => $name2,
          'created_at' => date('Y-m-d'),
          'updated_at' => date('Y-m-d'),
          'slug' => Str::slug($name2)
      ]);
    }
}
