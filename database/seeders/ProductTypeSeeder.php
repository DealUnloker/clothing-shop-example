<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([[
            'name' => "Sweater",
        ], [
            'name' => "Dress",
        ], [
            'name' => "T-shirt",
        ], [
            'name' => "Shorts",
        ], [
            'name' => "Skirt",
        ], [
            'name' => "Jeans",
        ], [
            'name' => "Coat",
        ], [
            'name' => "Suit"
        ]]);
    }
}
