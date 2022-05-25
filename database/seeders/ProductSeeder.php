<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'think and grow rich',
            'price' => '500',
            'category' => 'Self Improvement',
            'description' => Str::random(500),
            'image' => 'https://onlinebooksoutlet.com/wp-content/uploads/2019/03/think-and-grow-rich-buy-online.jpeg'
        ]);
    }
}
