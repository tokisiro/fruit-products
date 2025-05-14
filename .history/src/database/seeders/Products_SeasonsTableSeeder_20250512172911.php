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
            //キウイ
            ['product_id' => 1, 'season_id' => 3, 'created_at' => now(), 'updated_at' => now()], // 秋
            ['product_id' => 1, 'season_id' => 4, 'created_at' => now(), 'updated_at' => now()], // 冬
            //ストロベリー
            ['product_id' => 2, 'season_id' => 1, 'created_at' => now(), 'updated_at' => now()],//春
            //オレンジ
            ['product_id' => 3, 'season_id' => 4, 'created_at' => now(), 'updated_at' => now()],//冬
            //スイカ
            ['product_id' => 4, 'season_id' => 2, 'created_at' => now(), 'updated_at' => now()],//夏
            //ピーチ
            ['product_id' => 5, 'season_id' => 2, 'created_at' => now(), 'updated_at' => now()],//夏
            //シャインマスカット
            ['product_id' => 6, 'season_id' => 2, 'created_at' => now(), 'updated_at' => now()],//夏
            ['product_id' => 6, 'season_id' => 3, 'created_at' => now(), 'updated_at' => now()],//秋
            //パイナップル
            ['product_id' => 7, 'season_id' => 1, 'created_at' => now(), 'updated_at' => now()],//春
            ['product_id' => 7, 'season_id' => 2, 'created_at' => now(), 'updated_at' => now()],//夏
            //ブドウ
            ['product_id' => 8, 'season_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 8, 'season_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
