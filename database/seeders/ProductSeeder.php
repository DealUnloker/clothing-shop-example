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
            [
                'name' => Str::random(10),
                'description' => Str::random(200),
                'img' => "https://i.pinimg.com/564x/42/3b/05/423b0525e4aeb7c21246c3c47836a117.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => mt_rand(0, 3),
                'product_type_id' => mt_rand(0, 8),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => Str::random(10),
                'description' => Str::random(200),
                'img' => "https://i.pinimg.com/564x/42/3b/05/423b0525e4aeb7c21246c3c47836a117.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => mt_rand(0, 3),
                'product_type_id' => mt_rand(0, 8),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]]);
    }
}
