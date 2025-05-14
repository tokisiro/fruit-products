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
