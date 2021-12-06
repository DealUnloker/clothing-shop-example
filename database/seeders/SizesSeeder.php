<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([[
            'name' => "XS",
            'description' => "placeholder"
        ], [
            'name' => "S",
            'description' => "placeholder"
        ], [
            'name' => "M",
            'description' => "placeholder"
        ], [
            'name' => "L",
            'description' => "placeholder"
        ], [
            'name' => "XL",
            'description' => "placeholder"
        ], [
            'name' => "XXL",
            'description' => "placeholder"
        ]]);
    }
}
