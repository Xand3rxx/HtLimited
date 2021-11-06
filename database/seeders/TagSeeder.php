<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Business tips',
            'Tips',
            'Startup ideas',
            'Skill Enhancement',
        ];

        foreach($tags as $tag) {
            \App\Models\tag::create([
                'user_id'   => 1,
                'name'      => $tag,
                'slug'      => Str::slug($tag),
            ]);
        }
    }
}
