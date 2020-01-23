<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturedImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featured_images')->insert([
            'title' => 'New Arrival Dress',
            'thumbnail' => 'item-1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('featured_images')->insert([
            'title' => 'sale 20% off',
            'thumbnail' => 'item-2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('featured_images')->insert([
            'title' => 'shoes for men',
            'thumbnail' => 'item-3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('featured_images')->insert([
            'title' => 'fashion for men',
            'thumbnail' => 'item-4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
