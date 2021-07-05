<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
            [
                'name'=>'pipes',
                'slug'=>'pipes',
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name'=>'cables',
                'slug'=>'cables',
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name'=>'adaptor set',
                'slug'=>'adaptor set',
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name'=>'cover Plate',
                'slug'=>'cover Plate',
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name'=>'airline',
                'slug'=>'airlines',
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name'=>'insulating Tapes',
                'slug'=>'insulating Tapes',
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name'=>'electrodes',
                'slug'=>'electrodes',
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
        ]);
    }
}
