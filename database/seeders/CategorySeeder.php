<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'BOI',
            'Human Resources',
            'Nigerian Labour Law',
            'Skill Enhancement',
            'SMEs',
            'Uncategorized',
        ];

        foreach($categories as $category) {
            \App\Models\Category::create([
                'user_id'   => 1,
                'name'      => $category,
                'slug'      => Str::slug($category),
            ]);
        }
    }
}
