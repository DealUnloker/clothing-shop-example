<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'img' => "https://preview.redd.it/wa3xbqc26zf51.jpg?width=640&crop=smart&auto=webp&s=7a841b1b4aad55aceb2c5c465af15642563ed063",
            'price' => mt_rand(0, 1000),
            'sizes_id' => mt_rand(0, 6),
            'genders_id' => mt_rand(0, 2),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
