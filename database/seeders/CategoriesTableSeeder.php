<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = 
        [
            [
                'name' => 'Máy  tính',
                
            ], 
            [
                'name' => 'Điện thoại'
            ], 
            [
                'name' => 'Phần cứng',
            ]
        ];
        foreach($categories as $category){
            DB::table('categories')->insert($category);
        }
    }
}
