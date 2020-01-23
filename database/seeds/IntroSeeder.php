<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intro')->insert([
            'title' => 'Up To 35% Off This Week',
            'subtitle' => 'Just hurry up limited offer!',
            'body' => 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
            'btn1_text' => 'shop now',
            'btn2_text' => 'read more',
            'btn1_link' => '/shop',
            'btn2_link' => '/',
            'thumbnail' => 'cover-img-1.jpg',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
