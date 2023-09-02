<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoesSizeSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('shoes_size')->count() === 0) {
            DB::update("ALTER TABLE shoes_size AUTO_INCREMENT=0;");

            DB::table('shoes_size')->insert([
                [
                    'name' => '35',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '35,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '36',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '36,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '37',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '37,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '38',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '38,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '39',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '39,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '40',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '40,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '41',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '41,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '42',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '42,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '43',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '43,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '44',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '44,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '45',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '45,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '46',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '46,5',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '47',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]);
        } else {
            error_log("\033[37;1;41m                                       \033[0m");
            error_log("\033[37;1;41m  Error: ShoesSize table is not empty  \033[0m");
            error_log("\033[37;1;41m                                       \033[0m");
        }
    }
}
