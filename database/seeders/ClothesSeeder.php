<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClothesSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('clothes')->count() === 0) {
            DB::update("ALTER TABLE clothes AUTO_INCREMENT=0;");

            DB::table('clothes')->insert([
                [
                    'article' => 'TEST_GK1111',
                    'name' => 'Спортивний костюм XS жіночий за 1000 гривень',
                    'type_id' => 1,
                    'gender_id' => 1,
                    'category_id' => 2,
                    'clothes_size_id' => 1,
                    'shoes_size_id' => null,
                    'color_id' => 1,
                    'quantity' => 1,
                    'price' => 999.99,
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'article' => 'TEST_GK2222',
                    'name' => 'Худі M чоловіче за 500 гривень',
                    'type_id' => 1,
                    'gender_id' => 2,
                    'category_id' => 3,
                    'clothes_size_id' => 3,
                    'shoes_size_id' => null,
                    'color_id' => 1,
                    'quantity' => 1,
                    'price' => 499.99,
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'article' => 'TEST_GK3333',
                    'name' => 'Кросівки 40p жіночі за 1500 гривень',
                    'type_id' => 2,
                    'gender_id' => 1,
                    'category_id' => 9,
                    'clothes_size_id' => null,
                    'shoes_size_id' => 11,
                    'color_id' => 1,
                    'quantity' => 1,
                    'price' => 1499.99,
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'article' => 'TEST_GK4444',
                    'name' => 'Кросівки 43p чоловічі за 2500 гривень',
                    'type_id' => 2,
                    'gender_id' => 2,
                    'category_id' => 9,
                    'clothes_size_id' => null,
                    'shoes_size_id' => 17,
                    'color_id' => 1,
                    'quantity' => 1,
                    'price' => 2499.99,
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'article' => 'TEST_GK5555',
                    'name' => 'Кросівки 38p unisex за 2000 гривень',
                    'type_id' => 2,
                    'gender_id' => 2,
                    'category_id' => 9,
                    'clothes_size_id' => null,
                    'shoes_size_id' => 7,
                    'color_id' => 1,
                    'quantity' => 1,
                    'price' => 1999.99,
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'article' => 'TEST_GK6666',
                    'name' => 'Пляшка для води за 20грн',
                    'type_id' => 3,
                    'gender_id' => 3,
                    'category_id' => 14,
                    'clothes_size_id' => null,
                    'shoes_size_id' => null,
                    'color_id' => 1,
                    'quantity' => 1,
                    'price' => 19.99,
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]);
        } else {
            error_log("\033[37;1;41m                                     \033[0m");
            error_log("\033[37;1;41m  Error: Clothes table is not empty  \033[0m");
            error_log("\033[37;1;41m                                     \033[0m");
        }
    }
}
