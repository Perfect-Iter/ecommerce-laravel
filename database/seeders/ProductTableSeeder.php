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
        Product::create([
            'name' => 'Steel pipes',
            'slug' => '1.25 inch steel pipe',
            'size' => '32mm',
            'price' => 1000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(1);
        Product::create([
            'name' => 'Steel pipes',
            'slug' => '1.5 inch steel pipe',
            'size' => '32mm',
            'price' => 1200,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(1);
        Product::create([
            'name' => 'Steel pipes',
            'slug' => '2 inch steel pipe',
            'size' => '32mm',
            'price' => 1800,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(1);


        Product::create([
            'name' => 'cable',
            'slug' => '1.5mm2 4core cable',
            'size' => '4core',
            'price' => 135,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(2);
        Product::create([
            'name' => 'cable',
            'slug' => '2.5mm2 4core cable',
            'size' => '4core',
            'price' => 220,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(2);
        Product::create([
            'name' => 'cable',
            'slug' => '4.00mm2 4core cable',
            'size' => '4core',
            'price' => 350,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(2);
        Product::create([
            'name' => 'cable',
            'slug' => '6.00mm2 4core cable',
            'size' => '4core',
            'price' => 450,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(2);


        Product::create([
            'name' => 'Adaptor set',
            'slug' => '1.25 inch adaptor set',
            'size' => '1.25 inch',
            'price' => 2000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(3);
        Product::create([
            'name' => 'Adaptor set',
            'slug' => '1.5 inch adaptor set',
            'size' => '1.5 inch',
            'price' => 2000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(3);
        Product::create([
            'name' => 'Adaptor set',
            'slug' => '2.0 inch adaptor set',
            'size' => '2.0 inch',
            'price' => 3000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(3);


        Product::create([
            'name' => 'Cover Plates',
            'slug' => '1.25 inch Cover Plates',
            'size' => '1.25 inch',
            'price' => 10000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(4);
        Product::create([
            'name' => 'Cover Plates',
            'slug' => '2.0 inch inch Cover Plates',
            'size' => '2.0 inch',
            'price' => 12000,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(4);


        Product::create([
            'name' => 'Airlines',
            'slug' => 'airlines',
            'size' => 'n/a',
            'price' => 250,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(5);
        Product::create([
            'name' => 'Insulating Tapes',
            'slug' => 'insulating tapes',
            'size' => 'n/a',
            'price' => 250,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(6);
        Product::create([
            'name' => 'Electrodes',
            'slug' => 'electrodes',
            'size' => 'pair',
            'price' => 2500,
            'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(7);
                 
    }
}