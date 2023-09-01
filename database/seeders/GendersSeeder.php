<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('genders')->count() === 0) {
            DB::update("ALTER TABLE genders AUTO_INCREMENT=0;");

            DB::table('genders')->insert([
                [
                    'name' => 'female',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'male',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'unisex',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'children',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]);
        } else {
            error_log("\033[37;1;41m                                     \033[0m");
            error_log("\033[37;1;41m  Error: Genders table is not empty  \033[0m");
            error_log("\033[37;1;41m                                     \033[0m");
        }
    }
}
