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
        $this->call(SizesSeeder::class);
        for ($i = 1; $i <= 50; $i++) {
            $this->call(ProductSeeder::class);
        }
    }
}
