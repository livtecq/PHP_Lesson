<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '野菜',
                'sort_order' => 1,
            ],
            [
                'name' => '肉',
                'sort_order' => 2,
            ],
            [
                'name' => '魚',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '果菜類',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '果物',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'いちご',
                'sort_order' => 3,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ぶどう',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => '鮭',
                'sort_order' => 5,
                'primary_category_id' => 3
            ],
            [
                'name' => 'マグロ',
                'sort_order' => 6,
                'primary_category_id' => 3
            ],
        ]);
    }
}