<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('categories')->count() === 0) {
            DB::update("ALTER TABLE categories AUTO_INCREMENT=0;");

            DB::table('categories')->insert([
                [
                    'name' => 'originals',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'tracksuits',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'sweatshirts_and_hoodies',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'tshirts',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'shorts',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'jackets_and_vests',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'leggings_and_braces',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'socks',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'sneakers',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'sandals_and_flip_flops',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'caps',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'bags_and_backpacks',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'hats',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'water_bottles',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]);
        } else {
            error_log("\033[37;1;41m                                        \033[0m");
            error_log("\033[37;1;41m  Error: Categories table is not empty  \033[0m");
            error_log("\033[37;1;41m                                        \033[0m");
        }
    }
}
