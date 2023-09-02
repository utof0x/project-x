<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClothesSizeSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('clothes_size')->count() === 0) {
            DB::update("ALTER TABLE clothes_size AUTO_INCREMENT=0;");

            DB::table('clothes_size')->insert([
                [
                    'name' => 'XS',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'S',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'M',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'L',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'XL',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '2X',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '3X',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => '4X',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]);
        } else {
            error_log("\033[37;1;41m                                         \033[0m");
            error_log("\033[37;1;41m  Error: ClothesSize table is not empty  \033[0m");
            error_log("\033[37;1;41m                                         \033[0m");
        }
    }
}
