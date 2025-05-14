<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        'description' => '',
        ];
        DB::table('produ')->insert($param);
    }
}
