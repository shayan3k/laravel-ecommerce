<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscriptions')->insert([
            'email' => 'shayan3k@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('subscriptions')->insert([
            'email' => 'shayan.motalebi@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
