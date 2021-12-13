<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([[
            'name' => "All"
        ],[
            'name' => "Male",
        ], [
            'name' => "Female",
        ]]);
    }
}
