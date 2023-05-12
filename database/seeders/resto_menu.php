<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class resto_menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++) {
            DB::table('resto_menus')->insert([
                'name' => fake()->word(),
                'thumbnail' => fake()->imageUrl(),
                'price'=> fake()->randomNumber(5,true),
            ]);
        }
     
    }
}
