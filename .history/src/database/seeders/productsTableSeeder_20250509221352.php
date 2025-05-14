<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'name' => 'キウイ',
        'price' => 800,
        'image' => '',
        'description' => 'キウイは甘みと酸味のバランスが絶妙なフルーツです。ビタミンCなどの栄養素も豊富のため、美肌効果や疲労回復効果も期待できます。もぎたてフルーツのスムージーをお召し上がりください!',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
        'name' => 'ストロベリー',
        'price' => 1200,
        'image' => '',
        'description' => '大人から子供まで大人気のストロベリー。当店では鮮度抜群の完熟いちごを使用しています。ビタミンCはもちろん食物繊維も豊富なため、腸内環境の改善も期待できます。もぎたてフルーツのスムージーをお召し上がりください！',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
        'name' => 'オレンジ',
        'price' => 850,
        'image' => '',
        'description' => '当店では酸味と甘みのバランスが抜群のネーブルオレンジを使用しています。酸味は控えめで、甘さと濃厚な果汁が魅力の商品です。もぎたてフルーツのスムージをお召し上がりください！',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
        'name' => 'スイカ',
        'price' => 700,
        'image' => '',
        'description' => '甘くてシャリシャリ食感が魅力のスイカ。全体の90％が水分のため、暑い日の水分補給や熱中症予防、カロリーが気になる方にもおすすめの商品です。もぎたてフルーツのスムージーをお召し上がりください！',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
        'name' => 'ピーチ',
        'price' => 1000,
        'image' => '',
        'description' => '豊潤な香りととろけるような甘さが魅力のピーチ。美味しさはもちろん見た目の可愛さも抜群の商品です。ビタミンEが豊富なため、生活習慣病の予防にもおすすめです。もぎたてフルーツのスムージーをお召し上がりください！',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
        'name' => '',
        'price' => 800,
        'image' => '',
        'description' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);
        $param = [
        'name' => 'キウイ',
        'price' => 800,
        'image' => '',
        'description' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);
        $param = [
        'name' => 'キウイ',
        'price' => 800,
        'image' => '',
        'description' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);
        $param = [
        'name' => 'キウイ',
        'price' => 800,
        'image' => '',
        'description' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);
        $param = [
        'name' => 'キウイ',
        'price' => 800,
        'image' => '',
        'description' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);
    }
}
