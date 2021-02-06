<?php

use App\PostInformation;
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
        $this->call([
            PostSeeder::class,
            CategorySeeder::class,
            PostInformationSeeder::class,
            TagSeeder::class,
            ]);
    }
}
