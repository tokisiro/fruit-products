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
        'name' => 'tony',
        'price' => 35,
        'image' => 'American'
        ''
        ];
        DB::table('authors')->insert($param);
    }
}
