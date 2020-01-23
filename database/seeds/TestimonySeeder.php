<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimony')->insert([
            'name' => 'Alysha Myers',
            'location' => 'Miami Florida, USA',
            'body' => '" A small river named Duden flows by their place and supplies it with the
            necessary regelialia.',
            'thumbnail' => 'person1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('testimony')->insert([
            'name' => 'James Fisher',
            'location' => 'New York, USA',
            'body' => '" One day however a small line of blind text by the name of Lorem Ipsum decided
            to leave for the far World of Grammar.',
            'thumbnail' => 'person2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('testimony')->insert([
            'name' => 'Jacob Webb',
            'location' => 'Athens, Greece',
            'body' => '" Even the all-powerful Pointing has no control about the blind texts it is an almost
            unorthographic life One day however a small line of blind text by the name',
            'thumbnail' => 'person3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
