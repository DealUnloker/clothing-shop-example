<?php

namespace Database\Seeders;

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
        $this->call(GendersSeeder::class);
        for ($i = 1; $i <= 10; $i++) {
            $this->call(ProductTypeSeeder::class);
        }
        for ($i = 1; $i <= 200; $i++) {
            $this->call(ProductSeeder::class);
        }
    }
}
