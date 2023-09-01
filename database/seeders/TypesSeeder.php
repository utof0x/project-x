<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('types')->count() === 0) {
            DB::update("ALTER TABLE types AUTO_INCREMENT=0;");

            DB::table('types')->insert([
                [
                    'name' => 'clothes',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'shoes',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'name' => 'accessories',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]);
        } else {
            error_log("\033[37;1;41m                                   \033[0m");
            error_log("\033[37;1;41m  Error: Types table is not empty  \033[0m");
            error_log("\033[37;1;41m                                   \033[0m");
        }
    }
}
