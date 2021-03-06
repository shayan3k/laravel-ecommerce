<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ProductsTableSeeder::class, PostSeeder::class, UserSeeder::class, FeaturedImagesSeeder::class, IntroSeeder::class, TestimonySeeder::class, SubscriptionSeeder::class]);
    }
}
