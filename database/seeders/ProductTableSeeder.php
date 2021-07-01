<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Some pipes',
            'slug' => 'pipe',
            'type' => 'pvc',
            'price' => 31000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        DB::table('products')->insert([
            'name' => 'pump',
            'slug' => 'pump',
            'type' => 'dayliff',
            'price' => 31000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        DB::table('products')->insert([
            'name' => 'motar',
            'slug' => 'motar',
            'type' => 'londex',
            'price' => 31000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
                 
    }
}