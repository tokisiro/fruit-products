<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Products_SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_season')->insert([
            ['product_id' => 1, 'season_id' => 1, 'created_at' => now(), 'updated_at' => now()], // 春
            ['product_id' => 1, 'season_id' => 3, 'created_at' => now(), 'updated_at' => now()], // 秋
            // 他の商品のリレーションも同じように追加
        ]);
    }
}
